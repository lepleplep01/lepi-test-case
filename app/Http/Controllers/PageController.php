<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function caseStudy()
    {
        return view('pages.case-study');
    }

    public function newsBlog()
    {
        return view('pages.news-blog');
    }

    public function career()
    {
        return view('pages.career');
    }

    public function serviceDigitalAdvertising()
    {
        return view('pages.services.digital-advertising');
    }

    public function servicePerformanceCreative()
    {
        return view('pages.services.performance-creative');
    }

    public function serviceWebsiteDevelopment()
    {
        return view('pages.services.website-development');
    }

    public function serviceSeo()
    {
        return view('pages.services.seo');
    }

    public function serviceProfessional()
    {
        return view('pages.services.professional-service');
    }

    public function serviceCommunityProgram()
    {
        return view('pages.services.community-program');
    }

    public function achievementDemo()
    {
        return view('pages.achievement-demo');
    }

    public function serviceTraining()
    {
        return view('pages.services.training');
    }
}
