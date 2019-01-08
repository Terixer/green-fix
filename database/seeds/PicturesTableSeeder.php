<?php

use Illuminate\Database\Seeder;

class PicturesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pictures')->delete();
        
        \DB::table('pictures')->insert(array (
            0 => 
            array (
                'id' => 1,
                'advertisement_id' => 1,
                'filename' => 'public/pictures/f6ltZ8VbfbeK65BoIvLSm9S9nFvFDpecOssHIjGO.jpeg',
                'created_at' => '2019-01-08 14:24:40',
                'updated_at' => '2019-01-08 14:24:40',
            ),
            1 => 
            array (
                'id' => 2,
                'advertisement_id' => 2,
                'filename' => 'public/pictures/D5Ot3ZY3kEGpPbzw5WCm2pBrGTBiApe3nfNHN1Zz.jpeg',
                'created_at' => '2019-01-08 14:25:14',
                'updated_at' => '2019-01-08 14:25:14',
            ),
            2 => 
            array (
                'id' => 3,
                'advertisement_id' => 3,
                'filename' => 'public/pictures/sNr35vmnnvAZgDDLBedHuJiRMghytOcUBfdfvdEb.jpeg',
                'created_at' => '2019-01-08 14:25:43',
                'updated_at' => '2019-01-08 14:25:43',
            ),
            3 => 
            array (
                'id' => 4,
                'advertisement_id' => 4,
                'filename' => 'public/pictures/Alnw2BV6q7RSD08z6hUcGqzGkI6tE0agHk5WXaHP.jpeg',
                'created_at' => '2019-01-08 14:26:19',
                'updated_at' => '2019-01-08 14:26:19',
            ),
            4 => 
            array (
                'id' => 5,
                'advertisement_id' => 5,
                'filename' => 'public/pictures/Loe1E1OJlV3cg4P41SfrDhpJmkjOWkJzijsTwums.jpeg',
                'created_at' => '2019-01-08 14:26:52',
                'updated_at' => '2019-01-08 14:26:52',
            ),
            5 => 
            array (
                'id' => 6,
                'advertisement_id' => 6,
                'filename' => 'public/pictures/8Ohaiw7FPEEo4fceq1We88SVQZr3Z3Lylpvv3grh.jpeg',
                'created_at' => '2019-01-08 14:27:18',
                'updated_at' => '2019-01-08 14:27:18',
            ),
            6 => 
            array (
                'id' => 7,
                'advertisement_id' => 7,
                'filename' => 'public/pictures/W0TspuR9OEUwjIbifzECTfzm9bs1Fc2JKR2cbTvN.jpeg',
                'created_at' => '2019-01-08 14:27:53',
                'updated_at' => '2019-01-08 14:27:53',
            ),
            7 => 
            array (
                'id' => 8,
                'advertisement_id' => 7,
                'filename' => 'public/pictures/m4GDdNucePfg0oUUCPTr59O1AALiNrUIcVxtwcVp.jpeg',
                'created_at' => '2019-01-08 14:27:53',
                'updated_at' => '2019-01-08 14:27:53',
            ),
            8 => 
            array (
                'id' => 9,
                'advertisement_id' => 7,
                'filename' => 'public/pictures/ApcwSZyRgLotFHDBoMef5X2TXtjmF7f7UnauPVo0.jpeg',
                'created_at' => '2019-01-08 14:27:53',
                'updated_at' => '2019-01-08 14:27:53',
            ),
            9 => 
            array (
                'id' => 10,
                'advertisement_id' => 8,
                'filename' => 'public/pictures/DK8Nm6l2O4CJyT94YJJ4n1NmoX4GxHZJaeJmCJEm.jpeg',
                'created_at' => '2019-01-08 14:28:23',
                'updated_at' => '2019-01-08 14:28:23',
            ),
        ));
        
        
    }
}