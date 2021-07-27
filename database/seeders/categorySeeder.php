<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $categories=['Yazılım','Müzik','Spor'];
          foreach($categories as $category)
          {
          DB::table('categories')->insert([
          'name'=>$category,
          'slug'=>str_slug($category),
          'created_at'=>now(),
          'updated_at'=>now()
          ]);
          }
    }
}
