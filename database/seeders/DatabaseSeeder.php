<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Aldi Tegar Prakoso',
            'email' => 'alditegarprakoso@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Ahmad Maulana N',
            'email' => 'ahmadmn@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Artikel Pertama',
            'slug' => 'artikel-pertama',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi, nesciunt ipsam esse enim eligendi id.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, molestiae modi vitae, eaque delectus doloribus porro repudiandae provident assumenda optio iure. Aut harum vero quod non officia expedita beatae enim.</p><p> sapiente, cumque assumenda neque aperiam obcaecati quam dicta eveniet exercitationem, repellendus illum beatae praesentium perspiciatis vel quidem non consectetur qui vitae cum quae nemo accusamus architecto. Praesentium asperiores maxime ratione explicabo assumenda inventore nobis exercitationem sequi? Aut cumque repellendus illum veritatis quaerat rem officiis delectus ullam unde doloribus nisi, repudiandae distinctio tenetur nihil eius beatae cupiditate? Aperiam soluta totam beatae sunt, perspiciatis laborum nihil voluptatum repellat unde id repudiandae!</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Artikel Kedua',
            'slug' => 'artikel-kedua',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi, nesciunt ipsam esse enim eligendi id.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, molestiae modi vitae, eaque delectus doloribus porro repudiandae provident assumenda optio iure. Aut harum vero quod non officia expedita beatae enim.</p><p> sapiente, cumque assumenda neque aperiam obcaecati quam dicta eveniet exercitationem, repellendus illum beatae praesentium perspiciatis vel quidem non consectetur qui vitae cum quae nemo accusamus architecto. Praesentium asperiores maxime ratione explicabo assumenda inventore nobis exercitationem sequi? Aut cumque repellendus illum veritatis quaerat rem officiis delectus ullam unde doloribus nisi, repudiandae distinctio tenetur nihil eius beatae cupiditate? Aperiam soluta totam beatae sunt, perspiciatis laborum nihil voluptatum repellat unde id repudiandae!</p>',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Artikel Ketiga',
            'slug' => 'artikel-ketiga',
            'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi, nesciunt ipsam esse enim eligendi id.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, molestiae modi vitae, eaque delectus doloribus porro repudiandae provident assumenda optio iure. Aut harum vero quod non officia expedita beatae enim.</p><p> sapiente, cumque assumenda neque aperiam obcaecati quam dicta eveniet exercitationem, repellendus illum beatae praesentium perspiciatis vel quidem non consectetur qui vitae cum quae nemo accusamus architecto. Praesentium asperiores maxime ratione explicabo assumenda inventore nobis exercitationem sequi? Aut cumque repellendus illum veritatis quaerat rem officiis delectus ullam unde doloribus nisi, repudiandae distinctio tenetur nihil eius beatae cupiditate? Aperiam soluta totam beatae sunt, perspiciatis laborum nihil voluptatum repellat unde id repudiandae!</p>',
            'category_id' => 1,
            'user_id' => 2
        ]);
    }
}
