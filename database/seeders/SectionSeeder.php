<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([
            // LEVEL1
            // [
            //     'level_id' => 1,
            //     'title' => '0001〜0020',
            //     'sort' => 1,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 1,
            //     'title' => '0021〜0040',
            //     'sort' => 2,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 1,
            //     'title' => '0041〜0060',
            //     'sort' => 3,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 1,
            //     'title' => '0061〜0080',
            //     'sort' => 4,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 1,
            //     'title' => '0081〜0100',
            //     'sort' => 5,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 1,
            //     'title' => '0101〜0120',
            //     'sort' => 6,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 1,
            //     'title' => '0121〜0140',
            //     'sort' => 7,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 1,
            //     'title' => '0141〜0160',
            //     'sort' => 8,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 1,
            //     'title' => '0161〜0180',
            //     'sort' => 9,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 1,
            //     'title' => '0181〜0200',
            //     'sort' => 10,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 1,
            //     'title' => '0201〜0220',
            //     'sort' => 11,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 1,
            //     'title' => '0221〜0240',
            //     'sort' => 12,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 1,
            //     'title' => '0241〜0260',
            //     'sort' => 13,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 1,
            //     'title' => '0261〜0280',
            //     'sort' => 14,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 1,
            //     'title' => '0281〜0300',
            //     'sort' => 15,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 1,
            //     'title' => '0301〜0320',
            //     'sort' => 16,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 1,
            //     'title' => '0321〜0340',
            //     'sort' => 17,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 1,
            //     'title' => '0341〜0360',
            //     'sort' => 18,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 1,
            //     'title' => '0361〜0380',
            //     'sort' => 19,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 1,
            //     'title' => '0381〜0400',
            //     'sort' => 20,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],

            // // LEVEL2
            // [
            //     'level_id' => 2,
            //     'title' => '0401〜0420',
            //     'sort' => 1,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 2,
            //     'title' => '0421〜0440',
            //     'sort' => 2,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 2,
            //     'title' => '0441〜0460',
            //     'sort' => 3,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 2,
            //     'title' => '0461〜0480',
            //     'sort' => 4,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 2,
            //     'title' => '0481〜0500',
            //     'sort' => 5,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 2,
            //     'title' => '0501〜0520',
            //     'sort' => 6,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 2,
            //     'title' => '0521〜0540',
            //     'sort' => 7,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 2,
            //     'title' => '0541〜0560',
            //     'sort' => 8,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 2,
            //     'title' => '0561〜0580',
            //     'sort' => 9,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 2,
            //     'title' => '0581〜0600',
            //     'sort' => 10,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 2,
            //     'title' => '0601〜0620',
            //     'sort' => 11,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 2,
            //     'title' => '0621〜0640',
            //     'sort' => 12,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 2,
            //     'title' => '0641〜0660',
            //     'sort' => 13,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 2,
            //     'title' => '0661〜0680',
            //     'sort' => 14,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 2,
            //     'title' => '0681〜0700',
            //     'sort' => 15,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 2,
            //     'title' => '0701〜0720',
            //     'sort' => 16,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 2,
            //     'title' => '0721〜0740',
            //     'sort' => 17,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 2,
            //     'title' => '0741〜0760',
            //     'sort' => 18,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 2,
            //     'title' => '0761〜0780',
            //     'sort' => 19,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 2,
            //     'title' => '0781〜0800',
            //     'sort' => 20,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],

            // // LEVEL3
            // [
            //     'level_id' => 3,
            //     'title' => '0801〜0820',
            //     'sort' => 1,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 3,
            //     'title' => '0821〜0840',
            //     'sort' => 2,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 3,
            //     'title' => '0841〜0860',
            //     'sort' => 3,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 3,
            //     'title' => '0861〜0880',
            //     'sort' => 4,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 3,
            //     'title' => '0881〜0900',
            //     'sort' => 5,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 3,
            //     'title' => '0901〜0920',
            //     'sort' => 6,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 3,
            //     'title' => '0921〜0940',
            //     'sort' => 7,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 3,
            //     'title' => '0941〜0960',
            //     'sort' => 8,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 3,
            //     'title' => '0961〜0980',
            //     'sort' => 9,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 3,
            //     'title' => '0981〜1000',
            //     'sort' => 10,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 3,
            //     'title' => '1001〜1020',
            //     'sort' => 11,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 3,
            //     'title' => '1021〜1040',
            //     'sort' => 12,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 3,
            //     'title' => '1041〜1060',
            //     'sort' => 13,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 3,
            //     'title' => '1061〜1080',
            //     'sort' => 14,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 3,
            //     'title' => '1081〜1100',
            //     'sort' => 15,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],

            // // LEVEL4
            // [
            //     'level_id' => 4,
            //     'title' => '1101〜1120',
            //     'sort' => 16,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 4,
            //     'title' => '1121〜1140',
            //     'sort' => 17,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 4,
            //     'title' => '1141〜1160',
            //     'sort' => 18,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 4,
            //     'title' => '1161〜1180',
            //     'sort' => 19,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 4,
            //     'title' => '1181〜1200',
            //     'sort' => 20,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 4,
            //     'title' => '1201〜1220',
            //     'sort' => 16,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 4,
            //     'title' => '1221〜1240',
            //     'sort' => 17,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 4,
            //     'title' => '1241〜1260',
            //     'sort' => 18,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 4,
            //     'title' => '1261〜1280',
            //     'sort' => 19,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 4,
            //     'title' => '1281〜1300',
            //     'sort' => 20,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 4,
            //     'title' => '1301〜1320',
            //     'sort' => 16,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 4,
            //     'title' => '1321〜1340',
            //     'sort' => 17,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 4,
            //     'title' => '1341〜1360',
            //     'sort' => 18,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 4,
            //     'title' => '1361〜1380',
            //     'sort' => 19,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 4,
            //     'title' => '1381〜1400',
            //     'sort' => 20,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 4,
            //     'title' => '1401〜1420',
            //     'sort' => 16,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 4,
            //     'title' => '1421〜1440',
            //     'sort' => 17,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 4,
            //     'title' => '1441〜1460',
            //     'sort' => 18,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 4,
            //     'title' => '1461〜1480',
            //     'sort' => 19,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 4,
            //     'title' => '1481〜1500',
            //     'sort' => 20,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],

            // // LEVEL5
            // [
            //     'level_id' => 5,
            //     'title' => '1501〜1520',
            //     'sort' => 16,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 5,
            //     'title' => '1521〜1540',
            //     'sort' => 17,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 5,
            //     'title' => '1541〜1560',
            //     'sort' => 18,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 5,
            //     'title' => '1561〜1580',
            //     'sort' => 19,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 5,
            //     'title' => '1581〜1600',
            //     'sort' => 20,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 5,
            //     'title' => '1601〜1620',
            //     'sort' => 16,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 5,
            //     'title' => '1621〜1640',
            //     'sort' => 17,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 5,
            //     'title' => '1641〜1660',
            //     'sort' => 18,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 5,
            //     'title' => '1661〜1680',
            //     'sort' => 19,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 5,
            //     'title' => '1681〜1700',
            //     'sort' => 20,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 5,
            //     'title' => '1701〜1720',
            //     'sort' => 16,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 5,
            //     'title' => '1721〜1740',
            //     'sort' => 17,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 5,
            //     'title' => '1741〜1760',
            //     'sort' => 18,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 5,
            //     'title' => '1761〜1780',
            //     'sort' => 19,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 5,
            //     'title' => '1781〜1800',
            //     'sort' => 20,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],

            // // Vocabulary GRIT 2500 Stage4 連語
            // [
            //     'level_id' => 11,
            //     'title' => 'R1〜R20',
            //     'sort' => 1,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 11,
            //     'title' => 'R21〜R40',
            //     'sort' => 1,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 11,
            //     'title' => 'R41〜R60',
            //     'sort' => 1,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 12,
            //     'title' => 'R61〜R80',
            //     'sort' => 1,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 12,
            //     'title' => 'R81〜R100',
            //     'sort' => 1,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 12,
            //     'title' => 'R101〜R120',
            //     'sort' => 1,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 12,
            //     'title' => 'R121〜R140',
            //     'sort' => 1,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 12,
            //     'title' => 'R141〜R160',
            //     'sort' => 1,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 13,
            //     'title' => 'R161〜R180',
            //     'sort' => 1,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 13,
            //     'title' => 'R181〜R200',
            //     'sort' => 1,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 13,
            //     'title' => 'R201〜R220',
            //     'sort' => 1,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 13,
            //     'title' => 'R221〜R240',
            //     'sort' => 1,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 13,
            //     'title' => 'R241〜R260',
            //     'sort' => 1,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 14,
            //     'title' => 'R261〜R280',
            //     'sort' => 1,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 14,
            //     'title' => 'R281〜R300',
            //     'sort' => 1,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 14,
            //     'title' => 'R301〜R320',
            //     'sort' => 1,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 14,
            //     'title' => 'R321〜R340',
            //     'sort' => 1,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 14,
            //     'title' => 'R341〜R360',
            //     'sort' => 1,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 15,
            //     'title' => 'R361〜R380',
            //     'sort' => 1,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 15,
            //     'title' => 'R381〜R400',
            //     'sort' => 1,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 15,
            //     'title' => 'R401〜R420',
            //     'sort' => 1,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 15,
            //     'title' => 'R421〜R440',
            //     'sort' => 1,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 15,
            //     'title' => 'R441〜R460',
            //     'sort' => 1,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 15,
            //     'title' => 'R461〜R480',
            //     'sort' => 1,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 15,
            //     'title' => 'R481〜R500',
            //     'sort' => 1,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 15,
            //     'title' => 'R501〜R520',
            //     'sort' => 1,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'level_id' => 15,
            //     'title' => 'R521〜R530',
            //     'sort' => 1,
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],

            // Vocabulary GRIT 2500 Stage3 単語
            [
                'level_id' => 19,
                'title' => '0801〜0820',
                'sort' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'level_id' => 19,
                'title' => '0821〜0840',
                'sort' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'level_id' => 19,
                'title' => '0841〜0860',
                'sort' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'level_id' => 19,
                'title' => '0861〜0880',
                'sort' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'level_id' => 19,
                'title' => '0881〜0900',
                'sort' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'level_id' => 19,
                'title' => '0901〜0920',
                'sort' => 6,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'level_id' => 19,
                'title' => '0921〜0940',
                'sort' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'level_id' => 19,
                'title' => '0941〜0960',
                'sort' => 8,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'level_id' => 19,
                'title' => '0961〜0980',
                'sort' => 9,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'level_id' => 19,
                'title' => '0981〜1000',
                'sort' => 10,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'level_id' => 19,
                'title' => '1001〜1020',
                'sort' => 11,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'level_id' => 19,
                'title' => '1021〜1040',
                'sort' => 12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'level_id' => 19,
                'title' => '1041〜1060',
                'sort' => 13,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'level_id' => 19,
                'title' => '1061〜1080',
                'sort' => 14,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'level_id' => 19,
                'title' => '1081〜1100',
                'sort' => 15,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'level_id' => 19,
                'title' => '1101〜1120',
                'sort' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'level_id' => 19,
                'title' => '1121〜1140',
                'sort' => 17,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'level_id' => 19,
                'title' => '1141〜1160',
                'sort' => 18,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'level_id' => 19,
                'title' => '1161〜1180',
                'sort' => 19,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'level_id' => 19,
                'title' => '1181〜1200',
                'sort' => 20,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
