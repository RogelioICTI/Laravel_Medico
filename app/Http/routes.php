<?php

/*
  |--------------------------------------------------------------------------
  | Routes File
  |--------------------------------------------------------------------------
  |
  | Here is where you will register all of the routes in an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', 'HomeController@index');

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | This route group applies the "web" middleware group to every route
  | it contains. The "web" middleware group is defined in your HTTP
  | kernel and includes session state, CSRF protection, and more.
  |
 */

Route::group(['middleware' => ['web']], function () {
    //
});


/*
 * Ruta para la petición del servicio OAuth 2.0
 */
Route::post('oauth/access_token', function() {
    return Response::json(Authorizer::issueAccessToken());
});


Route::get('/register',function(){$user = new App\User();
 $user->username="test user";
 $user->email="test@test.com";
 $user->password = \Illuminate\Support\Facades\Hash::make("temporal");
 $user->save();
 
});



/*
 * Rutas para la sección de Task
 */
Route::resource('tasks', 'TaskController');