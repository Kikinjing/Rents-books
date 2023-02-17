<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Category::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'comic', 'novel', 'fiction', 
            'history', 'drama','action',
            'romance', 'sport', 'horror',
            'slice of life','comedy', 'thiller'
        ];

        foreach($data as $value)
        {
            Category::insert([
                'name' => $value
            ]);
                
        }
    }
}
