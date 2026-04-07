<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Ideas;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

Route::view('/', 'welcome', [
    'greeting' => 'Hello, World!',
    'name' => 'John Doe',
    'age' => 30,
    'tasks' => [
        'Learn Laravel',
        'Build a project',
        'Deploy to production',
    ],
]);

Route::view('/about', 'about');
Route::view('/contact', 'contact');

Route::get('/formtest', function(){
    $posts = Post::all();

    return view('formtest',[
        'posts' => $posts,
    ]);
});

Route::post('/formtest', function(){
    Post::create([
        'description' => request('description'),
    ]);

    return redirect('/formtest');
});

Route::delete('/formtest/{id}', function ($id) {
    Post::findOrFail($id)->delete();

    return redirect('/formtest');
});

Route::get('/delete', function(){
    Post::truncate();  

    return redirect('/formtest');
});


//index
Route::get('/posts', function(){
    $posts = Post::all();

    return view('posts.index', [
        'posts' => $posts,
    ]);
});

//show
Route::get('/posts/{post}', function (Post $post) {
    return view('posts.show', [
        'post' => $post,
    ]);
});

//edit
Route::get('/posts/{post}/edit', function (Post $post) {
    return view('posts.edit', [
        'post' => $post,
    ]);
}
);

//update
Route::patch('/posts/{post}', function (Post $post) {
    $post->update([
        'description' => request('description'),
        'updated_at' => now(),
    ]);

    return redirect('/posts' . '/' . $post->id);
}
);

// SHOW FORM
Route::get('/register', function () {
    return view('user_registration.user_registration');
});

Route::post('/users', function (Illuminate\Http\Request $request) {
    App\Models\User::create($request->all());
    return redirect('/users');
});

Route::get('/users', function () {
    $users = App\Models\User::all();
    return view('user_registration.users_list', compact('users'));
});

Route::delete('/delete/{id}', function ($id) {
    App\Models\User::findOrFail($id)->delete();
    return redirect('/users');
});

Route::get('/edit/{id}', function ($id) {
    $user = App\Models\User::findOrFail($id);
    return view('user_registration.edit_user', compact('user'));
});

Route::put('/update/{id}', function (Illuminate\Http\Request $request, $id) {
    $user = App\Models\User::findOrFail($id);

    $user->update($request->all());

    return redirect('/users');
});
Route::post('/users', function (Request $request) {

    // Validate the request
    $validated = $request->validate([
        'first_name' => 'required|string|max:255',
        'middle_name' => 'nullable|string|max:255',
        'last_name' => 'required|string|max:255',
        'nickname' => 'nullable|string|max:255',
        'email' => 'required|email|unique:users,email', // <-- checks for duplicates
        'age' => 'required|integer',
        'address' => 'required|string|max:500',
        'contact_number' => 'required|string|max:20',
    ], [
        'email.unique' => 'The email you entered is already registered.', // Custom message
    ]);

    // Create the user if validation passes
    User::create($validated);

    return redirect('/users')->with('success', 'User registered successfully!');
});