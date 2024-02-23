<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        // \App\Models\User::factory()->create([
            //     'name' => 'Test User',
            //     'email' => 'test@example.com',
            // ]);
            
        User::create([
            'name' => 'angel',
            'username' => 'vulp',
            'email' => 'angel@gmail.com',
            'password' => bcrypt('password')
        ]);
        
        // User::create([
            //     'name' => 'Doddy',
            //     'email' => 'doddy@gmail.com',
            //     'password' => bcrypt('321')
            // ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam incidunt eaque voluptas! Perferendis ipsam eaque consequatur vero dolorem facere pariatur veritatis rerum in aperiam odit voluptas molestias nulla doloremque alias delectus totam',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam incidunt eaque voluptas! Perferendis ipsam eaque consequatur vero dolorem facere pariatur veritatis rerum in aperiam odit voluptas molestias nulla doloremque alias delectus totam, beatae architecto mollitia laborum impedit tempora expedita quaerat.</p><p>Quasi sit necessitatibus perferendis adipisci aliquid velit amet qui, nihil accusantium! Amet, eligendi vitae natus, impedit voluptatibus neque nisi enim commodi fugit earum molestias accusamus! Cupiditate illo repellendus itaque officia necessitatibus deserunt dolores sunt voluptates aut eaque nemo alias soluta aspernatur sint expedita perspiciatis suscipit provident maxime, blanditiis ullam! Quis reprehenderit deleniti cumque! Nostrum quasi impedit dolor fuga adipisci soluta corporis nisi dignissimos iusto ad a, laborum et iure asperiores eaque doloribus commodi veritatis labore sapiente aperiam!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam incidunt eaque voluptas! Perferendis ipsam eaque consequatur vero dolorem facere pariatur veritatis rerum in aperiam odit voluptas molestias nulla doloremque alias delectus totam',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam incidunt eaque voluptas! Perferendis ipsam eaque consequatur vero dolorem facere pariatur veritatis rerum in aperiam odit voluptas molestias nulla doloremque alias delectus totam, beatae architecto mollitia laborum impedit tempora expedita quaerat.</p><p>Quasi sit necessitatibus perferendis adipisci aliquid velit amet qui, nihil accusantium! Amet, eligendi vitae natus, impedit voluptatibus neque nisi enim commodi fugit earum molestias accusamus! Cupiditate illo repellendus itaque officia necessitatibus deserunt dolores sunt voluptates aut eaque nemo alias soluta aspernatur sint expedita perspiciatis suscipit provident maxime, blanditiis ullam! Quis reprehenderit deleniti cumque! Nostrum quasi impedit dolor fuga adipisci soluta corporis nisi dignissimos iusto ad a, laborum et iure asperiores eaque doloribus commodi veritatis labore sapiente aperiam!</p><p>Alias in itaque libero ipsam minus aliquam nulla excepturi ea omnis eum necessitatibus blanditiis, ipsum beatae aliquid debitis nostrum ipsa earum voluptas reiciendis eos numquam dolorum amet placeat. Atque pariatur non ipsam doloribus culpa? Perspiciatis, quibusdam. Amet commodi laboriosam quidem, aliquid fugit laudantium perspiciatis eum ipsum deleniti blanditiis magni voluptatem odio tempora vitae optio quas eius aspernatur debitis. Maxime ipsam, velit dolor earum officiis harum odit temporibus nihil corrupti officia quis provident placeat amet quo numquam fugit magni magnam illum optio sit dolore?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam incidunt eaque voluptas! Perferendis ipsam eaque consequatur vero dolorem facere pariatur veritatis rerum in aperiam odit voluptas molestias nulla doloremque alias delectus totam',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam incidunt eaque voluptas! Perferendis ipsam eaque consequatur vero dolorem facere pariatur veritatis rerum in aperiam odit voluptas molestias nulla doloremque alias delectus totam, beatae architecto mollitia laborum impedit tempora expedita quaerat.</p><p>Quasi sit necessitatibus perferendis adipisci aliquid velit amet qui, nihil accusantium! Amet, eligendi vitae natus, impedit voluptatibus neque nisi enim commodi fugit earum molestias accusamus! Cupiditate illo repellendus itaque officia necessitatibus deserunt dolores sunt voluptates aut eaque nemo alias soluta aspernatur sint expedita perspiciatis suscipit provident maxime, blanditiis ullam! Quis reprehenderit deleniti cumque! Nostrum quasi impedit dolor fuga adipisci soluta corporis nisi dignissimos iusto ad a, laborum et iure asperiores eaque doloribus commodi veritatis labore sapiente aperiam!</p><p>Alias in itaque libero ipsam minus aliquam nulla excepturi ea omnis eum necessitatibus blanditiis, ipsum beatae aliquid debitis nostrum ipsa earum voluptas reiciendis eos numquam dolorum amet placeat. Atque pariatur non ipsam doloribus culpa? Perspiciatis, quibusdam. Amet commodi laboriosam quidem, aliquid fugit laudantium perspiciatis eum ipsum deleniti blanditiis magni voluptatem odio tempora vitae optio quas eius aspernatur debitis. Maxime ipsam, velit dolor earum officiis harum odit temporibus nihil corrupti officia quis provident placeat amet quo numquam fugit magni magnam illum optio sit dolore?</p>',
        //     'category_id' => 2,
        //     'user_id' => 2,
        // ]);

    }
}
