<?php

use Illuminate\Http\Request;

Route::get('/clientCredentials/{userID}',
		function(Request $request )
		   {
	         $id = $request->clientCredentials;
		   	 $user = App\User::find(1)->first();
			 //$id = $user->id;
			 //$name = $user->name;
			 //$email = $user->email;
			 
		   	 /*****
			 return response()->json(['id' => $id,
									  'name' => $name,
									  'email' => $email
									 ]);
			 *****/
		   	 return response()->json(['id' => $user->id,
						   	 		  'email' => $user->email,
						   	 		  'name' => $user->name,
		   	                         ]);
           }
           )->middleware(['client_credentials:check-status,place-orders']); //:check-status,place-orders
