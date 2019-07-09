<?php

use App\Models\Hike;
use Illuminate\Database\Seeder;

function generateRandomString($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

class HikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hike::create([
            'title' => 'The hidden waterfall',
            'level' => 'normal',
            'imageLink' => '/img/desktop_section2_image.jpg',
            'description' => 'The normal route to the Arbizon summit is on the south side, the Aulon Valley. The starting point is the barns of Lurgues, near the village of Aulon, about 1400 m above sea level.<br /><br />Another way of access exists: it takes the valley of the lake of Arou and passes within the Arbizon-Montfaucon circus to climb on the crest by the breach of Aurey…',
            'article' => ''
        ]);
        Hike::create([
            'title' => 'The preacher hike',
            'level' => 'Easy',
            'imageLink' => '/img/desktop_section2_image.jpg',
            'description' => '',
            'article' => ''
        ]);
        Hike::create([
            'title' => 'Canyoning & kanoé',
            'level' => 'Normal',
            'imageLink' => '/img/desktop_section2_image.jpg',
            'description' => '',
            'article' => ''
        ]);
        Hike::create([
            'title' => 'The trail of the black witch',
            'level' => 'Normal',
            'imageLink' => '/img/desktop_section2_image.jpg',
            'description' => '',
            'article' => ''
        ]);
        Hike::create([
            'title' => 'The adventurous kids',
            'level' => 'Easy',
            'imageLink' => '/img/desktop_section2_image.jpg',
            'description' => '',
            'article' => ''
        ]);
        Hike::create([
            'title' => 'The raptor ridge',
            'level' => 'hard',
            'imageLink' => '/img/desktop_section2_image.jpg',
            'description' => '',
            'article' => ''
        ]);
        for($i = 0; $i < 20; $i++) {
            Hike::create([
                'title' => generateRandomString(),
                'level' => generateRandomString(),
                'imageLink' => '/img/desktop_section2_image.jpg',
                'description' => generateRandomString(),
                'article' => generateRandomString()
            ]);
        }
    }
}
