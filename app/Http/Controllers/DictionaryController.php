<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DictionaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public function regionGetData()
    {
        $regions = DB::table('dictionaries')->where('dict_type_id', '2')->paginate(15);
        return view('layouts/regions', ['regions' => $regions]);
    }

    public function deviceTypeGetData()
    {
        $device_types = DB::table('dictionaries')->where('dict_type_id', '9')->paginate(15);
        return view('pages/typeDevicePage', ['device_types' => $device_types]);
    }

    public function violationTypeGetData()
    {
        $violation_types = DB::table('violation_types')->paginate(15);
        return view('pages/violationTypePage', ['violation_types' => $violation_types]);
    }
    
    public function developerGetData()
    {
        $developers = DB::table('dictionaries')->where('dict_type_id', '8')->paginate(15);
        return view('pages/deviceDeveloperPage', ['developers' => $developers]);
    }

    public function addressGetData()
    {
        $addresses = DB::table('adresses')
        ->join('devices','devices.id' ,'=' ,'adresses.device_id')
        ->join('dictionaries','dictionaries.id' ,'=', 'adresses.region_id')
        ->select(
            'adresses.*',
            'devices.serial_number',
            'dictionaries.name as region_name'
        )
        ->paginate(15);
        return view('pages/adressPage', ['addresses' => $addresses]);
    }

    public function errorsGetData(request $request)
    {
        $errors = DB::table('dictionaries')
        ->where('dict_type_id','=',3)
        ->get();
        if ($request->ajax()) 
               return response()
               ->json($errors);


        return view('pages/errorPage', ['errors' => $errors]);
    }

    public function SNMPbranchesGetData()
    {
        $branches = DB::table('s_n_m_p_branches')->paginate(15);
        return view('pages/branchesPage', ['branches' => $branches]);
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
