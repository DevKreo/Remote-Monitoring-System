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
        return view('pages/regions', ['regions' => $regions]);
    }

    public function deviceTypeGetData()
    {
        $device_types = DB::table('dictionaries')->where('dict_type_id', '9')->paginate(15);
        return view('pages/typeDevice', ['device_types' => $device_types]);
    }

    public function violationTypeGetData()
    {
        $violation_types = DB::table('violation_types')->paginate(15);
        return view('pages/typeViolation', ['violation_types' => $violation_types]);
    }
    
    public function developerGetData()
    {
        $developers = DB::table('dictionaries')->where('dict_type_id', '8')->paginate(15);
        return view('pages/deviceDeveloper', ['developers' => $developers]);
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
        return view('pages/adress', ['addresses' => $addresses]);
    }

    public function errorsGetData()
    {
        $errors = DB::table('errors')
        ->join('dictionaries','dictionaries.id' ,'=', 'errors.error_type_id')
        ->select(
            'errors.*',
            'dictionaries.name as error_type_name'
        )
        ->paginate(15);
        return view('pages/error', ['errors' => $errors]);
    }

    public function SNMPbranchesGetData()
    {
        $branches = DB::table('s_n_m_p_branches')->paginate(15);
        return view('pages/branches', ['branches' => $branches]);
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
