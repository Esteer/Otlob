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
Route::group(['middleware'=>['web','admin']],function()
{
    Route::get('/adminpanel/resturants', 'adminController@index'); 
    Route::resource('/adminpanel/users', 'usersController'); 
    Route::post('adminpanel/user/changepassword/', 'usersController@updatepassword');
    Route::get('/adminpanel/users/{id}/delete', 'usersController@destroy'); 
    Route::get('/adminpanel/users/{id}/edit',['as'=>'user.edit','uses'=>'usersController@edit']);
    Route::patch('/adminpanel/users/{id}',['as'=>'user.update','uses'=>'usersController@update']);
    // resturant
    Route::get('/adminpanel/resturants','restController@index');
    Route::get('/adminpanel/resturants/create',['as'=>'rest.create','uses'=>'restController@create']);
    Route::post('/adminpanel/resturants','restController@store');
    Route::get('/adminpanel/resturants/{id}/edit','restController@edit');
    Route::patch('/adminpanel/resturants/{id}','restController@update');
    Route::get('/adminpanel/resturants/{id}/delete', 'restController@destroy');
    //category
    Route::get('/adminpanel/categories', 'categoryController@index'); 
    Route::get('/adminpanel/categories/create',['as'=>'category.create','uses'=>'categoryController@create']);
    Route::post('/adminpanel/categories','categoryController@store');
    Route::get('/adminpanel/categories/{id}/edit','categoryController@edit');
    Route::patch('/adminpanel/categories/{id}','categoryController@update');
    Route::get('/adminpanel/categories/{id}/delete', 'categoryController@destroy');
     //rest-cate
     Route::get('/adminpanel/resturantcategory', 'restcateController@index'); 
     Route::get('/adminpanel/resturantcategory/create',['as'=>'resturantcategory.create','uses'=>'restcateController@create']);
     Route::post('/adminpanel/resturantcategory','restcateController@store');
     Route::get('/adminpanel/resturantcategory/{id}/restcate/{id2}/delete', 'restcateController@destroy');
    //meal
    Route::get('/adminpanel/meals', 'mealController@index'); 
    Route::get('/adminpanel/meals/create',['as'=>'meal.create','uses'=>'mealController@create']);
    Route::post('/adminpanel/meals','mealController@store');
    Route::get('/adminpanel/meals/{id}/edit','mealController@edit');
    Route::patch('/adminpanel/meals/{id}','mealController@update');
    Route::get('/adminpanel/meals/{id}/delete', 'mealController@destroy');
    //orders
    Route::get('/adminpanel/orders', 'orderController@index'); 
});

Route::group(['middleware'=>['Manager']],function()
{
    Route::get('/adminpanel2/resturants', 'managerController@index'); 
    //rest
    Route::get('/adminpanel2/resturants','managerrestController@index');
    Route::get('/adminpanel2/resturants/{id}/edit','managerrestController@edit');
    Route::patch('/adminpanel2/resturants/{id}','managerrestController@update');
    Route::get('/adminpanel2/resturants/{id}/delete', 'managerrestController@destroy');
    
    //category
     Route::get('/adminpanel2/categories', 'managercateController@index'); 
     Route::get('/adminpanel2/categories/create',['as'=>'category.create','uses'=>'managercateController@create']);
     Route::post('/adminpanel2/categories','managercateController@store');
     Route::get('/adminpanel2/categories/{id}/edit','managercateController@edit');
     Route::patch('/adminpanel2/categories/{id}','managercateController@update');
     Route::get('/adminpanel2/categories/{id}/delete', 'managercateController@destroy');
      //rest-cate
      Route::get('/adminpanel2/resturantcategory', 'managerrestcateController@index');  
      Route::get('/adminpanel2/resturantcategory/create',['as'=>'managerrestcateController.create','uses'=>'managerrestcateController@create']);
      Route::post('/adminpanel2/resturantcategory','managerrestcateController@store');
      Route::get('/adminpanel2/resturantcategory/{id}/restcate/{id2}/delete', 'managerrestcateController@destroy');
     //meal
      Route::get('/adminpanel2/meals', 'managermealController@index'); 
      Route::get('/adminpanel2/meals/create',['as'=>'meal.create','uses'=>'managermealController@create']);
      Route::post('/adminpanel2/meals','managermealController@store');
      Route::get('/adminpanel2/meals/{id}/edit','managermealController@edit');
      Route::patch('/adminpanel2/meals/{id}','managermealController@update');
      Route::get('/adminpanel2/meals/{id}/delete', 'managermealController@destroy');
        //orders
    Route::get('/adminpanel2/orders', 'managrorderController@index'); 

});




Route::get('/', function () {
    return view('welcome');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/team', function () {
    return view('team');
});

Route::get('/adminpanel/contact',['as'=>'contact.index','uses'=>'ContactUSController@index']);//,'middleware' => ['permission:unit-list|unit-create|unit-edit|unit-delete']]);
Route::delete('/adminpanel/contact/{id}/delete',['as'=>'contact.destroy','uses'=>'ContactUSController@destroy']);//,'middleware' => ['permission:unit-delete']


Route::get('contact-us', 'ContactUSController@contactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);

Auth::routes();

Route::get('/home', 'UResturantcontroller@index');
Route::get('/index', function () {
    return view('index');
});
Route::post('resturants.show', 'UResturantController@show') ;
Route::post('resturants.showStreet', 'UResturantController@showStreet') ;
Route::get('index', 'UResturantcontroller@index');
 
Route::get('categories.show/{id}', 'UCategoriesController@show') ;
Route::get('/meals/show/{id}','UMealController@show') ;

Route::post('meals/show/{id}','UMealController@store') ;
Route::patch('/meals/show/{id}','UMealController@update')->name('meals.show');
Route::get('/meals/show/{id}/{id2}', 'UMealController@destroy');


Route::group(['middleware'=>['web','check']],function()
{
    Route::get('/checkout', 'checkoutController@index');
    Route::post('/checkout', 'checkoutController@store')->name('checkout.store');
    
    Route::get('/thanks', 'confirmationController@index')->name('confirmation.index');
    Route::get('logout', 'LoginController@logout');

});