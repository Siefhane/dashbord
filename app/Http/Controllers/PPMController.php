<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PPM_details;
use App\Models\PPM_list;

class PPMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //--- Test ---
        $id = 1; // PPM_ID
        /*
         * $device_ppm = DB::table('ppm_dates')
            ->where('PPM_ID', '=', $id)
            ->get();
        */

        $device_ppm = DB::table('ppm_dates')
            ->leftJOIN('ppm_check_list_id', 'ppm_dates.PPM_Date_ID',
                '=', 'ppm_check_list_id.PPM_Date_ID')
            ->select('ppm_dates.*',
                DB::raw('GROUP_CONCAT(ppm_check_list_id.description SEPARATOR " - ") as info'))
            ->where('PPM_ID','=',$id)
            ->groupBy('ppm_dates.PPM_Date_ID')
            ->get();


        return view('devices_clients.ppm_details',[
            'device_ppm' => $device_ppm
        ]);

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
        //
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
