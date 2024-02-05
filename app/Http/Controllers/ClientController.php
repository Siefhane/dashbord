<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$clients_list = client::all();
        $clients_list = DB::table('client_general_info')
            ->leftJOIN('client_major', 'client_general_info.Client_ID', '=', 'client_major.Client_ID')
            ->leftJOIN('major', 'major.Major_ID', '=', 'client_major.Major_ID')
            ->select('client_general_info.*',DB::raw('GROUP_CONCAT(major.Arabic_Name) as c_major'))
            ->groupBy('client_general_info.Client_ID')
            //->orderBy('client_general_info.Client_ID', 'desc')
            ->get();
        //dd($clients_list);
        return view('devices_clients.clients_list',[
            'clients_list' => $clients_list
        ]);
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
    public function show ($id)
    {
        //--- Test ---
        $id = 2;

        $client_main_info = DB::table('client_general_info')
            ->where('Client_ID', '=', $id)
            ->first();

        $client_major = DB::table('client_major')
            ->leftJOIN('major', 'major.Major_ID', '=', 'client_major.Major_ID')
            ->select('major.Arabic_name')
            ->where('client_major.Client_ID','=',$id)
            ->get();

        $client_type = DB::table('client_type')
            ->leftJOIN('type_general_info', 'type_general_info.Type_id', '=', 'client_type.Type_id')
            ->select('type_general_info.Arabic_name')
            ->where('client_type.Client_ID','=',$id)
            ->get();

        $client_locations_phones_emails = DB::table('client_address')
            ->leftJOIN('client_phone', 'client_address.location_ID'
                , '=', 'client_phone.location_ID')
            ->where('client_address.Client_ID', '=', $id)
            ->get();

        $client_devices = DB::table('client_device')
            ->leftJOIN('device_general_info', 'client_device.Device_ID'
                , '=', 'device_general_info.Device_ID')
            ->leftJOIN('client_address', 'client_device.location_ID', '=', 'client_address.location_ID')
            ->leftJOIN('device_major', 'client_device.Device_ID', '=', 'device_major.Device_ID')
            ->leftJOIN('major', 'device_major.Major_ID', '=', 'major.Major_ID')
            ->where('client_address.Client_ID', '=', $id)
            ->get();

        //dd($client_major);
        return view('devices_clients.client_details',[
            'client_main_info' => $client_main_info,
            'client_major' => $client_major,
            'client_type' => $client_type,
            'client_locations_phones_emails'  => $client_locations_phones_emails,
            'client_devices' => $client_devices
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
