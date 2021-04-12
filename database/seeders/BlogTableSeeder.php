<?php

namespace Database\Seeders;

use App\Models\Blog;
use Carbon\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blogs = factory(Blogs::class, 10)->create();
    }
}
