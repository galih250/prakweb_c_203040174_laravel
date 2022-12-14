<?php
namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Linggih Kusumah Dilagga',
        //     'email' => 'Galihk250@gmail.com',
        //     'password'=> bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Wulan',
        //     'email' => 'Wulan123@gmail.com',
        //     'password'=> bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit obcaecati minus totam officiis sed enim animi, consequatur eum architecto facilis consectetur ea sequi ratione reprehenderit',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos temporibus cupiditate nam, error repellendus provident, debitis quas dolorum minima reiciendis animi aperiam eveniet voluptatibus vero amet distinctio minus assumenda? Ab libero voluptatem deserunt facere cum consequuntur nemo debitis molestias recusandae ipsam, dolorem tempora illum ullam inventore incidunt quidem rerum temporibus a. Sit sunt quis deserunt modi reiciendis, fugit amet? Architecto, nobis quam quisquam minima aliquam aliquid! Quasi sed veritatis accusantium? Similique explicabo numquam et ipsam. Vitae ullam aspernatur quos praesentium? Voluptates, blanditiis voluptas? Ipsam qui quisquam repellendus culpa eaque dicta veritatis omnis perspiciatis laborum numquam quis commodi placeat, natus expedita eum iusto animi harum dolores? Provident necessitatibus aliquam porro fugiat mollitia maxime, accusantium minus itaque beatae obcaecati a doloremque tenetur.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit obcaecati minus totam officiis sed enim animi, consequatur eum architecto facilis consectetur ea sequi ratione reprehenderit',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos temporibus cupiditate nam, error repellendus provident, debitis quas dolorum minima reiciendis animi aperiam eveniet voluptatibus vero amet distinctio minus assumenda? Ab libero voluptatem deserunt facere cum consequuntur nemo debitis molestias recusandae ipsam, dolorem tempora illum ullam inventore incidunt quidem rerum temporibus a. Sit sunt quis deserunt modi reiciendis, fugit amet? Architecto, nobis quam quisquam minima aliquam aliquid! Quasi sed veritatis accusantium? Similique explicabo numquam et ipsam. Vitae ullam aspernatur quos praesentium? Voluptates, blanditiis voluptas? Ipsam qui quisquam repellendus culpa eaque dicta veritatis omnis perspiciatis laborum numquam quis commodi placeat, natus expedita eum iusto animi harum dolores? Provident necessitatibus aliquam porro fugiat mollitia maxime, accusantium minus itaque beatae obcaecati a doloremque tenetur.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit obcaecati minus totam officiis sed enim animi, consequatur eum architecto facilis consectetur ea sequi ratione reprehenderit',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos temporibus cupiditate nam, error repellendus provident, debitis quas dolorum minima reiciendis animi aperiam eveniet voluptatibus vero amet distinctio minus assumenda? Ab libero voluptatem deserunt facere cum consequuntur nemo debitis molestias recusandae ipsam, dolorem tempora illum ullam inventore incidunt quidem rerum temporibus a. Sit sunt quis deserunt modi reiciendis, fugit amet? Architecto, nobis quam quisquam minima aliquam aliquid! Quasi sed veritatis accusantium? Similique explicabo numquam et ipsam. Vitae ullam aspernatur quos praesentium? Voluptates, blanditiis voluptas? Ipsam qui quisquam repellendus culpa eaque dicta veritatis omnis perspiciatis laborum numquam quis commodi placeat, natus expedita eum iusto animi harum dolores? Provident necessitatibus aliquam porro fugiat mollitia maxime, accusantium minus itaque beatae obcaecati a doloremque tenetur.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit obcaecati minus totam officiis sed enim animi, consequatur eum architecto facilis consectetur ea sequi ratione reprehenderit',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos temporibus cupiditate nam, error repellendus provident, debitis quas dolorum minima reiciendis animi aperiam eveniet voluptatibus vero amet distinctio minus assumenda? Ab libero voluptatem deserunt facere cum consequuntur nemo debitis molestias recusandae ipsam, dolorem tempora illum ullam inventore incidunt quidem rerum temporibus a. Sit sunt quis deserunt modi reiciendis, fugit amet? Architecto, nobis quam quisquam minima aliquam aliquid! Quasi sed veritatis accusantium? Similique explicabo numquam et ipsam. Vitae ullam aspernatur quos praesentium? Voluptates, blanditiis voluptas? Ipsam qui quisquam repellendus culpa eaque dicta veritatis omnis perspiciatis laborum numquam quis commodi placeat, natus expedita eum iusto animi harum dolores? Provident necessitatibus aliquam porro fugiat mollitia maxime, accusantium minus itaque beatae obcaecati a doloremque tenetur.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}