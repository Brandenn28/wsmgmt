<?php

use Auth0\Laravel\Facade\Auth0;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
  return redirect()->route('login'); // Assuming your login route is named 'login'
});




Route::get('/callback/welcome', function () {
  return view('welcome'); // Replace with your welcome view or logic
})->middleware('auth'); 



Route::get('/newlogout', function () {
  return view('welcome'); // Replace with your welcome view or logic
}); 


// Route::get('/getuser', function () {
//   if (! auth()->check()) {
//     return response('You are not logged in.');
//   }

//   $user = auth()->user();
//   $name = $user->name ?? 'User';
//   $email = $user->email ?? '';

//   return response("Hello {$name}! Your email address is {$email}.");
// });


//
// Route::get('/', function () {

//   // $authCheck = Auth0::check();
// $user = auth();

//   if (auth()->user()) {
//     return response('You are not logged in.');
//   }

//   $user = auth()->user();
//   $name = $user->name ?? 'User';
//   $email = $user->email ?? '';

//   return response("Hello {$name}! Your email address is {$email}.");
// });;