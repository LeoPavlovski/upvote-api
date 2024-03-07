<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $imageUrl = "https://picsum.photos/800/400?random=" . rand();

        DB::table('posts')->insert([
           [
               'title'=>'test title',
               'description'=>'test description',
               'author'=>'test author',
               'image'=>$imageUrl,
               'upvote'=>1,
           ],
           [
           'title'=>'test title2',
            'description'=>'test description2',
            'author'=>'test author2',
            'image'=>$imageUrl,
            'upvote'=>10,
        ],
           [
           'title'=>'test title3',
            'description'=>'test description3',
            'author'=>'test author3',
            'image'=>$imageUrl,
            'upvote'=>13,
         ],
            [
                'title'=>'test title4',
                'description'=>'test description4',
                'author'=>'test author4',
                'image'=>$imageUrl,
                'upvote'=>16,
            ],
            [
                'title'=>'test title5',
                'description'=>'test description5',
                'author'=>'test author5',
                'image'=>$imageUrl,
                'upvote'=>20,
            ],
        ]);
    }
}
