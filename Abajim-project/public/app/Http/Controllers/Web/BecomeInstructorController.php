<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Mixins\RegistrationPackage\UserPackage;
use App\Models\BecomeInstructor;
use App\Models\Category;
use App\Models\RegistrationPackage;
use App\Models\Role;
use App\Models\School_level;
use App\Models\UserOccupation;
use App\Models\Material;
use App\Models\Option;
use App\UserLevel;
use App\UserMatiere;
use Illuminate\Http\Request;

class BecomeInstructorController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if ($user->isTeacher()) {
            $categories = Category::where('parent_id', null)
                ->with('subCategories')
                ->get();
                $matiere = Material::where('section_id', 1)->get();
                $option = Option::where('niveau', 4)->take(4)->get();
            $occupations = $user->occupations->pluck('category_id')->toArray();

            $lastRequest = BecomeInstructor::where('user_id', $user->id)
                ->where('status', 'pending')
                ->first();

            $isOrganizationRole = (!empty($lastRequest) and $lastRequest->role == Role::$organization);
            $isInstructorRole = (empty($lastRequest) or $lastRequest->role == Role::$teacher);

            $data = [
                'pageTitle' => trans('site.become_instructor'),
                'user' => $user,
                'lastRequest' => $lastRequest,
                'categories' => $categories,
                'occupations' => $occupations,
                'isOrganizationRole' => $isOrganizationRole,
                'isInstructorRole' => $isInstructorRole,
                'matiere' => $matiere,
                'option' => $option

            ];

