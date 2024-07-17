<?php

namespace App\Http\Controllers\Panel;

use App\Enfant;
use App\Http\Controllers\Controller;
use App\Mixins\RegistrationPackage\UserPackage;
use App\Models\Comment;
use App\Models\Meeting;
use App\Models\ReserveMeeting;
use App\Models\Sale;
use App\Models\Support;
use App\User;

use App\Models\Webinar;
use App\Models\SectionMat;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\School_level;
use App\Models\Video;
use App\Models\Material;
use App\Models\Manuels;
use App\Models\Option;
use App\Models\Role;
use App\UserLevel;
use App\UserMatiere;
use DB;

class DashboardController extends Controller
{


    public function getmaterialsforlevel(Request $request)
    {
        $currentDay = date('l'); // Note: 'l' is lowercase 'L'
        $sectionEnfantid = SectionMat::where('level_id', $request->level_id)->pluck('id');


        if (!empty($request->level_id)) {
            $data = Material::select('name', 'id', 'path', 'section_id')->where('section_id', $sectionEnfantid[0])->take(10)
                    ->with([ 'section.level'])->get(); // $sectionEnfantid[0]
            $instructors = User::where('role_name', Role::$teacher)
                        ->select('id', 'full_name', 'avatar', 'bio')
                        ->where('status', 'active')
                        ->where(function ($query) {
                            $query->where('ban', false)
                                ->orWhere(function ($query) {
                                    $query->whereNotNull('ban_end_at')
                                          ->where('ban_end_at', '<', time());
                                });
                        })->with([
                            'meeting' => function ($query) use ($currentDay) { // Use the $currentDay variable
                           
                                $query->with(['meetingTimes' => function ($subQuery) use ($currentDay) {
                                    $subQuery->where("day_label", strtolower($currentDay));
                                }]);
                                $query->withCount('meetingTimes');
                            },
                            'occupations'
                        ])
                        ->limit(8)
                        ->get();
            foreach ($data as $material) {
                // Check if the material has a section
                if ($material->section) {
                    // Access the level relationship if the section exists
                    $level = $material->section->level;
                    $material->level = $level;
                    // Now you can use $level as needed
                }
            }
        } else {
            $data = Material::all();
            $instructors = User::where('role_name', Role::$teacher)
            ->select('id', 'full_name', 'avatar', 'bio')
            ->where('status', 'active')
            ->where(function ($query) {
                $query->where('ban', false)
                    ->orWhere(function ($query) {
                        $query->whereNotNull('ban_end_at')
                              ->where('ban_end_at', '<', time());
                    });
            })->with([
                'meeting' => function ($query) use ($currentDay) { // Use the $currentDay variable
               
                    $query->with(['meetingTimes' => function ($subQuery) use ($currentDay) {
                        $subQuery->where("day_label", strtolower($currentDay));
                    }]);
                    $query->withCount('meetingTimes');
                },
                'occupations'
            ])
            ->limit(8)
            ->get();
        }

        return response()->json([
            'materials' => $data,
            'instructors' => $instructors
        ]);
    }
    public function dashboard(Request $request)
    {
     
        $user = auth()->user();
        $sectionm = SectionMat::where('id', $user->section_id)->pluck('name');
        $levelm = School_level::where('id', $user->level_id)->pluck('name');
        $listmatieree = UserMatiere::where('teacher_id', $user->id)->pluck('matiere_id');

        $matiereNames = []; // Array to store the names of materials

        foreach ($listmatieree as $matiereId) {
            // Fetch the name of each material and add it to the array
            $matiereName = Material::where('id', $matiereId)->pluck('name')->first(); // Assuming 'name' is the field you want
            $matiereNames[] = $matiereName;
        }

        $matieretearcher = Material::where('id', $listmatieree[0])->pluck('name');

        $optiontearcher = Option::where('id', $user->option_id)->pluck('name');
        $enfants = Enfant::where("parent_id", "=", auth()->user()->id)->orderBy("id", "desc")->with('level')->get();
        $optiontearcher1 = option::where('name', 'Italien')->pluck('niveau');
        $videos = Video::where("id", ">", 24)->paginate(3);
        $matiereEnfant = Material::where('section_id', 19)->get();

        $leveltt = [];
        $loadedlevel = [];
        if (!empty($user->option_id)) {
            foreach ($optiontearcher1 as $optionTeacher) {

                $leveltt = School_level::where('id', $optionTeacher)->pluck('name');
                if ($leveltt) {
                    $loadedlevel[] = [$leveltt];
                }
            }
        }
        // dd($loadedlevel);
        //$leveltt = School_level::where('id', $optiontearcher->niveau)->pluck('name');          


        $matiere = [];
        $option1 = [];
        $matiere1 = [];
        $options = [];
        if (!empty($user->section_id)) {
            $matiere = Material::where('section_id', $user->section_id)->get();
        }
        $material2 = Material::all();

        if (!empty($user->option_id)) {

            $option1 = Option::where('id', $user->option_id)->get();

            $options = Option::where('name',  $option1[0]->name)->where('niveau', $user->level_id)->with('level')->get();
        }

        if (!empty($user->level_id)) {
        }

      
            $levelName = [];
            $sectiondd = SectionMat::where('id', $user->section_id)->pluck('name');
            $listmatiere = UserMatiere::where('teacher_id', $user->id)->pluck('matiere_id');
            $matiereN = []; // Array to store the names of materials
            $userLevelIds = UserLevel::where('teacher_id', $user->id)->pluck('level_id');

            foreach ($listmatiere as $matiereId) {
                // Fetch the name of each material and add it to the array
                $matieregetname = Material::where('id', $matiereId)->pluck('name');
                $matiereN[] = $matieregetname;
            }


            $filteredMatiere1 = [];
            foreach ($matiereN as $matierej) {

                $filteredMatiere12 = Material::where('name', $matierej[0])
                    ->with(['section' => function ($query) use ($userLevelIds) {
                        $query->whereIn('level_id', $userLevelIds)->with('level');
                    }])->whereNotNull('path')->where('path', '<>', '')->get();
                $filteredMatiere1[] =  $filteredMatiere12;
            }


            // Initialize an array to keep track of loaded paths
            $loadedPaths = [];

            // Initialize an array to store the filtered results
            $matiere1 = [];

            foreach ($filteredMatiere1 as $key => $collection) {
                // Apply the filter to each collection
                $filteredCollection = $collection->filter(function ($matiere) use (&$loadedPaths) {
                    // Check if the section is not null and the path is not already loaded
                    if (!is_null($matiere->section) && !in_array($matiere->path, $loadedPaths)) {
                        $loadedPaths[] = $matiere->path;
                        return true;
                    }
                    return false;
                });

                // Store the filtered collection if it is not empty
                if (!$filteredCollection->isEmpty()) {
                    $matiere1[$key] = $filteredCollection;
                }
            }
            
        

        $nextBadge = $user->getBadges(true, true);

        $data = [
            'pageTitle' => trans('panel.dashboard'),
            'nextBadge' => $nextBadge,
            'sectionm' => $sectionm,
            'levelm' => $levelm,
            'videos' => $videos,
            'matiere' => $matiere,
            'matiere1' => $matiere1,
            'option1' => $option1,
            'leveltt' => $leveltt,
            'options' => $options,
            'enfants' => $enfants,
            'matiereEnfant' => $matiereEnfant,
            'optiontearcher'  => $optiontearcher,
            'matieretearcher'  => $matieretearcher,
            'matiereNames'  => $matiereNames,
            'userLevelIds'  => $userLevelIds

        ];

        if (!$user->isUser()) {
            $meetingIds = Meeting::where('creator_id', $user->id)->pluck('id')->toArray();
            $pendingAppointments = ReserveMeeting::whereIn('meeting_id', $meetingIds)
                ->whereHas('sale')
                ->where('status', ReserveMeeting::$pending)
                ->count();

            $userWebinarsIds = $user->webinars->pluck('id')->toArray();
            $supports = Support::whereIn('webinar_id', $userWebinarsIds)->where('status', 'open')->get();

            $comments = Comment::whereIn('webinar_id', $userWebinarsIds)
                ->where('status', 'active')
                ->whereNull('viewed_at')
                ->get();

            $time = time();
            $firstDayMonth = strtotime(date('Y-m-01', $time)); // First day of the month.
            $lastDayMonth = strtotime(date('Y-m-t', $time)); // Last day of the month.

            $monthlySales = Sale::where('seller_id', $user->id)
                ->whereNull('refund_at')
                ->whereBetween('created_at', [$firstDayMonth, $lastDayMonth])
                ->get();

            $data['pendingAppointments'] = $pendingAppointments;
            $data['supportsCount'] = count($supports);
            $data['commentsCount'] = count($comments);
            $data['monthlySalesCount'] = count($monthlySales) ? $monthlySales->sum('total_amount') : 0;
            $data['monthlyChart'] = $this->getMonthlySalesOrPurchase($user);
        } else {
            $webinarsIds = $user->getPurchasedCoursesIds();

            $webinars = Webinar::whereIn('id', $webinarsIds)
                ->where('status', 'active')
                ->get();

            $reserveMeetings = ReserveMeeting::where('user_id', $user->id)
                ->whereHas('sale')
                ->where('status', ReserveMeeting::$open)
                ->get();

            $supports = Support::where('user_id', $user->id)
                ->whereNotNull('webinar_id')
                ->where('status', 'open')
                ->get();

            $comments = Comment::where('user_id', $user->id)
                ->whereNotNull('webinar_id')
                ->where('status', 'active')
                ->get();

            $data['webinarsCount'] = count($webinars);
            $data['supportsCount'] = count($supports);
            $data['commentsCount'] = count($comments);
            $data['reserveMeetings'] = $reserveMeetings;
            $data['reserveMeetingsCount'] = count($reserveMeetings);
            $data['monthlyChart'] = $this->getMonthlySalesOrPurchase($user);
        }
        $data['optionsWithLevels'] = $options;
        $data['leveltt'] = $loadedlevel;
        return view(getTemplate() . '.panel.dashboard', $data);
    }
    public function dashboardenfant(Request $request, $id)
    {
      
       // Get the current day name, e.g., "Monday", "Tuesday", etc.
$currentDay = date('l'); // Note: 'l' is lowercase 'L'

$instructors = User::where('role_name', Role::$teacher)
    ->select('id', 'full_name', 'avatar', 'bio')
    ->where('status', 'active')
    ->where(function ($query) {
        $query->where('ban', false)
            ->orWhere(function ($query) {
                $query->whereNotNull('ban_end_at')
                      ->where('ban_end_at', '<', time());
            });
    })->with([
        'meeting' => function ($query) use ($currentDay) { // Use the $currentDay variable
       
            $query->with(['meetingTimes' => function ($subQuery) use ($currentDay) {
                $subQuery->where("day_label", strtolower($currentDay));
            }]);
            $query->withCount('meetingTimes');
        },
        'occupations'
    ])
    ->limit(8)
    ->get();


        $user = auth()->user();
        $sectionm = SectionMat::where('id', $user->section_id)->pluck('name');
        $levelm = School_level::where('id', $user->level_id)->pluck('name');
        $matieretearcher = Material::where('id', $user->matier_id)->pluck('name');
        $optiontearcher = Option::where('id', $user->option_id)->pluck('name');
        $enfants = Enfant::where("parent_id", "=", auth()->user()->id)->orderBy("id", "desc")->with('level')->get();
        $optiontearcher1 = option::where('name', 'Italien')->pluck('niveau');
        $videos = Video::where("id", ">", 24)->paginate(3);
        $matiereEnfant = Material::where('section_id', $user->section_id)->get();
        $userLevelName = School_level::where('id', $user->level_id)->pluck('name');

        $leveltt = [];
        $loadedlevel = [];
        if (!empty($user->option_id)) {
            foreach ($optiontearcher1 as $optionTeacher) {

                $leveltt = School_level::where('id', $optionTeacher)->pluck('name');
                if ($leveltt) {
                    $loadedlevel[] = [$leveltt];
                }
            }
        }
        // dd($loadedlevel);
        //$leveltt = School_level::where('id', $optiontearcher->niveau)->pluck('name');          


        $matiere = [];
        $option1 = [];
        $matiere1 = [];
        $options = [];
        if (!empty($user->section_id)) {
          
            $matiere = Material::where('section_id', $user->section_id)->get();
            //dd($matiere);
        }
        $material2 = Material::all();

        if (!empty($user->option_id)) {

            $option1 = Option::where('id', $user->option_id)->get();

            $options = Option::where('name',  $option1[0]->name)->where('niveau', $user->level_id)->with('level')->get();
        }

        if (!empty($user->level_id)) {
        }

        if (!empty($user->matier_id)) {
            $levelName = [];
            $sectiondd = SectionMat::where('id', $user->section_id)->pluck('name');
            $matieregetname = Material::where('id', $user->matier_id)->pluck('name');
            $filteredMatiere1 = Material::where('name', $matieregetname[0])
                ->with(['section' => function ($query) {
                    $query->with('level');
                }])
                ->whereNotNull('path')->where('path', '<>', '')->get();
            foreach ($filteredMatiere1 as $material) {
                if ($material->section) {
                    $levelName = $material->section->name;
                    // do something with $levelName
                }
            }
            $loadedPaths = [];

            $matiere1 = $filteredMatiere1->filter(function ($matiere) use (&$loadedPaths) {

                if (!in_array($matiere->path, $loadedPaths)) {
                    $loadedPaths[] = $matiere->path;

                    return true;
                }
                return false;
            });

            // $matiere1 = $this->filters($request, $matiere1);

        }

        $nextBadge = $user->getBadges(true, true);
        
        $reserveMeetings = ReserveMeeting::where('user_id', $user->id)
        ->whereHas('sale')
     
        ->get();
  //   dd(count($userLevel)); 
        $data = [
            'pageTitle' => trans('panel.dashboard'),
            'nextBadge' => $nextBadge,
            'sectionm' => $sectionm,
            'levelm' => $levelm,
            'videos' => $videos,
            'matiere' => $matiere,
            'matiere1' => $matiere1,
            'option1' => $option1,
            'leveltt' => $leveltt,
            'options' => $options,
            'enfants' => $enfants,
            'matiereEnfant' => $matiereEnfant,
            'optiontearcher'  => $optiontearcher,
            'matieretearcher'  => $matieretearcher,
            'instructors'  =>$instructors,
            'userLevelName'=> $userLevelName,

            'reserveMeetings'=>$reserveMeetings
        ];

        if (!$user->isUser()) {
            $meetingIds = Meeting::where('creator_id', $user->id)->pluck('id')->toArray();
            $pendingAppointments = ReserveMeeting::whereIn('meeting_id', $meetingIds)
                ->whereHas('sale')
                ->where('status', ReserveMeeting::$pending)
                ->count();

            $userWebinarsIds = $user->webinars->pluck('id')->toArray();
            $supports = Support::whereIn('webinar_id', $userWebinarsIds)->where('status', 'open')->get();

            $comments = Comment::whereIn('webinar_id', $userWebinarsIds)
                ->where('status', 'active')
                ->whereNull('viewed_at')
                ->get();

            $time = time();
            $firstDayMonth = strtotime(date('Y-m-01', $time)); // First day of the month.
            $lastDayMonth = strtotime(date('Y-m-t', $time)); // Last day of the month.

            $monthlySales = Sale::where('seller_id', $user->id)
                ->whereNull('refund_at')
                ->whereBetween('created_at', [$firstDayMonth, $lastDayMonth])
                ->get();

            $data['pendingAppointments'] = $pendingAppointments;
            $data['supportsCount'] = count($supports);
            $data['commentsCount'] = count($comments);
            
            $data['monthlySalesCount'] = count($monthlySales) ? $monthlySales->sum('total_amount') : 0;
            $data['monthlyChart'] = $this->getMonthlySalesOrPurchase($user);
        } else {
            $webinarsIds = $user->getPurchasedCoursesIds();

            $webinars = Webinar::whereIn('id', $webinarsIds)
                ->where('status', 'active')
                ->get();

            $reserveMeetings = ReserveMeeting::where('user_id', $user->id)
                ->whereHas('sale')
                ->where('status', ReserveMeeting::$open)
                ->get();

            $supports = Support::where('user_id', $user->id)
                ->whereNotNull('webinar_id')
                ->where('status', 'open')
                ->get();

            $comments = Comment::where('user_id', $user->id)
                ->whereNotNull('webinar_id')
                ->where('status', 'active')
                ->get();

            $data['webinarsCount'] = count($webinars);
            $data['supportsCount'] = count($supports);
            $data['commentsCount'] = count($comments);
            $data['reserveMeetings'] = $reserveMeetings;
            $data['reserveMeetingsCount'] = count($reserveMeetings);
            $data['monthlyChart'] = $this->getMonthlySalesOrPurchase($user);
        }
        $data['optionsWithLevels'] = $options;
        $data['leveltt'] = $loadedlevel;
        return view(getTemplate() . '.panel.dashboardenfant', $data);
    }

