<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;
use DB;



class addtriproundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('add_TripRound');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('add_TripRound');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $trips= DB::table('trips')
     //   ->insertGetId([ 
     //       "trips_name" => $request->input('trips_name',$trips),
     //       "trip_nday" => $request->input('trip_nday',$trips),
     //       "trip_nnight" => $request->input('trip_nnight',$trips),
     //       "trip_province" => $request->input('trip_province',$trips),
     //       "trip_meal" =>$request->input('trip_meal',$trips),
     //       "trip_description" => $request->input('trip_description',$trips),
     //       "travelagency_id"=> $request->input( "travelagency_id",'1'),
     //       "source_id"=>$request->input("source_id",'1'),
     //       "destination_id"=>$request->input( "source_id",'1')
         //   ]);
          $trip=   DB::table('triprounds')
        ->insertGetId([ 


       //    "start_date" => $request->input('start_date','2012-07-11'),
        //        "departure_date" =>$request->input('departure_date','2014-07-11'),
        //        "price_child" =>$request->input('price_child','6400'),
          //      "price_adult" =>$request->input('price_adult','7800'),
           //     "amount_seats" =>$request->input('amount_seats','5'),
           //     "triprounds_description" =>$request->input('triprounds_description'),
           //     "trip_id" =>$request->input('trip_id','8')
            ]);
            $trips =DB::table('schedules')
            ->insertGetId([
         //       "schedule_day" =>$request->input('schedule_day'),
             //   "schedule_time" =>$request->input('schedule_time'),
          //      "schedule_place" =>$request->input('schedule_place'),
          //      "schedule_description" =>$request->input('schedule_description'),
         //       "trip_id" =>$request->input('trip_id')
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         DB::table('trips')
            ->where('id', $id)
            ->update([
                 "trips_name" => $request->input('trips_name'),
            "trip_nday" => $request->input('trip_nday'),
            "trip_nnight" => $request->input('trip_nnight'),
            "trip_province" => $request->input('trip_province'),
            "trip_meal" =>$request->input('trip_meal'),
            "trip_description" => $request->input('trip_description')
            ]);
            DB::table('triprounds')
            ->where('id',$id)
            ->update([
               "start_date" => $request->input('start_date'),
                "departure_date" =>$request->input('departure_date'),
                "price_child" =>$request->input('price_child'),
                "price_adult" =>$request->input('price_adult'),
                "amount_seats" =>$request->input('amount_seats'),
                "triprounds_description" =>$request->input('triprounds_description')
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
