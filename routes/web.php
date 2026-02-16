<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about-us', [PageController::class, 'about'])->name('about');
Route::get('/case-study', [PageController::class, 'caseStudy'])->name('case-study');
Route::get('/news-blog', [PageController::class, 'newsBlog'])->name('news-blog');
Route::get('/career', [PageController::class, 'career'])->name('career');

Route::prefix('services')->group(function () {
    Route::get('/digital-advertising', [PageController::class, 'serviceDigitalAdvertising'])->name('services.digital-advertising');
    Route::get('/performance-creative', [PageController::class, 'servicePerformanceCreative'])->name('services.performance-creative');
    Route::get('/website-development', [PageController::class, 'serviceWebsiteDevelopment'])->name('services.website-development');
    Route::get('/seo', [PageController::class, 'serviceSeo'])->name('services.seo');
    Route::get('/professional-service', [PageController::class, 'serviceProfessional'])->name('services.professional-service');
    Route::get('/community-program-development', [PageController::class, 'serviceCommunityProgram'])->name('services.community-program');
    Route::get('/training', [PageController::class, 'serviceTraining'])->name('services.training');
});
