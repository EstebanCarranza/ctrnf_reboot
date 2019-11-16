<?php

use Illuminate\Database\Seeder;

class tracksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //mode: 1 (race), 2 (battle), 3 (cup), 4 (race - especial)
        $race_tracks = array(
            array('numberTrack' =>   1, 'title' => 'Crash Cove', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_ctr/01.jpg', 'mode' => 1),
            array('numberTrack' =>   2, 'title' => 'Mystery Caves', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_ctr/02.jpg', 'mode' => 1),
            array('numberTrack' =>   3, 'title' => 'Sewer Speedway', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_ctr/03.jpg', 'mode' => 1),
            array('numberTrack' =>   4, 'title' => 'Roo’s Tubes', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_ctr/04.jpg', 'mode' => 1),
            array('numberTrack' =>   5, 'title' => 'Slide Coliseum', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_ctr/05.jpg', 'mode' => 1),
            array('numberTrack' =>   6, 'title' => 'Turbo Track', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_ctr/06.jpg', 'mode' => 1),
            array('numberTrack' =>   7, 'title' => 'Coco Park', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_ctr/07.jpg', 'mode' => 1),
            array('numberTrack' =>   8, 'title' => 'Tiger Temple', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_ctr/08.jpg', 'mode' => 1),
            array('numberTrack' =>   9, 'title' => 'Papu’s Pyramid', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_ctr/09.jpg', 'mode' => 1),
            array('numberTrack' =>  10, 'title' => 'Dingo Canyon', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_ctr/10.jpg', 'mode' => 1),
            array('numberTrack' =>  11, 'title' => 'Polar Pass', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_ctr/11.jpg', 'mode' => 1),
            array('numberTrack' =>  12, 'title' => 'Tiny Arena', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_ctr/12.jpg', 'mode' => 1),
            array('numberTrack' =>  13, 'title' => 'Dragon Mines', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_ctr/13.jpg', 'mode' => 1),
            array('numberTrack' =>  14, 'title' => 'Blizzard Bluff', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_ctr/14.jpg', 'mode' => 1),
            array('numberTrack' =>  15, 'title' => 'Hot Air Skyway', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_ctr/15.jpg', 'mode' => 1),
            array('numberTrack' =>  16, 'title' => 'Cortex Castle', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_ctr/16.jpg', 'mode' => 1),
            array('numberTrack' =>  17, 'title' => 'N.Gin Labs', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_ctr/17.jpg', 'mode' => 1),
            array('numberTrack' =>  18, 'title' => 'Oxide Station', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_ctr/18.jpg', 'mode' => 1),
            array('numberTrack' =>  19, 'title' => 'Crash Nitro Kart (CNK):', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_cnk/01.jpg', 'mode' => 1),
            array('numberTrack' =>  20, 'title' => 'Inferno Island', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_cnk/02.jpg', 'mode' => 1),
            array('numberTrack' =>  21, 'title' => 'Jungle Boogie', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_cnk/03.jpg', 'mode' => 1),
            array('numberTrack' =>  22, 'title' => 'Clockwork Wumpa', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_cnk/04.jpg', 'mode' => 1),
            array('numberTrack' =>  23, 'title' => 'Android Alley', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_cnk/05.jpg', 'mode' => 1),
            array('numberTrack' =>  24, 'title' => 'Electron Avenue', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_cnk/06.jpg', 'mode' => 1),
            array('numberTrack' =>  25, 'title' => 'Deep Sea Driving', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_cnk/07.jpg', 'mode' => 1),
            array('numberTrack' =>  26, 'title' => 'Thunder Struck', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_cnk/08.jpg', 'mode' => 1),
            array('numberTrack' =>  27, 'title' => 'Tiny Temple', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_cnk/09.jpg', 'mode' => 1),
            array('numberTrack' =>  28, 'title' => 'Meteor Gorge', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_cnk/10.jpg', 'mode' => 1),
            array('numberTrack' =>  29, 'title' => 'Barin Ruins', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_cnk/11.jpg', 'mode' => 1),
            array('numberTrack' =>  30, 'title' => 'Out of Time', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_cnk/12.jpg', 'mode' => 1),
            array('numberTrack' =>  31, 'title' => 'Assembly Lane', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_cnk/13.jpg', 'mode' => 1),
            array('numberTrack' =>  32, 'title' => 'Hyper Spaceway', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_cnk/14.jpg', 'mode' => 1),
            array('numberTrack' =>  1, 'title' => 'Retro Stadium', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_cnk/15.jpg', 'mode' => 4)
        );

        DB::table('tbl_track')->insert($race_tracks);

        $battle_tracks = array(
            array('numberTrack' =>  1, 'title' => 'Skull Rock', 'pathImg' => 'https://ctrnf.twicky.app/img/data/02_battle_ctr/01.jpg', 'mode' => 2),
            array('numberTrack' =>  2, 'title' => 'Nitro Court', 'pathImg' => 'https://ctrnf.twicky.app/img/data/02_battle_ctr/02.jpg', 'mode' => 2),
            array('numberTrack' =>  3, 'title' => 'Parking Lot', 'pathImg' => 'https://ctrnf.twicky.app/img/data/02_battle_ctr/03.jpg', 'mode' => 2),
            array('numberTrack' =>  4, 'title' => 'Rocky Road', 'pathImg' => 'https://ctrnf.twicky.app/img/data/02_battle_ctr/04.jpg', 'mode' => 2),
            array('numberTrack' =>  5, 'title' => 'Lab Basement', 'pathImg' => 'https://ctrnf.twicky.app/img/data/02_battle_ctr/05.jpg', 'mode' => 2),
            array('numberTrack' =>  6, 'title' => 'Rampage Ruins', 'pathImg' => 'https://ctrnf.twicky.app/img/data/02_battle_ctr/06.jpg', 'mode' => 2),
            array('numberTrack' =>  7, 'title' => 'The North Bowl', 'pathImg' => 'https://ctrnf.twicky.app/img/data/02_battle_ctr/07.jpg', 'mode' => 2),
            array('numberTrack' =>  8, 'title' => 'Temple Turmoil', 'pathImg' => 'https://ctrnf.twicky.app/img/data/02_battle_cnk/01.jpg', 'mode' => 2),
            array('numberTrack' =>  9, 'title' => 'Frozen Frenzy', 'pathImg' => 'https://ctrnf.twicky.app/img/data/02_battle_cnk/02.jpg', 'mode' => 2),
            array('numberTrack' =>  10, 'title' => 'Desert Storm', 'pathImg' => 'https://ctrnf.twicky.app/img/data/02_battle_cnk/03.jpg', 'mode' => 2),
            array('numberTrack' =>  11, 'title' => 'Magnetic Mayhem', 'pathImg' => 'https://ctrnf.twicky.app/img/data/02_battle_cnk/04.jpg', 'mode' => 2),
            array('numberTrack' =>  12, 'title' => 'Terra Drome', 'pathImg' => 'https://ctrnf.twicky.app/img/data/02_battle_cnk/05.jpg', 'mode' => 2)
        );

        DB::table('tbl_track')->insert($battle_tracks);

        $bonus_tracks = array(
            array('numberTrack' =>  1, 'title' => 'Twilight Tour', 'pathImg' => 'https://ctrnf.twicky.app/img/data/05_tracks_bonus/01.jpg', 'mode' => 1),
            array('numberTrack' =>  2, 'title' => 'Prehistoric Playground', 'pathImg' => 'https://ctrnf.twicky.app/img/data/05_tracks_bonus/02.jpg', 'mode' => 1),
            array('numberTrack' =>  3, 'title' => 'Spyro Circuit', 'pathImg' => 'https://ctrnf.twicky.app/img/data/05_tracks_bonus/03.jpg', 'mode' => 1),
            array('numberTrack' =>  4, 'title' => 'Nina\'s Nightmare', 'pathImg' => 'https://ctrnf.twicky.app/img/data/05_tracks_bonus/04.jpg', 'mode' => 1),
            array('numberTrack' =>  5, 'title' => 'Koala Carnival', 'pathImg' => 'https://ctrnf.twicky.app/img/data/05_tracks_bonus/05.jpg', 'mode' => 1),
            array('numberTrack' =>  6, 'title' => 'Gingerbread Joyride', 'pathImg' => 'https://ctrnf.twicky.app/img/data/05_tracks_bonus/06.jpg', 'mode' => 1)
        );

       DB::table('tbl_track')->insert($bonus_tracks);
    }
}
