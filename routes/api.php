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


/*
  Next we need to run the migration to create the required database tables for using the OAuth service.
  run  php artisan migrate

  The migration files are registered in the boot method of the PassportServiceProvider using the registerMigrations method. After the migrations are run, the following tables are created.

  oauth_auth_code               - Used to store the Authorization Codes.
  oauth_access_tokens           - Stores all the issued Access Tokens.
  oauth_refresh_tokens          - Stores all the Refresh Tokens for the Issued Access Tokens
  oauth_clients                 - Stores Clients.
  oauth_personal_access_clients - Stores the Personal Access Clients for users to primary use for their own use, like testing.
  =====================================================================================================

  run php artisan passport:install
*/
