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
        "name" => "Linggih Kusumah Dilagga",
        "email" => "Galihk250@gmai.com",
        "image" => "profile.jpeg"
    ]);
});

Route::get('/blog', function () {

    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Linggih Kusumah Dilagga",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste perspiciatis sint harum hic, nisi, nemo, necessitatibus dolores illo assumenda eligendi placeat eius cumque? Optio, nam quo. Minima dolorem asperiores repellat iure cum impedit, repellendus quasi aspernatur repudiandae iste soluta consequuntur, eligendi ipsam. Quae maxime rem id, reprehenderit ullam nihil aliquid quisquam, accusamus corrupti eveniet nemo temporibus pariatur sapiente minus molestiae velit est eos optio laudantium consequuntur? Error, id iure. Numquam non fugit doloribus rem illum et harum commodi corrupti nemo."
        ],
    
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Wulan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis unde et id cumque amet nesciunt, distinctio vero odit dicta omnis totam deserunt beatae aut quasi nostrum! Esse blanditiis quam sed quod minima inventore eius incidunt fuga fugiat dolorem, omnis dignissimos explicabo quisquam nostrum porro dolor, quibusdam iure aut. Alias doloribus, maxime iste necessitatibus dolore, ut repudiandae nihil quae aliquam cum velit, tempore quas. Itaque quasi molestiae exercitationem cumque consectetur, impedit vel qui eius unde provident quidem facilis nam illum libero nobis voluptatibus ipsa animi ratione obcaecati. Ullam beatae mollitia asperiores minima animi nobis nesciunt repudiandae aliquam. Commodi perferendis iure iste."
        ],
    
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman single post
Route::get('posts/{slug}', function($slug) {

    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Linggih Kusumah Dilagga",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste perspiciatis sint harum hic, nisi, nemo, necessitatibus dolores illo assumenda eligendi placeat eius cumque? Optio, nam quo. Minima dolorem asperiores repellat iure cum impedit, repellendus quasi aspernatur repudiandae iste soluta consequuntur, eligendi ipsam. Quae maxime rem id, reprehenderit ullam nihil aliquid quisquam, accusamus corrupti eveniet nemo temporibus pariatur sapiente minus molestiae velit est eos optio laudantium consequuntur? Error, id iure. Numquam non fugit doloribus rem illum et harum commodi corrupti nemo."
        ],
    
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Wulan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis unde et id cumque amet nesciunt, distinctio vero odit dicta omnis totam deserunt beatae aut quasi nostrum! Esse blanditiis quam sed quod minima inventore eius incidunt fuga fugiat dolorem, omnis dignissimos explicabo quisquam nostrum porro dolor, quibusdam iure aut. Alias doloribus, maxime iste necessitatibus dolore, ut repudiandae nihil quae aliquam cum velit, tempore quas. Itaque quasi molestiae exercitationem cumque consectetur, impedit vel qui eius unde provident quidem facilis nam illum libero nobis voluptatibus ipsa animi ratione obcaecati. Ullam beatae mollitia asperiores minima animi nobis nesciunt repudiandae aliquam. Commodi perferendis iure iste."
        ],
    
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});