            return view('web.default.user.become_instructor.index', $data);
        }

        abort(404);
    }
    public function indexteacher()
    {
        $user = auth()->user();

        if ($user->isTeacher()) {
            $categories = Category::where('parent_id', null)
                ->with('subCategories')
                ->get();
                $levelIds = [6, 7, 8, 9, 10, 11];
                $level = School_level::whereIn('id', $levelIds)->get();
                $matiere = Material::where('section_id' ,25)->get();
                $option = Option::where('niveau', 4)->take(4)->get();
            $occupations = $user->occupations->pluck('category_id')->toArray();

            $lastRequest = BecomeInstructor::where('user_id', $user->id)
                ->where('status', 'pending')
                ->first();

            $isOrganizationRole = (!empty($lastRequest) and $lastRequest->role == Role::$organization);
            $isInstructorRole = (empty($lastRequest) or $lastRequest->role == Role::$teacher);

            $data = [
                'pageTitle' => trans('site.become_instructor'),            
                'level' => $level ,
                'user' => $user,
                'lastRequest' => $lastRequest,
                'categories' => $categories,
                'occupations' => $occupations,
                'isOrganizationRole' => $isOrganizationRole,
                'isInstructorRole' => $isInstructorRole,
                'matiere' => $matiere,
                'option' => $option

            ];

            return view('web.default.user.become_instructor.indexteacher', $data);
        }

        abort(404);
    }

    public function storeteacher(Request $request)
    {
        $user = auth()->user();

        if ($user->isTeacher()) {
            $lastRequest = BecomeInstructor::where('user_id', $user->id)
                ->whereIn('status', ['pending', 'accept'])
                ->first();


            if (empty($lastRequest)) {
                $this->validate($request, [
                    
                    'occupations' => [
                        function ($attribute, $value, $fail) use ($request) {
                            if (empty($value) && empty($request->input('occupationslevelx²x²'))) {
                                $fail('The occupations or occupationsoption is required.');
                            }
                        },
                    ],
                    'occupationslevel' => [
                        function ($attribute, $value, $fail) use ($request) {
                            if (empty($value) && empty($request->input('occupations'))) {
                                $fail('The occupations or occupationsoption is required.');
                            }
                        },
                    ],
                    'certificate' => 'nullable|string',                 
                    'identity_scan' => 'required'
                    
                ]);

                $data = $request->all();

                BecomeInstructor::create([
                    'user_id' => $user->id,      
                    'certificate' => $data['certificate'],
                    'created_at' => time()
                ]);


                $user->update([                  
                    'matier_id' => array_key_exists('occupations', $data) ? $data['occupations'] : null,
                    'level_id' => array_key_exists('occupationslevel', $data) ? $data['occupationslevel'] : null,
                    'identity_scan' => $data['identity_scan'],
                    'certificate' => $data['certificate'],
                ]);
               
                

            }

            if ((!empty(getRegistrationPackagesGeneralSettings('show_packages_during_registration')) and getRegistrationPackagesGeneralSettings('show_packages_during_registration'))) {
                return redirect(route('becomeInstructorPackages'));
            }

            $toastData = [
                'title' => trans('public.request_success'),
                'msg' => trans('site.become_instructor_success_request'),
                'status' => 'success'
            ];
            return redirect('/panel')->with(['toast' => $toastData]);
        }

        abort(404);
    }
    public function store (Request $request)
    {
       
        $user = auth()->user();

        if ($user->isTeacher()) {
            $lastRequest = BecomeInstructor::where('user_id', $user->id)
                ->whereIn('status', ['pending', 'accept'])
                ->first();
              

           
                $this->validate($request, [
                    
                    'occupations' => [
                        function ($attribute, $value, $fail) use ($request) {
                            if (empty($value) && empty($request->input('occupationsoption'))) {
                                $fail('The occupations or occupationsoption is required.');
                            }
                        },
                    ],
                    'occupationsoption' => [
                        function ($attribute, $value, $fail) use ($request) {
                            if (empty($value) && empty($request->input('occupations'))) {
                                $fail('The occupations or occupationsoption is required.');
                            }
                        },
                    ],
                    'certificate' => 'nullable|string',                 
                    'identity_scan' => 'required'
                    
                ]);

                $data = $request->all();
           
                BecomeInstructor::create([
                    'user_id' => $user->id,
                    
                    'certificate' => $data['certificate'],
                    'created_at' => time()
                ]);
                if (!empty($data['occupations'])) {
                    UserMatiere::where('teacher_id', $user->id)->delete();
    
                    foreach ($data['occupations'] as $matiereid) {
                        UserMatiere::create([
                            'teacher_id' => $user->id,         
                            'matiere_id' => $matiereid,
                            'created_at' => time()
                        ]);
                    
                    }
                }
                if (!empty($data['occupationsll'])) {
                    UserLevel::where('teacher_id', $user->id)->delete();
    
                    foreach ($data['occupationsll'] as $levelid) {
                        UserLevel::create([
                            'teacher_id' => $user->id,         
                            'level_id' => $levelid,
                            'created_at' => time()
                        ]);
                    
                    }
                }
                
             
                // $user->update([                  
                //     'matier_id' => array_key_exists('occupations', $data) ? $data['occupations'] : null,
                //     'option_id' => array_key_exists('occupationsoption', $data) ? $data['occupationsoption'] : null,
                //     'identity_scan' => $data['identity_scan'],
                //     'certificate' => $data['certificate'],
                // ]);
               
                

            

            if ((!empty(getRegistrationPackagesGeneralSettings('show_packages_during_registration')) and getRegistrationPackagesGeneralSettings('show_packages_during_registration'))) {
                return redirect(route('becomeInstructorPackages'));
            }

            $toastData = [
                'title' => trans('public.request_success'),
                'msg' => trans('site.become_instructor_success_request'),
                'status' => 'success'
            ];
            return redirect('/panel')->with(['toast' => $toastData]);
        }

        abort(404);
    }

    public function packages()
    {
        $user = auth()->user();

        $role = 'instructors';

        if (!empty($user) and $user->isUser()) {
            $becomeInstructor = BecomeInstructor::where('user_id', $user->id)->first();

            if (!empty($becomeInstructor) and $becomeInstructor->role == Role::$organization) {
                $role = 'organizations';
            }

            $packages = RegistrationPackage::where('role', $role)
                ->where('status', 'active')
                ->get();

            $userPackage = new UserPackage();
            $defaultPackage = $userPackage->getDefaultPackage($role);

            $data = [
                'pageTitle' => trans('update.registration_packages'),
                'packages' => $packages,
                'defaultPackage' => $defaultPackage,
                'becomeInstructor' => $becomeInstructor ?? null,
                'selectedRole' => $role
            ];

            return view('web.default.user.become_instructor.packages', $data);
        }

        abort(404);
    }
}
