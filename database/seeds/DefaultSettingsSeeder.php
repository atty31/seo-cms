<?php
use Illuminate\Database\Seeder;

/**
 * Class DefaultSettings
 * @author Attila Naghi <naghi.attila@mail.com>
 */
class DefaultSettingsSeeder extends Seeder {

    /**
     * Default website settings
     * @return void
     */
    public function run()
    {
        //delete users table records
        DB::table('settings')->delete();
        //insert some dummy records
        DB::table('settings')->insert([
            [
                'name' => 'footer',
                'value'=> serialize([
                    'active' => 1,
                    'type'   => '3',    // 3columns
                    'after-footer'  => 1,
                    'bottom-footer' => 1,
                ]),
            ],
            [
                'name' => 'burger-menu',
                'value'=> serialize([
                    'active' => 1
                ]),
            ],
            [
                'name' => 'left-menu',
                'value'=> serialize([
                    'active' => 1
                ]),
            ],
            [
                'name' => 'homepage',
                'value'=> serialize([
                    'title' => 'Home Title',
                    'meta_tags'   => '<meta charset="utf-8">'
                ]),
            ],
        ]);
    }
}