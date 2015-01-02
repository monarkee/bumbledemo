<?php

class PostTableSeeder extends Seeder {

    public function run()
    {
        DB::table('posts')->delete();

        // Reset Auto Increment
        $statement = "ALTER TABLE posts AUTO_INCREMENT = 1;";
        DB::unprepared($statement);

        $faker = \Faker\Factory::create();

        foreach(range(1, 50) as $index)
        {
            $post = new Demo\Post;
            $post->title = $faker->sentence(5);
            $post->slug = Str::slug($faker->sentence(5));
            $post->excerpt = $faker->realText(200, 2);
            $post->content = $faker->realText(500, 2);
            $post->active = 1;
            $post->published_at = $faker->dateTime('now');
            $post->save();
        }
    }

}