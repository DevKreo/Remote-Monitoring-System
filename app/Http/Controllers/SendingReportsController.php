<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SendingReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        $sending_reports = DB::table('sending_reports')
            ->join('report_templates','sending_reports.reports_template_id' ,'=' ,'report_templates.id')
            ->join('dictionaries as regularity','regularity.id' ,'=', 'sending_reports.reg_id')
            ->join('dictionaries as report_periods','report_periods.id' ,'=', 'sending_reports.report_periods_id')
            ->select(
                'sending_reports.*',
                'report_templates.template_name',
                'regularity.name as regularity_name',
                'report_periods.name as report_period_name'
            )
            ->paginate(15);

            if ($request->ajax()) 
               return response()
               ->json($sending_reports);

        return view('pages/ConsReportPage', ['sending_reports' => $sending_reports]);
    }

    public function Number(Request $request)
    {
        $num_of_records = DB::table('sending_reports')->get()->count();
        return  $num_of_records;
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
