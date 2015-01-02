<?php

class CategoryTableSeeder extends Seeder {

    public function run()
    {
        DB::table('categories')->delete();

        // Reset Auto Increment
        $statement = "ALTER TABLE categories AUTO_INCREMENT = 1;";
        DB::unprepared($statement);

        $faker = \Faker\Factory::create();

        foreach(range(1, 50) as $index)
        {
            $title = $faker->sentence(1);

            $category = new Demo\Category;
            $category->title = $title;
            $category->slug = Str::slug($title);
            $category->save();
        }
    }

}