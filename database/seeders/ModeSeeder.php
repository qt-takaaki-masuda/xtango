<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modes')->insert([
            // [
            //     'tango_id' => 1,
            //     'mode' => 1,
            //     'title' => '英単語→意味',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'tango_id' => 1,
            //     'mode' => 2,
            //     'title' => '意味→英単語',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'tango_id' => 2,
            //     'mode' => 1,
            //     'title' => '英文→意味',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'tango_id' => 2,
            //     'mode' => 2,
            //     'title' => '意味→英文',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'tango_id' => 3,
            //     'mode' => 1,
            //     'title' => '連語→意味',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'tango_id' => 3,
            //     'mode' => 2,
            //     'title' => '意味→連語',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            [
                'tango_id' => 4,
                'mode' => 1,
                'title' => '英語→意味',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'tango_id' => 4,
                'mode' => 2,
                'title' => '意味→英語',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
