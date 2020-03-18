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
Auth::routes([
    'register' => false
]);
Route::get('/', 'IndexController@index')->name('index');
Route::get('/admin', 'back\AdminController@index')->name('back.index')->middleware('checkrole');
Route::get('/companies', 'CompanyController@index')->name('companies');
Route::get('/companies/create', 'CompanyController@create')->name('create')->middleware('checkrole');
Route::get('/companies/{company}', 'CompanyController@show')->name('show');
Route::get('/companies/edit/{company}', 'CompanyController@edit')->name('edit')->middleware('checkrole');
Route::get('/companies/destroy/{company}', 'CompanyController@destroy')->name('destroy')->middleware('checkrole');
Route::post('/companies/store', 'CompanyController@store')->name('store')->middleware('checkrole');
Route::put('/companies/update{company}', 'CompanyController@update')->name('update')->middleware('checkrole');

Route::get('/employees', 'EmployeeController@index')->name('employees');
Route::get('/employees/create', 'EmployeeController@create')->name('employeecreate')->middleware('checkrole');
Route::get('/employees/{employee}', 'EmployeeController@show')->name('employeeshow');
Route::get('/employees/edit/{employee}', 'EmployeeController@edit')->name('employeeedit')->middleware('checkrole');
Route::get('/employees/destroy/{employee}', 'EmployeeController@destroy')->name('employeedestroy')->middleware('checkrole');
Route::post('/employees/store', 'EmployeeController@store')->name('employeestore')->middleware('checkrole');
Route::put('/employees/update{employee}', 'EmployeeController@update')->name('employeeupdate')->middleware('checkrole');

Route::get('/about', 'AboutController@index')->name('about');
