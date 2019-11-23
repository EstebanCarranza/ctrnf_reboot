<?php

use Illuminate\Database\Seeder;

class tracks_ES_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //php artisan db:seed --class=tracks_ES_Seeder
        //mode: 1 (race), 2 (battle), 3 (cup), 4 (race - especial)
        $race_tracks = array(
            array('numberTrack' =>   1, 'title' => 'Cala Crash', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_ctr/01.jpg', 'mode' => 1, 'language' => 'ES-MX'),
            array('numberTrack' =>   2, 'title' => 'Cuevas Ocultas', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_ctr/02.jpg', 'mode' => 1, 'language' => 'ES-MX'),
            array('numberTrack' =>   3, 'title' => 'Pista Cloaca', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_ctr/03.jpg', 'mode' => 1, 'language' => 'ES-MX'),
            array('numberTrack' =>   4, 'title' => 'Tubos de Roo', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_ctr/04.jpg', 'mode' => 1, 'language' => 'ES-MX'),
            array('numberTrack' =>   5, 'title' => 'Coliseo Derrape', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_ctr/05.jpg', 'mode' => 1, 'language' => 'ES-MX'),
            array('numberTrack' =>   6, 'title' => 'Pista Turbo', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_ctr/06.jpg', 'mode' => 1, 'language' => 'ES-MX'),
            array('numberTrack' =>   7, 'title' => 'Parque de Coco', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_ctr/07.jpg', 'mode' => 1, 'language' => 'ES-MX'),
            array('numberTrack' =>   8, 'title' => 'Templo Tigre', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_ctr/08.jpg', 'mode' => 1, 'language' => 'ES-MX'),
            array('numberTrack' =>   9, 'title' => 'Pirámide de Papu', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_ctr/09.jpg', 'mode' => 1, 'language' => 'ES-MX'),
            array('numberTrack' =>  10, 'title' => 'Cañón Dingo', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_ctr/10.jpg', 'mode' => 1, 'language' => 'ES-MX'),
            array('numberTrack' =>  11, 'title' => 'Paso Polar', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_ctr/11.jpg', 'mode' => 1, 'language' => 'ES-MX'),
            array('numberTrack' =>  12, 'title' => 'Arena de Tiny', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_ctr/12.jpg', 'mode' => 1, 'language' => 'ES-MX'),
            array('numberTrack' =>  13, 'title' => 'Minas Dragón', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_ctr/13.jpg', 'mode' => 1, 'language' => 'ES-MX'),
            array('numberTrack' =>  14, 'title' => 'Risco Nevado', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_ctr/14.jpg', 'mode' => 1, 'language' => 'ES-MX'),
            array('numberTrack' =>  15, 'title' => 'Pista Zepelín', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_ctr/15.jpg', 'mode' => 1, 'language' => 'ES-MX'),
            array('numberTrack' =>  16, 'title' => 'Castillo de Cortex', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_ctr/16.jpg', 'mode' => 1, 'language' => 'ES-MX'),
            array('numberTrack' =>  17, 'title' => 'Laboratorios N. Gin', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_ctr/17.jpg', 'mode' => 1, 'language' => 'ES-MX'),
            array('numberTrack' =>  18, 'title' => 'Estación de Oxide', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_ctr/18.jpg', 'mode' => 1, 'language' => 'ES-MX'),
            array('numberTrack' =>  19, 'title' => 'Isla infierno', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_cnk/01.jpg', 'mode' => 1, 'language' => 'ES-MX'),
            array('numberTrack' =>  20, 'title' => 'En la Selva', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_cnk/02.jpg', 'mode' => 1, 'language' => 'ES-MX'),
            array('numberTrack' =>  21, 'title' => 'Reloj Wumpa', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_cnk/03.jpg', 'mode' => 1, 'language' => 'ES-MX'),
            array('numberTrack' =>  22, 'title' => 'Zona Androide', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_cnk/04.jpg', 'mode' => 1, 'language' => 'ES-MX'),
            array('numberTrack' =>  23, 'title' => 'Avenida Electrón', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_cnk/05.jpg', 'mode' => 1, 'language' => 'ES-MX'),
            array('numberTrack' =>  24, 'title' => 'Ruta Submarina', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_cnk/06.jpg', 'mode' => 1, 'language' => 'ES-MX'),
            array('numberTrack' =>  25, 'title' => 'País del trueno', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_cnk/07.jpg', 'mode' => 1, 'language' => 'ES-MX'),
            array('numberTrack' =>  26, 'title' => 'Templo de Tiny', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_cnk/08.jpg', 'mode' => 1, 'language' => 'ES-MX'),
            array('numberTrack' =>  27, 'title' => 'Valle meteorito', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_cnk/09.jpg', 'mode' => 1, 'language' => 'ES-MX'),
            array('numberTrack' =>  28, 'title' => 'Ruinas Barin', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_cnk/10.jpg', 'mode' => 1, 'language' => 'ES-MX'),
            array('numberTrack' =>  29, 'title' => 'Fuera del tiempo', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_cnk/11.jpg', 'mode' => 1, 'language' => 'ES-MX'),
            array('numberTrack' =>  30, 'title' => 'La fábrica', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_cnk/12.jpg', 'mode' => 1, 'language' => 'ES-MX'),
            array('numberTrack' =>  31, 'title' => 'Autopista Espacial', 'pathImg' => 'https://ctrnf.twicky.app/img/data/01_tracks_cnk/13.jpg', 'mode' => 1, 'language' => 'ES-MX'),
            array('numberTrack' =>  1, 'title' => 'Pista Retro', 'pathImg' => 'https://ctrnf.twicky.app/img/data/04_tracks_special/01.jpg', 'mode' => 4, 'language' => 'ES-MX')
        );

        DB::table('tbl_track')->insert($race_tracks);

        $battle_tracks = array(
            array('numberTrack' =>  1, 'title' => 'Peñón Calavera', 'pathImg' => 'https://ctrnf.twicky.app/img/data/02_battle_ctr/01.jpg', 'mode' => 2, 'language' => 'ES-MX'),
            array('numberTrack' =>  2, 'title' => 'Jardines Nitro', 'pathImg' => 'https://ctrnf.twicky.app/img/data/02_battle_ctr/02.jpg', 'mode' => 2, 'language' => 'ES-MX'),
            array('numberTrack' =>  3, 'title' => 'Estacionamiento', 'pathImg' => 'https://ctrnf.twicky.app/img/data/02_battle_ctr/03.jpg', 'mode' => 2, 'language' => 'ES-MX'),
            array('numberTrack' =>  4, 'title' => 'Ruinas Rabiosas', 'pathImg' => 'https://ctrnf.twicky.app/img/data/02_battle_ctr/04.jpg', 'mode' => 2, 'language' => 'ES-MX'),
            array('numberTrack' =>  5, 'title' => 'Sótano de laboratorio', 'pathImg' => 'https://ctrnf.twicky.app/img/data/02_battle_ctr/05.jpg', 'mode' => 2, 'language' => 'ES-MX'),
            array('numberTrack' =>  6, 'title' => 'Rodaje Rocoso', 'pathImg' => 'https://ctrnf.twicky.app/img/data/02_battle_ctr/06.jpg', 'mode' => 2, 'language' => 'ES-MX'),
            array('numberTrack' =>  7, 'title' => 'The North Bowl', 'pathImg' => 'https://ctrnf.twicky.app/img/data/02_battle_ctr/07.jpg', 'mode' => 2, 'language' => 'ES-MX'),
            array('numberTrack' =>  8, 'title' => 'Tumulto del templo', 'pathImg' => 'https://ctrnf.twicky.app/img/data/02_battle_cnk/01.jpg', 'mode' => 2, 'language' => 'ES-MX'),
            array('numberTrack' =>  9, 'title' => 'Frozen Frenzy', 'pathImg' => 'https://ctrnf.twicky.app/img/data/02_battle_cnk/02.jpg', 'mode' => 2, 'language' => 'ES-MX'),
            array('numberTrack' =>  10, 'title' => 'Tormenta del Desierto', 'pathImg' => 'https://ctrnf.twicky.app/img/data/02_battle_cnk/03.jpg', 'mode' => 2, 'language' => 'ES-MX'),
            array('numberTrack' =>  11, 'title' => 'Caos magnético', 'pathImg' => 'https://ctrnf.twicky.app/img/data/02_battle_cnk/04.jpg', 'mode' => 2, 'language' => 'ES-MX'),
            array('numberTrack' =>  12, 'title' => 'Terra Drome', 'pathImg' => 'https://ctrnf.twicky.app/img/data/02_battle_cnk/05.jpg', 'mode' => 2, 'language' => 'ES-MX')
        );

        DB::table('tbl_track')->insert($battle_tracks);

        $bonus_tracks = array(
            array('numberTrack' =>  1, 'title' => 'Circuito crepúsculo', 'pathImg' => 'https://ctrnf.twicky.app/img/data/05_tracks_bonus/01.jpg', 'mode' => 1, 'language' => 'ES-MX'),
            array('numberTrack' =>  2, 'title' => 'Parque prehistórico', 'pathImg' => 'https://ctrnf.twicky.app/img/data/05_tracks_bonus/02.jpg', 'mode' => 1, 'language' => 'ES-MX'),
            array('numberTrack' =>  3, 'title' => 'Circuito de Spyro', 'pathImg' => 'https://ctrnf.twicky.app/img/data/05_tracks_bonus/03.jpg', 'mode' => 1, 'language' => 'ES-MX'),
            array('numberTrack' =>  4, 'title' => 'Pesadilla de Nina', 'pathImg' => 'https://ctrnf.twicky.app/img/data/05_tracks_bonus/04.jpg', 'mode' => 1, 'language' => 'ES-MX'),
            array('numberTrack' =>  5, 'title' => 'Carnaval Koala', 'pathImg' => 'https://ctrnf.twicky.app/img/data/05_tracks_bonus/05.jpg', 'mode' => 1, 'language' => 'ES-MX'),
            array('numberTrack' =>  6, 'title' => 'Gingerbread Joyride', 'pathImg' => 'https://ctrnf.twicky.app/img/data/05_tracks_bonus/06.jpg', 'mode' => 1, 'language' => 'ES-MX')
        );

       DB::table('tbl_track')->insert($bonus_tracks);
    }
}
