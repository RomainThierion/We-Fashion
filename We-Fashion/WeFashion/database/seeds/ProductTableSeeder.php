<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Category::create([
            'category_name' => 'homme'
        ]);
        App\Category::create([
            'category_name' => 'femme'
        ]);

        factory(App\Product::class, 80)->create()->each(function ($product) {
            $category = App\Category::find(rand(1, 2));
            $files = File::allFiles(public_path('images/' . $category->category_name . 's'));
            $randomFile = $files[rand(0, count($files) - 1)];
            $randomFile = explode('images/', $randomFile)[1];
            $product->image_url=$randomFile;
            $product->category()->associate($category);
            $product->save();
        });
    }
}