    public function addEnfant(Request $request)
    {
        $organization = auth()->user();
        $data = $request->all();

        // Arrays of images for garcon and fille
        $garconImages = ['/f11.png','/f14.png', '/f16.png', '/f18.png']; // Add your image file names here
        $filleImages = ['/f12.png','/f13.png', '/f15.png', '/f17.png']; // Add your image file names here

        // Select a random image based on the sexe
        if ($data['sexe'] === 'Garçon') {
            $path = $garconImages[array_rand($garconImages)];
        } else {
            $path = $filleImages[array_rand($filleImages)];
        }
        $id_section=SectionMat::where('level_id',$data['level_id'])->value('id');
        Enfant::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'sexe' => $data['sexe'],
            'level_id' => $data['level_id'],
            'parent_id' =>  auth()->user()->id,
            'path' => $path,
            'created_at' => time(),
        ]);
        User::create([
            'full_name' => $data['nom'],
            'role_name' => 'enfant',
            'role_id' => 8,
            'sexe' => $data['sexe'],
            'level_id' => $data['level_id'],
            'section_id' => $id_section,
            'status ' =>  'active',
            'organ_id' =>  auth()->user()->id,
            'avatar' => $path,
            'verified'=> 1 ,
            'language'=> 'AR',
            'password' => bcrypt('123456'),
            'financial_approval ' => 0,
            'created_at' => time(),
        ]);



        $url = '/panel/enfant/1';
        return redirect($url);
    }
    public function filters(Request $request, $query)
    {

        $sort = $request->get('sort');
        //  dd($sort); // // yes i Check if $sort is the expected value
        if ($sort and $sort !== 'all') {
            //  dd('in') ; //yes in 
            $query->where('section_id', $sort); // where not filtre query with condition where  in my test 
            // dd($query) ; // where not filtre query with condition where
        }


        return $query;
    }

    public function allinstructor()
    {
        $user = auth()->user();
        $sectionm = SectionMat::where('id', $user->section_id)->pluck('name');
        $levelm = School_level::where('id', $user->level_id)->pluck('name');
        $matiere = Material::where('section_id', $user->section_id)->get();
        $optiontearcher = option::where('id', $user->option_id)->pluck('name');


        $data = [
            'sectionm' => $sectionm,
            'levelm' => $levelm,
            'matiere' => $matiere,

            'optiontearcher' => $optiontearcher

        ];

        return view(getTemplate() . '.panel.all_instructor', $data);
    }
    public function getManuelBySMatiereId($id)
    {
        $user = auth()->user();
        $sectionm = SectionMat::where('id', $user->section_id)->pluck('name');
        $levelm = School_level::where('id', $user->level_id)->pluck('name');
        $matiere = Material::where('section_id', $user->section_id)->get();
        $optiontearcher = option::where('id', $user->option_id)->pluck('name');


        $data = [
            'sectionm' => $sectionm,

            'levelm' => $levelm,
            'matiere' => $matiere,
            'optiontearcher' => $optiontearcher
        ];

        return view(getTemplate() . '.panel.dashboard', $data);
    }
    private function getMonthlySalesOrPurchase($user)
    {
        $months = [];
        $data = [];

        // all 12 months
        for ($month = 1; $month <= 12; $month++) {
            $date = Carbon::create(date('Y'), $month);

            $start_date = $date->timestamp;
            $end_date = $date->copy()->endOfMonth()->timestamp;

            $months[] = trans('panel.month_' . $month);

            if (!$user->isUser()) {
                $monthlySales = Sale::where('seller_id', $user->id)
                    ->whereNull('refund_at')
                    ->whereBetween('created_at', [$start_date, $end_date])
                    ->sum('total_amount');

                $data[] = round($monthlySales, 2);
            } else {
                $monthlyPurchase = Sale::where('buyer_id', $user->id)
                    ->whereNull('refund_at')
                    ->whereBetween('created_at', [$start_date, $end_date])
                    ->count();

                $data[] = $monthlyPurchase;
            }
        }

        return [
            'months' => $months,
            'data' => $data
        ];
    }
}
