<?php

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
// Route::post('/token', function(){

//     $http = new GuzzleHttp\Client;

//     $response = $http->post('http://127.0.0.1:8000/oauth/token', [
//     'form_params' => [
//             'grant_type' => 'password',
//             'client_id '=> 2,
//             'client_secret' => 'HxyujM7UVMPjVhu3y0MfJMgUllf2i8Hn2zixuW2Y',
//             'username' => 'john@reg.net',
//             'password' => '123',
//             'scope' => 'scope',
//     ],
// ]);

// return json_decode((string) $response->getBody(), true);



    // $data = [
    // 'grant_type' => 'password',
    // 'client_id '=> 1,
    // 'client_secret' => 'HxyujM7UVMPjVhu3y0MfJMgUllf2i8Hn2zixuW2Y',
    // 'username' => 'john@reg.net',
    // 'password' => '123',
    // 'scope' => 'scope',
    // ];

//     return response()->json($response,200);
// });
