<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StaticBlocksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //delete users table records
        DB::table('blocks')->delete();
        //insert some dummy records
        DB::table('blocks')->insert([
            [
                'title' => 'Footer-Left',
                'content' => 'Footer left content',
                'type' => 'footer',
                'status' => 1,
                'default' => 1,
                'identifier' => 'footer-left',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Footer-Right',
                'content' => 'Footer right content',
                'type' => 'footer',
                'status' => 1,
                'default' => 1,
                'identifier' => 'footer-right',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Footer-Center',
                'content' => 'Footer center content',
                'type' => 'footer',
                'status' => 1,
                'default' => 1,
                'identifier' => 'footer-center',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Header-Main',
                'content' => 'Header main content',
                'type' => 'header',
                'status' => 1,
                'default' => 1,
                'identifier' => 'header-main',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Top-Header',
                'content' => 'Top header left content',
                'type' => 'header',
                'status' => 1,
                'default' => 1,
                'identifier' => 'top-header-left-content',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Top-Header',
                'content' => 'Top header right content',
                'type' => 'header',
                'status' => 1,
                'default' => 1,
                'identifier' => 'top-header-right-content',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Top-Header',
                'content' => 'Top header center content',
                'type' => 'header',
                'status' => 1,
                'default' => 1,
                'identifier' => 'top-header-center-content',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Burger-Menu-Top',
                'content' => 'Burger menu top content',
                'type' => 'burger-menu',
                'status' => 1,
                'default' => 1,
                'identifier' => 'burger-menu-top',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Burger-Menu-Bottom',
                'content' => 'Burger menu bottom content',
                'type' => 'burger-menu',
                'status' => 1,
                'default' => 1,
                'identifier' => 'burger-menu-bottom',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Sidebar',
                'content' => 'Sidebar content',
                'type' => 'sidebar',
                'status' => 1,
                'default' => 1,
                'identifier' => 'sidebar',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}