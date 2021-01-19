<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\Device_boundarie;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class WorkspaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {    
        $w_cal_datas = DB::table('device_boundaries')
        ->join('dictionaries as group_table', function ($join) {
            $join->on('device_boundaries.bound_group_id','=','group_table.id')
                ->where('group_table.dict_type_id','=',1);
        })
        ->join('dictionaries as region_table', function ($join) {
            $join->on('device_boundaries.region_id','=','region_table.id')
                ->where('region_table.dict_type_id','=',2);
        })
            ->select('device_boundaries.*',  'group_table.name as group_name','region_table.name as region_name')
            ->paginate(15);
           // dd($w_cal_datas);
        return view('work', ['w_cal_datas' => $w_cal_datas]);
       
    }

    public function findSerialNumber(Request $request)
    {
        $value = $request->input('value');
        $serialNumber=Device_boundarie::where('device_bound_neme','=', '%'.$value.'%')->paginate(15);
        return view('work',['serialNumber'=>$serialNumber]);
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
