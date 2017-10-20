<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;



class FormDeisController extends Controller
{


    public function index () {
        $returnData['inputs'] = json_decode(json_encode(config('collection.deis_form_inputs')));
        $returnData['labels'] = config('collection.deis_form_table_labels');
        return view('formulario.index', $returnData);
    }


    public function create () {
    }


    public function store (Request $request) {
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
