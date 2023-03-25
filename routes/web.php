<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminMessageController;
use App\Http\Controllers\Admin\AdminCompetitionController;
use App\Http\Controllers\Admin\AdminSponsorshipController;
use App\Http\Controllers\Admin\AdminExhibitionController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminTalkshowController;
use App\Http\Controllers\Admin\AdminJudgeController;
use App\Http\Controllers\Admin\AdminFinalistController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/','App\Http\Controllers\HomeController@index')->name('landing');
Route::get('/about','App\Http\Controllers\PageController@history')->name('history');
Route::get('/competition','App\Http\Controllers\PageController@competition')->name('competition');
Route::get('/art_exhibition','App\Http\Controllers\PageController@art_ex')->name('art_ex');
Route::get('/contact','App\Http\Controllers\PageController@contact')->name('contact');
Route::get('/sponsorship','App\Http\Controllers\PageController@sponsorship')->name('sponsorship');
Route::get('/coming_soon','App\Http\Controllers\PageController@coming_soon')->name('coming_soon');

Route::post('/contact', 'App\Http\Controllers\HomeController@sendContact')->name('contact.send');

Route::prefix('admin')->group(function () {
    
    Route::get('login', 'Admin\AdminAuthController@showFormLogin')->name('login');
    Route::post('login', 'Admin\AdminAuthController@login'); 
    // Route::get('register', 'Admin\AdminAuthController@showFormRegister')->name('register');
    // Route::post('register', 'Admin\AdminAuthController@register');

    Route::group(['middleware' => 'auth'], function () {
        
        Route::get('/', [AdminHomeController::class, 'index'])->name('home');
        Route::get('logout', 'Admin\AdminAuthController@logout')->name('logout');

        Route::prefix('message')->group(function () {
            Route::get('/', [AdminMessageController::class, 'index']);
            Route::post('/delete', [AdminMessageController::class, 'destroy']);
        });

        Route::prefix('competition')->group(function () {
            Route::get('/', [AdminCompetitionController::class, 'index']);
            Route::get('/edit/{id}', [AdminCompetitionController::class, 'edit']);
            Route::post('/update/{id}', [AdminCompetitionController::class, 'update']);
        });

        Route::prefix('sponsorship')->group(function () {
            Route::get('/', [AdminSponsorshipController::class, 'index']);
            Route::get('/create', [AdminSponsorshipController::class, 'create']);
            Route::post('/store', [AdminSponsorshipController::class, 'store']);
            Route::get('/edit/{id}', [AdminSponsorshipController::class, 'edit']);
            Route::post('/update/{id}', [AdminSponsorshipController::class, 'update']);
            Route::post('/delete', [AdminSponsorshipController::class, 'destroy']);
        });

        Route::prefix('exhibition')->group(function () {
            Route::get('/', [AdminExhibitionController::class, 'index']);
            Route::get('/create', [AdminExhibitionController::class, 'create']);
            Route::post('/store', [AdminExhibitionController::class, 'store']);
            Route::get('/edit/{id}', [AdminExhibitionController::class, 'edit']);
            Route::post('/update/{id}', [AdminExhibitionController::class, 'update']);
            Route::post('/delete', [AdminExhibitionController::class, 'destroy']);
        });

        Route::prefix('user')->group(function () {
            Route::get('/', [AdminUserController::class, 'index']);
            Route::get('/create', [AdminUserController::class, 'create']);
            Route::post('/store', [AdminUserController::class, 'store']);
            Route::get('/edit/{id}', [AdminUserController::class, 'edit']);
            Route::post('/update/{id}', [AdminUserController::class, 'update']);
            Route::post('/delete', [AdminUserController::class, 'destroy']);
        });

        Route::prefix('talkshow')->group(function () {
            Route::get('/', [AdminTalkshowController::class, 'index']);
            Route::get('/create', [AdminTalkshowController::class, 'create']);
            Route::post('/store', [AdminTalkshowController::class, 'store']);
            Route::get('/edit/{id}', [AdminTalkshowController::class, 'edit']);
            Route::post('/update/{id}', [AdminTalkshowController::class, 'update']);
            Route::post('/delete', [AdminTalkshowController::class, 'destroy']);
        });

        Route::prefix('judge')->group(function () {
            Route::get('/', [AdminJudgeController::class, 'index']);
            Route::get('/create', [AdminJudgeController::class, 'create']);
            Route::post('/store', [AdminJudgeController::class, 'store']);
            Route::get('/edit/{id}', [AdminJudgeController::class, 'edit']);
            Route::post('/update/{id}', [AdminJudgeController::class, 'update']);
            Route::post('/delete', [AdminJudgeController::class, 'destroy']);
        });

        Route::prefix('finalist')->group(function () {
            Route::get('/', [AdminFinalistController::class, 'index']);
            Route::get('/create', [AdminFinalistController::class, 'create']);
            Route::post('/store', [AdminFinalistController::class, 'store']);
            Route::get('/edit/{id}', [AdminFinalistController::class, 'edit']);
            Route::post('/update/{id}', [AdminFinalistController::class, 'update']);
            Route::post('/delete', [AdminFinalistController::class, 'destroy']);
        });
    });
});

