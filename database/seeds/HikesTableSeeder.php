<?php

use App\Models\Hike;
use Illuminate\Database\Seeder;



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
            'level' => 'Normal',
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
            'level' => 'Hard',
            'imageLink' => '/img/desktop_section2_image.jpg',
            'description' => '',
            'article' => ''
        ]);

        function lorem($x, $y) { return implode(" ", array_slice(preg_split("/[\s]+/", file_get_contents('http://loripsum.net/api/plaintext')), 0, rand($x, $y))); }
        for($i = 0; $i < 20; $i++) {
            Hike::create([
                'title' => lorem(3, 10),
                'level' => ["Easy", "Medium", "Hard", "Impossible"][rand(0,3)],
                'imageLink' => '/img/desktop_section2_image.jpg',
                'description' => lorem(20, 30),
                'article' => lorem(100, 200)
            ]);
        }
    }
}
