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

Route::match(['get', 'post'], '/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/welcome/exit', function(){
	if(isset($_COOKIE['IS_KAMRON?'])){
		unset($_COOKIE['IS_KAMRON?']);
		setcookie('IS_KAMRON?', null, -1, '/');
		return view('welcome');
	}
	else{
		return view('welcome');
	}
});

Route::get('/contacts', 'ContactsOperatorController@show')->name('contacts'); // вывод всех контактов@
Route::get('/contacts/{id}', 'ContactsOperatorController@contactShow'); // вывод характеристик одного контакта
Route::get('/contact/add', 'ContactsOperatorController@create')->name('contactAdd'); // страница добавление контакта@
Route::post('contact/create', 'ContactsOperatorController@createContact');
Route::delete('/contacts/delete/{id}', 'ContactsOperatorController@contactDelete'); // удаление контакта
Route::put('/contact/edit/{id}', 'ContactsOperatorController@contactEdit');// редактирование контакта

Route::get('/products', 'ProductController@show')->name('products'); // вывод всех продуктов
Route::get('/products/{id}', 'ProductController@productShow'); //вывод характеристик одного продукта
Route::put('/product/edit/{id}', 'ProductController@show');//редактирование продукта
Route::get('/product/add', 'ProductController@add')->name('productAdd');
Route::post('/product/add/process', 'ProductController@process')->name('process'); //@

Route::get('/task/add', 'taskController@add')->name('taskAdd');
Route::post('/task/message', 'taskController@messageAdd')->name('taskMessage');
Route::post('/task/seed', 'taskController@messageSeed');
Route::get('/tasks', 'taskController@show')->name('tasks');

Route::get('/mobile/tasks', 'taskController@order');

Route::get('/update/task', 'taskController@updateTask');
Route::get('/update/task/test', 'taskController@updateTest');
Route::get('/tasks/count', 'taskController@tasksCount');

Route::post('/auth', 'authController@auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
?>