Route::get('/the-10th-pprf','App\Http\Controllers\PageController@pprf')->name('pprf');
Route::get('/the-10th-pprf_theme','App\Http\Controllers\PageController@pprf_theme')->name('pprf_theme');
Route::get('/the-10th-pprf_registration','App\Http\Controllers\PageController@pprf_registration')->name('pprf_registration');
Route::get('/the-10th-pprf_FAQTrivia','App\Http\Controllers\PageController@pprf_faqtrivia')->name('pprf_faqtrivia');

Route::get('/research-mindedness','App\Http\Controllers\PageController@remind')->name('remind');
Route::get('/research-mindedness_theme','App\Http\Controllers\PageController@remind_theme')->name('remind_theme');
Route::get('/research-mindedness_registration','App\Http\Controllers\PageController@remind_registration')->name('remind_registration');
Route::get('/research-mindedness_FAQTrivia','App\Http\Controllers\PageController@remind_faqtrivia')->name('remind_faqtrivia');

Route::get('/ideation','App\Http\Controllers\PageController@ideation')->name('ideation');
Route::get('/ideation_theme','App\Http\Controllers\PageController@ideation_theme')->name('ideation_theme');
Route::get('/ideation_registration','App\Http\Controllers\PageController@ideation_registration')->name('ideation_registration');
Route::get('/ideation_FAQTrivia','App\Http\Controllers\PageController@ideation_faqtrivia')->name('ideation_faqtrivia');

Route::get('/commoviecator','App\Http\Controllers\PageController@tav')->name('tav');
Route::get('/commoviecator_theme','App\Http\Controllers\PageController@tav_theme')->name('tav_theme');
Route::get('/commoviecator_registration','App\Http\Controllers\PageController@tav_registration')->name('tav_registration');
Route::get('/commoviecator_FAQTrivia','App\Http\Controllers\PageController@tav_faqtrivia')->name('tav_faqtrivia');


Route::get('/mediation','App\Http\Controllers\PageController@mediation')->name('mediation');
Route::get('/mediation_theme','App\Http\Controllers\PageController@mediation_theme')->name('mediation_theme');
Route::get('/mediation_registration','App\Http\Controllers\PageController@mediation_registration')->name('mediation_registration');
Route::get('/mediation_FAQTrivia','App\Http\Controllers\PageController@mediation_faqtrivia')->name('mediation_faqtrivia');

Route::get('/liblicious','App\Http\Controllers\PageController@liblicious')->name('liblicious');
Route::get('/liblicious_theme','App\Http\Controllers\PageController@liblicious_theme')->name('liblicious_theme');
Route::get('/liblicious_registration','App\Http\Controllers\PageController@liblicious_registration')->name('liblicious_registration');
Route::get('/liblicious_FAQTrivia','App\Http\Controllers\PageController@liblicious_faqtrivia')->name('liblicious_faqtrivia');

Route::get('/parade-jurnalistik','App\Http\Controllers\PageController@parjur')->name('parjur');
Route::get('/parade-jurnalistik_theme','App\Http\Controllers\PageController@parjur_theme')->name('parjur_theme');
Route::get('/parade-jurnalistik_registration','App\Http\Controllers\PageController@parjur_registration')->name('parjur_registration');
Route::get('/parade-jurnalistik_FAQTrivia','App\Http\Controllers\PageController@parjur_faqtrivia')->name('parjur_faqtrivia');

Route::get('/pre_event','App\Http\Controllers\PageController@pre_event')->name('pre_event');
Route::get('/main_event','App\Http\Controllers\PageController@main_event')->name('main_event');
Route::get('/closing','App\Http\Controllers\PageController@closing')->name('closing');