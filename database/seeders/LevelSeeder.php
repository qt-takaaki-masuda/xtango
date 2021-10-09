<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('levels')->insert([
            // [
            //     'tango_id' => 1,
            //     'title' => 'LEVEL1',
            //     'sort' => 1,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'tango_id' => 1,
            //     'title' => 'LEVEL2',
            //     'sort' => 2,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'tango_id' => 1,
            //     'title' => 'LEVEL3',
            //     'sort' => 3,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'tango_id' => 1,
            //     'title' => 'LEVEL4',
            //     'sort' => 4,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'tango_id' => 1,
            //     'title' => 'LEVEL5',
            //     'sort' => 5,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'tango_id' => 2,
            //     'title' => 'LEVEL1',
            //     'sort' => 1,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'tango_id' => 2,
            //     'title' => 'LEVEL2',
            //     'sort' => 2,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'tango_id' => 2,
            //     'title' => 'LEVEL3',
            //     'sort' => 3,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'tango_id' => 2,
            //     'title' => 'LEVEL4',
            //     'sort' => 4,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'tango_id' => 2,
            //     'title' => 'LEVEL5',
            //     'sort' => 5,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ]
            // [
            //     'tango_id' => 4,
            //     'title' => 'STAGE1',
            //     'sort' => 1,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'tango_id' => 4,
            //     'title' => 'STAGE2',
            //     'sort' => 2,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'tango_id' => 4,
            //     'title' => 'STAGE3',
            //     'sort' => 3,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'tango_id' => 4,
            //     'title' => 'STAGE4',
            //     'sort' => 4,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // // その他
            // [
            //     'tango_id' => 4,
            //     'title' => 'STAGE5',
            //     'sort' => 5,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'tango_id' => 4,
            //     'title' => '〜をする',
            //     'sort' => 1,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            [
                'tango_id' => 5,
                'title' => 'STAGE1',
                'sort' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'tango_id' => 5,
                'title' => 'STAGE2',
                'sort' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'tango_id' => 5,
                'title' => 'STAGE3',
                'sort' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'tango_id' => 5,
                'title' => 'STAGE4',
                'sort' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'tango_id' => 5,
                'title' => 'STAGE5',
                'sort' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
