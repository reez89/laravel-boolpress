<?php
use App\Category;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 5; $i++){
            $newCategory = new Category();
            $newCategory->title = $faker->word(10);
            $newCategory->body = $faker->text(25);
            $newCategory->save();    
        }
    }
}
