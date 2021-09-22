<?php

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
Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');


// Route::get('recruiter/home', 'HomeController@recruiterHome')->name('recruiter.home')->middleware(['auth','is_recruiter']);

Route::get('/partner-zone/home', function () {
    return view('home/index');
});
Route::post('/getthejsvalue','HomeController@getjsvalue');
//Admin Routes
Route::middleware(['auth','is_admin'])->prefix('admin')->group(function(){
  Route::get('/home','HomeController@adminHome')->name('admin.home');
  Route::get('/freelancer/add','HomeController@addfreelancer')->name('freelancer.add');
  Route::get('/recruiter/add','HomeController@addrecruiter')->name('recruiter.add');
  Route::post('/useradd','HomeController@addinguser')->name('adding.user');
  Route::get('/userdelete/{id}','HomeController@deletinguser')->name('deleting.user');
  Route::get('/viewrecruiters','HomeController@viewrecruiters')->name('view.recruiters');
  Route::get('/viewfreelancers','HomeController@viewfreelancers')->name('view.freelancers');
  Route::get('/trackactivity/{id}','HomeController@trackactivity')->name('track.activity');
});

// Freelancer Routes

Route::middleware(['auth','is_freelancer'])->prefix('freelancer')->group(function(){
    Route::get('/home', 'HomeController@freelancerHome')->name('freelancer.home');

    // Candidate
    Route::get('/candidate', 'CandidateController@index')->name('candidate.all');
    Route::get('/candidate/add', 'CandidateController@add')->name('candidate.add');
    Route::post('/candidate/store', 'CandidateController@store')->name('candidate.store');
    Route::get('/candidate/view/{id}','CandidateController@view')->name('candidate.view');
    Route::get('/candidate/edit/{id}','CandidateController@edit')->name('candidate.edit');
    Route::get('/candidate/delete/{id}','CandidateController@destroy')->name('candidate.delete');
    Route::post('/candidate/update/{id}','CandidateController@update')->name('candidate.update');
   
    // Application
    Route::get('/application/new', 'HomeController@freelancerjobs')->name('application.new');
    Route::get('/application', 'HomeController@freelanceralljobs')->name('application.all');
    Route::get('/application/selected/{id}', 'HomeController@freelancerselected')->name('application.selected');
    Route::get('/application/notselected/{id}', 'HomeController@freelancernotselected')->name('application.notselected');
    // Route::get('/application/jobs/{id}','HomeController@freelancerparticularjob')->name('application.particularview');
    Route::get('/application/new/apply/{id}','HomeController@jobsapply')->name('application.apply');
    Route::get('/application/status/{id}','HomeController@jobstatus')->name('application.status');
    Route::post('/application/store','HomeController@applicationstore');
    Route::get('/myactivity','HomeController@myactivity')->name('freelancer.trackactivity');
});
Route::middleware(['auth','is_recruiter'])->prefix('recruiter')->group(function(){
    Route::get('/home', 'HomeController@recruiterHome')->name('recruiter.home');

    // Candidate
    // Route::get('/candidate', 'HomeController@freelancerHome')->name('candidate.all');
    Route::get('/jobs/add', 'JobController@create')->name('jobs.add');
    Route::get('/jobs/edit/{id}','JobController@edit')->name('jobs.edit');
    ROute::get('/jobs/all','JobController@index')->name('jobs.index');
    Route::get('/jobs/view/{id}','JobController@show')->name('jobs.show');
    Route::post('/jobs/store', 'JobController@store')->name('jobs.store');
    Route::post('/jobs/update/{id}','JobController@update')->name('jobs.update');
    Route::get('/jobs/delete/{id}','JobController@destroy')->name('jobs.destroy');
    Route::get('/jobs/liveit/{id}','JobController@liveit')->name('jobs.live');
    Route::get('/jobs/candidates','JobController@jobcandidates')->name('jobs.candidates');
    Route::get('/jobs/candidates/{id}','JobController@candidatesofjob')->name('jobs.particularcandidates');
    Route::get('/jobs/{id}/selected','JobController@candidateselection')->name('jobs.candidateselection');
    Route::get('/jobs/{id}/notselected','JobController@candidatenotselection')->name('jobs.candidatenot');
    Route::get('/jobs/candidates/view/{id}/{appid}','JobController@candidateview')->name('candidate.view');
    Route::get('/jobs/{id}/pending','JobController@candidatepending');
    Route::get('/myactivity','HomeController@myactivity')->name('recruiter.trackactivity');
});




Route::get('/partner-zone/candidates', function () {
    return view('candidates/index');
});



Route::get('/partner-zone/vacancies', function () {
    return view('vacancies/index');
});

Route::get('/partner-zone/applications', function () {
    return view('applications/index');
});

Route::get('/partner-zone/tickets', function () {
    return view('tickets/index');
});

Route::get('/partner-zone/help', function () {
    return view('help/index');
});





Route::get('/', function () {
    return view('dashboard');
});


