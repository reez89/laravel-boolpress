<?php
use App\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++){
            $newPost = new Post();
            $newPost->id = $faker->randomDigit(2);
            $newPost->title = $faker->word(10);
            $newPost->body = $faker->text(50);
            $newPost->save();    
        }
    }
}
