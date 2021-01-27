<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
    }


    public function userGetData(request $request)
    {
        $users = DB::table('users')
            ->join('roles', 'roles.id', '=', 'users.roles_id')
            ->join('dictionaries', function ($join) {
                $join->on('users.device_group_ip','=','dictionaries.id')
                    ->where('dictionaries.dict_type_id','=',10);
            })
            ->select('users.*', 'roles.role_name', 'dictionaries.name as d_name')
            ->get();
            
            if ($request->ajax()) 
               return response()
               ->json($users);

        return view('pages/usersPage', ['users' => $users]);
    }

    public function rolesGetData()
    {
        $roles = DB::table('roles')
            ->paginate(15);
        return view('pages/usersPage', ['roles' => $roles]);
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
