<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ticket;

class ticketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets_list = DB::table('ticket_general_info')
            ->leftJOIN('team_general_info as t2', 't2.team_member_ID', '=', 'ticket_general_info.Created_By')
            ->leftJOIN('team_general_info as t3', 't3.team_member_ID', '=', 'ticket_general_info.Checked_by')
            ->select('ticket_general_info.*', 't2.name as Created_By' , 't3.name as Checked_by')
            ->get();

        return view('tickets.tickets_list',[
            'tickets_list' => $tickets_list
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
    public function show($id)
    {
        $id = 3 ;//test
        $ticket_details = DB::table('ticket_general_info')
            ->leftJOIN('team_general_info as t2', 't2.team_member_ID', '=', 'ticket_general_info.Created_By')
            ->leftJOIN('team_general_info as t3', 't3.team_member_ID', '=', 'ticket_general_info.Checked_by')
            ->select('ticket_general_info.*', 't2.name as Created_By' , 't3.name as Checked_by')
            ->where('ticket_general_info.Ticket_ID','=',$id)
            ->get();

        return view('tickets.ticket_details',[
            'ticket_details' => $ticket_details
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
