<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AppealListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        $requests = DB::table('requests')
            ->join('devices', 'devices.id', '=', 'requests.devices_id')
            ->join('users as operators', 'operators.id', '=', 'requests.operators_id')
            ->join('users as responsible_users', 'responsible_users.id', '=', 'requests.responsible_user_id')
            ->join('dictionaries', function ($join) {
                $join->on('requests.r_status_id', '=', 'dictionaries.id')
                    ->where('dictionaries.dict_type_id', '=', 5);

            })
            ->join('device_boundaries', 'devices.device_boundaries_id', '=', 'device_boundaries.id')
            
            ->select('requests.*', 'operators.name as operator_name', 'dictionaries.name as status_name',
             'responsible_users.name as responsible_user_name', 'devices.serial_number',
             'device_boundaries.device_bound_neme')
            ->get();
            if ($request->ajax()) 
               return response()
               ->json($requests);
           
        return view('pages/apealsListPage', ['requests' => $requests]);
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
