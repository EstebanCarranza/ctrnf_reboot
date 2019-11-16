<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class challengeData extends Controller
{
     //
    public function getFeedbacks()
    {
        $quickTable = DB::table('tbl_feedback')->select()->get();
        
        return response()->json($quickTable);
    }

    public function getVisitPage()
    {
        $quickTable = DB::table('tbl_webPageParams')->select()->where('idWebPageParams', 1)->first();
        if($quickTable != null){
        DB::table('tbl_webPageParams')
            ->where('idWebPageParams', 1)
            ->update([
                'value'        =>          ($quickTable->value+1)
            ]);
       
        
            $quickTable = DB::table('tbl_webPageParams')->select()->where('title', 'ctrnfPageViews')->first();
         }
         else{
             $quickTable = array('value' => 0);
            //array_push($quickTable, 0);
         }
        return response()->json($quickTable);
    }
    public function getTime()
    {
        $fechaActual = gmdate("Y-m-j", time());
        return response()->json($fechaActual);
    }
    public function getQuick()
    {
     //   $hoy=new DateTime("now");
     //gmdate("Y/m/j H:i:s", time()
        $fechaActual = gmdate("Y-m-j", time());
        $quickTable = DB::table('tbl_challengeDT')->select()->where('idChallenge', 1)->where('fechaFin','>=',$fechaActual)->get();
        return response()->json($quickTable);
    }
    public function getDialy()
    {
        $fechaActual = gmdate("Y-m-j", time());
        $quickTable = DB::table('tbl_challengeDT')->select()->where('idChallenge', 2)->where('fechaInicio','=',$fechaActual)->get();
        return response()->json($quickTable);
    }
    public function getWeekly()
    {
        $fechaActual = gmdate("Y-m-j", time());
        $quickTable = DB::table('tbl_challengeDT')->select()->where('idChallenge', 3)->where('fechaFin', '>=', $fechaActual)->get();
        return response()->json($quickTable);
    }
    public function getThemed()
    {
        $fechaActual = gmdate("Y-m-j", time());
        $quickTable = DB::table('tbl_challengeDT')->select()->where('idChallenge', 4)->where('fechaFin', '>=', $fechaActual)->get();
        return response()->json($quickTable);
    }
    public function getPro()
    {
        $fechaActual = gmdate("Y-m-j", time());
        $quickTable = DB::table('tbl_challengeDT')->select()->where('idChallenge', 5)->where('fechaFin', '>=', $fechaActual)->get();
        return response()->json($quickTable);
    }
    public function getTier()
    {
        $quickTable = DB::table('tbl_tier')->select()->get();
        return response()->json($quickTable);
    }
    public function getTrackRace()
    {
        $quickTable = DB::table('tbl_track')->select()->where('mode',1)->get();
        return response()->json($quickTable);
    }
    public function getTrackBattle()
    {
        $quickTable = DB::table('tbl_track')->select()->where('mode',2)->get();
        return response()->json($quickTable);
    }
}
