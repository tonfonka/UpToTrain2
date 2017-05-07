<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\trip;
use App\schedules;
use App\tripround;
class UserController extends Controller
{
    
    function index() {
        return view('index');
    }

    function search(){
        $trips = DB::table('trips')->get();
   
        // ->join('triprounds','triprounds.trip_id','=','trips.id')
        // ->join('travelagency','travelagency.id','=','trips.travelagency_id')
        // ->join('stations',function ($join){
        //     $join->on('trips.source_id','=','stations.id')
        //     ->orOn('trips.destination_id','=','stations.id'); 

        // })
        // $trips->distinct('trips_name');
        //->selete(DB::)
        //รัก
        //$trip as $trip
        
        // ->get();
        //se

        return view('tripuser',['trips'=>$trips]);
    }
    
    function schedule($id){
        //$tripr = DB::table('triprounds')-get();
        //return view("schedule",['tripr'=>$tripr]);
        //return view('schedule');
        $schedules = schedules::where('trip_id',$id)->get();
        $triprounds = tripround::where('trip_id',$id)->get();
        $trip = trip::where('id',$id)->first();
        $data = array(
            'schedules' => $schedules,
            'triprounds' => $triprounds,
            'trip' => $trip,
            'title' => 'Schedules'
        );
        return view('schedule', $data);
    }

    
    function login(){
        return view('login');
    }

    
    function register(){
        return view('register');
    }

    
    








}
