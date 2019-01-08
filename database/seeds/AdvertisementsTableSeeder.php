<?php

use Illuminate\Database\Seeder;

class AdvertisementsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('advertisements')->delete();
        
        \DB::table('advertisements')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae tempor purus, ac accumsan ante. Praesent ut fringilla quam. Phasellus euismod mauris quis velit condimentum, et bibendum lectus molestie. Nam consectetur facilisis condimentum. Quisque dolor est, ultricies nec consectetur at, fringilla ut nunc. Cras arcu sapien, accumsan quis lacinia vel, feugiat finibus ipsum. Sed porttitor non urna nec auctor. Cras tellus tortor, varius lobortis elit molestie, aliquet dictum sem.',
                'is_active' => 1,
                'phone' => '1234567890',
                'email' => 'example@example.com',
                'user_id' => 1,
                'created_at' => '2019-01-08 14:24:40',
                'updated_at' => '2019-01-08 14:24:40',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Aliquam rhoncus sem pellentesque elit suscipit',
                'description' => 'Aliquam rhoncus sem pellentesque elit suscipit, id fringilla lorem consequat. Quisque ullamcorper nisl quis aliquam iaculis. Vivamus semper vel ex sed posuere. Praesent feugiat libero sed ex iaculis commodo. Integer molestie libero eu dui commodo vulputate. Fusce in justo dolor. Proin elit purus, laoreet sed augue et, tempor mollis quam. Pellentesque eleifend vel ipsum ut ultrices. Mauris mattis lectus sed nibh consequat feugiat. Curabitur ullamcorper purus eget feugiat sodales.',
                'is_active' => 1,
                'phone' => '1234567890',
                'email' => 'example@example.com',
                'user_id' => 1,
                'created_at' => '2019-01-08 14:25:14',
                'updated_at' => '2019-01-08 14:25:14',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Cras ut felis facilisis urna',
                'description' => 'Cras ut felis facilisis urna volutpat rhoncus. Fusce laoreet tincidunt odio, vitae tempus nibh auctor pulvinar. Donec a elementum odio. Pellentesque risus magna, vehicula nec enim sit amet, tristique efficitur lacus. Curabitur tellus ante, pellentesque ac tellus in, eleifend condimentum ipsum. Aliquam congue neque libero, ac viverra elit convallis id. Proin congue et lectus eu vehicula. In suscipit lorem et bibendum cursus. Maecenas dui mauris, mollis vitae tellus eu, varius commodo augue. In id facilisis turpis, id eleifend diam. Cras eu semper urna. Nulla sed maximus leo, in lacinia est. Cras vel pulvinar felis. In eros nibh, imperdiet et lectus consequat, congue vehicula eros. Donec eget magna nec augue dictum aliquam. Proin eget ipsum ut nisl accumsan feugiat.',
                'is_active' => 1,
                'phone' => '1234567890',
                'email' => 'example@example.com',
                'user_id' => 1,
                'created_at' => '2019-01-08 14:25:43',
                'updated_at' => '2019-01-08 14:25:43',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Curabitur vel auctor turpis',
                'description' => 'Donec lacinia quam rhoncus tortor dictum, eget pretium metus fringilla. Ut ut lorem nisi. Vestibulum ac sapien risus. Vivamus eget volutpat libero. Integer convallis gravida ex, sed faucibus sem tristique vel. Curabitur vel auctor turpis. Suspendisse semper arcu velit, ac pellentesque neque sagittis a. Praesent at est mauris. Nunc non lacinia lorem. Nullam sollicitudin nisl non risus gravida porttitor. Pellentesque mollis lacinia quam. In pellentesque tempor convallis. In sed sagittis risus. Pellentesque tincidunt ullamcorper leo. Etiam eu vestibulum diam.',
                'is_active' => 1,
                'phone' => '1234567890',
                'email' => 'example@example.com',
                'user_id' => 1,
                'created_at' => '2019-01-08 14:26:19',
                'updated_at' => '2019-01-08 14:26:19',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Nam quis tellus vitae nisl dignissim congu',
                'description' => 'Aliquam gravida, nisi eu ultricies suscipit, lectus libero luctus mi, ac porttitor nunc augue nec libero. Nullam aliquam sed nunc non euismod. Sed venenatis nunc ligula, eget viverra ex maximus viverra. Donec auctor nisl enim, at ornare sapien porttitor a. Nunc consequat justo et elit ornare rhoncus. Nam quis tellus vitae nisl dignissim congue vitae vitae risus. Nunc eleifend arcu eu lorem porttitor lobortis in ac dui. In venenatis metus vehicula turpis commodo semper.',
                'is_active' => 1,
                'phone' => '1234567890',
                'email' => 'example@example.com',
                'user_id' => 1,
                'created_at' => '2019-01-08 14:26:52',
                'updated_at' => '2019-01-08 14:26:52',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Cras eu semper urna. Nulla sed maximus',
                'description' => 'Aliquam congue neque libero, ac viverra elit convallis id. Proin congue et lectus eu vehicula. In suscipit lorem et bibendum cursus. Maecenas dui mauris, mollis vitae tellus eu, varius commodo augue. In id facilisis turpis, id eleifend diam. Cras eu semper urna. Nulla sed maximus leo, in lacinia est. Cras vel pulvinar felis. In eros nibh, imperdiet et lectus consequat, congue vehicula eros. Donec eget magna nec augue dictum aliquam. Proin eget ipsum ut nisl accumsan feugiat.',
                'is_active' => 1,
                'phone' => '1234567890',
                'email' => 'example@example.com',
                'user_id' => 1,
                'created_at' => '2019-01-08 14:27:18',
                'updated_at' => '2019-01-08 14:27:18',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Etiam eu vestibulum diam.',
                'description' => 'Praesent at est mauris. Nunc non lacinia lorem. Nullam sollicitudin nisl non risus gravida porttitor. Pellentesque mollis lacinia quam. In pellentesque tempor convallis. In sed sagittis risus. Pellentesque tincidunt ullamcorper leo. Etiam eu vestibulum diam.',
                'is_active' => 1,
                'phone' => '1234567890',
                'email' => 'example@example.com',
                'user_id' => 1,
                'created_at' => '2019-01-08 14:27:53',
                'updated_at' => '2019-01-08 14:27:53',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Maecenas dui mauri',
                'description' => 'Proin congue et lectus eu vehicula. In suscipit lorem et bibendum cursus. Maecenas dui mauris, mollis vitae tellus eu, varius commodo augue. In id facilisis turpis, id eleifend diam. Cras eu semper urna. Nulla sed maximus leo, in lacinia est. Cras vel pulvinar felis. In eros nibh, imperdiet et lectus consequat, congue vehicula eros. Donec eget magna nec augue dictum aliquam. Proin eget ipsum ut nisl accumsan feugiat.',
                'is_active' => 1,
                'phone' => '1234567890',
                'email' => 'example@example.com',
                'user_id' => 1,
                'created_at' => '2019-01-08 14:28:23',
                'updated_at' => '2019-01-08 14:28:23',
            ),
        ));
        
        
    }
}