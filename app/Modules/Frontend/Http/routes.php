<?php
/*----------------------------------------------------------
Home
----------------------------------------------------------*/
Route::group(['prefix' => '/'] , function () {

    $homeController = App\Http\Controllers\HomeControllers::class;
    Route::get('/',[$homeController,'index']);
    Route::get('/about',[$homeController,'about']);
    Route::get('/changeLang',[$homeController,'changeLang']);

    Route::group(['prefix' => 'contactUs'], function() {
        $contactUsController = App\Http\Controllers\ContactUsControllers::class;
        Route::get('/',[$contactUsController,'index']);
        Route::post('/',[$contactUsController,'store']);
    });

    Route::group(['prefix' => 'blogs'], function() {
        $blogController = App\Http\Controllers\BlogControllers::class;
        Route::get('/',[$blogController,'index']);
        Route::get('/{id}',[$blogController,'show']);
    });
    
    Route::group(['prefix' => 'services'], function() {
        $serviceController = App\Http\Controllers\ServiceControllers::class;
        Route::get('/',[$serviceController,'index']);
        Route::get('/{id}',[$serviceController,'show']);
    });
    
    Route::group(['prefix' => 'products'], function() {
        $productController = App\Http\Controllers\ProductControllers::class;
        Route::get('/',[$productController,'index']);
        Route::get('/assessment-solutions',[$productController,'solutions']);
        Route::get('/human-capital',[$productController,'human_capital']);
        Route::get('/measurement-systems',[$productController,'measurement_systems']);
    });    

    Route::group(['prefix' => 'careers'], function() {
        $careerController = App\Http\Controllers\CareerControllers::class;
        Route::get('/openings',[$careerController,'index']);
        Route::get('/openings/{id}',[$careerController,'show']);
        Route::get('/openings/{id}/cv',[$careerController,'cv']);
        Route::post('/openings/{id}/cv',[$careerController,'post_cv']);
        Route::get('/our_team',[$careerController,'our_team']);
        Route::post('/our_team',[$careerController,'join_our_team']);
    });    
});