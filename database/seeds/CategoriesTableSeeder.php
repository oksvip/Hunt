<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timestamp = \Carbon\Carbon::now();

        $category  = [
            'name'       => 'Laravel',
            'cover'      => 'http://hunt.iokvip.com/fonts/bg.svg?e9b6aabaa428c6fb77804dc8732e8a09',
            'describe'   => '为 Web 艺术家创造的 PHP 框架',
            'created_at' => $timestamp,
            'updated_at' => $timestamp,
        ];

        $categorys = [];
        for ($i = 0; $i < 10; $i ++) {
            $categorys[] = $category;
        }

        DB::table('categories')->insert($categorys);
    }
}
