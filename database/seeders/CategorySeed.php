<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'Bebidas',
                'bebidas',
            ],
            [
                'Porções',
                'porcoes',
            ],
            [
                'Lanches',
                'lanches',
            ]
        ];

        foreach ($categories as $key => $values) {
            $category = [
                'id' => $key+1,
                'description' => $values[0],
                'slug' => $values[1],
            ];
            Category::query()->updateOrInsert($category);
        }
    }
}
