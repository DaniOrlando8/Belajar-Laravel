<?php

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Dani Orlando",
        "email" => "daniorlando8@gmail.com",
        "image" => "Dani.jpg"
    ]);
});

$blog_posts =[
    [
        "title" => "Judul Post Pertama",
        "author" => "Dani Olando",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam ab sequi non laboriosam, rerum temporibus excepturi qui a officiis recusandae rem cum voluptas numquam minima esse aut totam ad ratione ipsum reprehenderit, quam quia placeat inventore eos! Minus nulla ipsum sit, laboriosam dolores, labore accusamus et eaque, aliquid quam suscipit!"

    ],
    [
        "title" => "Judul Post Kedua",
        "author" => "Ucup",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure voluptatum commodi minus tempora a dolorem maiores iusto maxime quod nemo molestias tempore labore magni, pariatur nam velit ducimus consectetur officia doloribus dicta dignissimos aut? Minima laborum a minus laboriosam facere ut aperiam quae omnis debitis repellat. Neque sequi eos beatae vero quidem ab, ea earum consectetur asperiores impedit? Quae ipsam minima repellendus dolore mollitia cumque sapiente tenetur, sequi animi odio velit at quos, maxime qui commodi nesciunt, deserunt praesentium nulla? Doloribus inventore suscipit totam expedita quis error corrupti, nulla sequi id reprehenderit, cumque accusamus? Iste veniam quidem laboriosam sunt laborum!"

    ],
];

Route::get('/blog', function () {
    $blog_posts =[
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Dani Olando",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam ab sequi non laboriosam, rerum temporibus excepturi qui a officiis recusandae rem cum voluptas numquam minima esse aut totam ad ratione ipsum reprehenderit, quam quia placeat inventore eos! Minus nulla ipsum sit, laboriosam dolores, labore accusamus et eaque, aliquid quam suscipit!"
    
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ucup",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure voluptatum commodi minus tempora a dolorem maiores iusto maxime quod nemo molestias tempore labore magni, pariatur nam velit ducimus consectetur officia doloribus dicta dignissimos aut? Minima laborum a minus laboriosam facere ut aperiam quae omnis debitis repellat. Neque sequi eos beatae vero quidem ab, ea earum consectetur asperiores impedit? Quae ipsam minima repellendus dolore mollitia cumque sapiente tenetur, sequi animi odio velit at quos, maxime qui commodi nesciunt, deserunt praesentium nulla? Doloribus inventore suscipit totam expedita quis error corrupti, nulla sequi id reprehenderit, cumque accusamus? Iste veniam quidem laboriosam sunt laborum!"
    
        ],
    ];
    return view('posts', [  
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// Halaman single post
Route :: get('posts/{slug}', function($slug){
    $blog_posts =[
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Dani Olando",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam ab sequi non laboriosam, rerum temporibus excepturi qui a officiis recusandae rem cum voluptas numquam minima esse aut totam ad ratione ipsum reprehenderit, quam quia placeat inventore eos! Minus nulla ipsum sit, laboriosam dolores, labore accusamus et eaque, aliquid quam suscipit!"
    
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ucup",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure voluptatum commodi minus tempora a dolorem maiores iusto maxime quod nemo molestias tempore labore magni, pariatur nam velit ducimus consectetur officia doloribus dicta dignissimos aut? Minima laborum a minus laboriosam facere ut aperiam quae omnis debitis repellat. Neque sequi eos beatae vero quidem ab, ea earum consectetur asperiores impedit? Quae ipsam minima repellendus dolore mollitia cumque sapiente tenetur, sequi animi odio velit at quos, maxime qui commodi nesciunt, deserunt praesentium nulla? Doloribus inventore suscipit totam expedita quis error corrupti, nulla sequi id reprehenderit, cumque accusamus? Iste veniam quidem laboriosam sunt laborum!"
    
        ],
    ];
    $new_post = [];
    foreach ($blog_posts  as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    }

    return view ('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});