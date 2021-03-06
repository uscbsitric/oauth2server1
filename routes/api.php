<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/user/{user}',
		   function(App\User $user)
		   {
	         $id = $user->id;
	         $name = $user->name;
	         $email = $user->email;

	         return response()->json(['id' => $id,
	         		                  'name' => $name,
	         		                  'email' => $email
	                                 ]);


		   	 //return response()->json(['id' => 'ID here',
			 //			   			  'name' => 'Name HERE',
			 //			   			  'email' => 'email here'
			 //			   			 ]);

           }
           )//->middleware('auth:api','scopes:check-status,place-orders'); // both these notations for middleware works
           ->middleware(['auth:api','scopes:check-status,place-orders']);  // both these notations for middleware works
