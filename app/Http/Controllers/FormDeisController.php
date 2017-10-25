<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;



class FormDeisController extends Controller {
    public function __construct () {
        $this->middleware('auth');
    }


    public function index (Request $request) {
        $returnData['inputs'] = json_decode(json_encode(config('collection.deis_form_inputs')));
        $returnData['labels'] = config('collection.deis_form_table_labels');
        $returnData['instructions'] = config('collection.deis_form_instructions');
        $returnData['nav_tab_form_deis'] = config('collections.nav_tab_form_deis');
        $returnData['deis_form_table_options'] = config('collections.deis_form_table_options');
        if ($request->wantsJson()) {
            return response()->json($returnData);
        }
        #$returnData['inputs'] = json_decode(json_encode(config('collection.deis_form_inputs')));
        #$returnData['labels'] = config('collection.deis_form_table_labels');
        #$returnData['instructions'] = config('collection.deis_form_instructions');
        return view('formulario.index', $returnData);
    }


    public function create () {
    }


    public function store (Request $request) {
        return $request->all();

    }


    public function show ($id) {
    }


    public function edit ($id) {
    }


    public function update (Request $request, $id) {
    }


    public function destroy ($id) {
    }
}
