<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\SidebarController;
use App\User;


use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
class SchoolMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        if ($user && $user->role->name == 'school') {
            if (auth()->user()->hasPermission('admin_notifications_list')) {
                $adminUser = User::find(1207);

                \Session::forget('impersonated');

                $unreadNotifications = $adminUser->getUnReadNotifications();

                view()->share('unreadNotifications', $unreadNotifications);
            }

            $generalSettings = getGeneralSettings();
            view()->share('generalSettings', $generalSettings);


            $userLanguages = $this->getUserLanguagesLists($generalSettings);

            view()->share('userLanguages', $userLanguages);

            $currency = currencySign();
            view()->share('currency', $currency);

            $user = auth()->user();
            view()->share('authUser', $user);

            $sidebarController = new SidebarController();

            $sidebarBeeps = [];
            $sidebarBeeps['courses'] = $sidebarController->getCoursesBeep();
            $sidebarBeeps['bundles'] = $sidebarController->getBundlesBeep();
            $sidebarBeeps['webinars'] = $sidebarController->getWebinarsBeep();
            $sidebarBeeps['textLessons'] = $sidebarController->getTextLessonsBeep();
            $sidebarBeeps['reviews'] = $sidebarController->getReviewsBeep();
            $sidebarBeeps['classesComments'] = $sidebarController->getClassesCommentsBeep();
            $sidebarBeeps['blogComments'] = $sidebarController->getBlogCommentsBeep();
            $sidebarBeeps['payoutRequest'] = $sidebarController->getPayoutRequestBeep();
            $sidebarBeeps['offlinePayments'] = $sidebarController->getOfflinePaymentsBeep();

            view()->share('sidebarBeeps', $sidebarBeeps);


            // locale config
            if (!Session::has('locale')) {
                Session::put('locale', mb_strtolower(getDefaultLocale()));
            }
            App::setLocale(session('locale'));
        }

        return redirect('/school'); // Redirect to home or any other page
    }
}