Route::group(['prefix' => 'email'], function(){
    Route::get('inbox', function () { return view('pages.email.inbox'); });
    Route::get('read', function () { return view('pages.email.read'); });
    Route::get('compose', function () { return view('pages.email.compose'); });
});

Route::group(['prefix' => 'apps'], function(){
    Route::get('chat', function () { return view('pages.apps.chat'); });
    Route::get('calendar', function () { return view('pages.apps.calendar'); });
});

Route::group(['prefix' => 'ui-components'], function(){
    Route::get('alerts', function () { return view('pages.ui-components.alerts'); });
    Route::get('badges', function () { return view('pages.ui-components.badges'); });
    Route::get('breadcrumbs', function () { return view('pages.ui-components.breadcrumbs'); });
    Route::get('buttons', function () { return view('pages.ui-components.buttons'); });
    Route::get('button-group', function () { return view('pages.ui-components.button-group'); });
    Route::get('cards', function () { return view('pages.ui-components.cards'); });
    Route::get('carousel', function () { return view('pages.ui-components.carousel'); });
    Route::get('collapse', function () { return view('pages.ui-components.collapse'); });
    Route::get('dropdowns', function () { return view('pages.ui-components.dropdowns'); });
    Route::get('list-group', function () { return view('pages.ui-components.list-group'); });
    Route::get('media-object', function () { return view('pages.ui-components.media-object'); });
    Route::get('modal', function () { return view('pages.ui-components.modal'); });
    Route::get('navs', function () { return view('pages.ui-components.navs'); });
    Route::get('navbar', function () { return view('pages.ui-components.navbar'); });
    Route::get('pagination', function () { return view('pages.ui-components.pagination'); });
    Route::get('popovers', function () { return view('pages.ui-components.popovers'); });
    Route::get('progress', function () { return view('pages.ui-components.progress'); });
    Route::get('scrollbar', function () { return view('pages.ui-components.scrollbar'); });
    Route::get('scrollspy', function () { return view('pages.ui-components.scrollspy'); });
    Route::get('spinners', function () { return view('pages.ui-components.spinners'); });
    Route::get('tabs', function () { return view('pages.ui-components.tabs'); });
    Route::get('tooltips', function () { return view('pages.ui-components.tooltips'); });
});

Route::group(['prefix' => 'advanced-ui'], function(){
    Route::get('cropper', function () { return view('pages.advanced-ui.cropper'); });
    Route::get('owl-carousel', function () { return view('pages.advanced-ui.owl-carousel'); });
    Route::get('sweet-alert', function () { return view('pages.advanced-ui.sweet-alert'); });
});

Route::group(['prefix' => 'forms'], function(){
    Route::get('basic-elements', function () { return view('pages.forms.basic-elements'); });
    Route::get('advanced-elements', function () { return view('pages.forms.advanced-elements'); });
    Route::get('editors', function () { return view('pages.forms.editors'); });
    Route::get('wizard', function () { return view('pages.forms.wizard'); });
});

Route::group(['prefix' => 'charts'], function(){
    Route::get('apex', function () { return view('pages.charts.apex'); });
    Route::get('chartjs', function () { return view('pages.charts.chartjs'); });
    Route::get('flot', function () { return view('pages.charts.flot'); });
    Route::get('morrisjs', function () { return view('pages.charts.morrisjs'); });
    Route::get('peity', function () { return view('pages.charts.peity'); });
    Route::get('sparkline', function () { return view('pages.charts.sparkline'); });
});

Route::group(['prefix' => 'tables'], function(){
    Route::get('basic-tables', function () { return view('pages.tables.basic-tables'); });
    Route::get('data-table', function () { return view('pages.tables.data-table'); });
});

Route::group(['prefix' => 'icons'], function(){
    Route::get('feather-icons', function () { return view('pages.icons.feather-icons'); });
    Route::get('flag-icons', function () { return view('pages.icons.flag-icons'); });
    Route::get('mdi-icons', function () { return view('pages.icons.mdi-icons'); });
});

Route::group(['prefix' => 'general'], function(){
    Route::get('blank-page', function () { return view('pages.general.blank-page'); });
    Route::get('faq', function () { return view('pages.general.faq'); });
    Route::get('invoice', function () { return view('pages.general.invoice'); });
    Route::get('profile', function () { return view('pages.general.profile'); });
    Route::get('pricing', function () { return view('pages.general.pricing'); });
    Route::get('timeline', function () { return view('pages.general.timeline'); });
});

Route::group(['prefix' => 'auth'], function(){
    Route::get('login', function () { return view('pages.auth.login'); });
    Route::get('register', function () { return view('pages.auth.register'); });
});

Route::group(['prefix' => 'error'], function(){
    Route::get('404', function () { return view('pages.error.404'); });
    Route::get('500', function () { return view('pages.error.500'); });
});

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

// 404 for undefined routes
Route::any('/{page?}',function(){
    return View::make('pages.error.404');
})->where('page','.*');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
