<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;

class AdminController extends Controller {


    public function __construct() {
        $this->middleware('auth');
    }

    public function mant_usuarios (Request $request) {


        return view ('admin.mant_usuarios');
    }

    public function mant_usuarios_data (Request $request) {
        if ($request->wantsJson()) {
            $returnData['users'] = User::with('role')->get();

            return response()->json($returnData);
        }
    }

    public function guardar_usuario (Request $request) {

        $user_parameters = $request->all();
        $user = User::find($user_parameters['id']);
        $user->update($user_parameters);
        return response()->json(['rc' => '0', 'rd' => 'Success.']);

    }



    public function index()
    {
        //
    }

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
