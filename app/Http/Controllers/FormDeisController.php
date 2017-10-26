<?php

namespace App\Http\Controllers;

use App\FormDeis;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;


class FormDeisController extends Controller {

    private $fdc;
    public function __construct () {
        $this->middleware('auth');
    }


    public function index (Request $request) {
        $returnData=[];


        return view('formulario.index', $returnData);
    }


    public function create (Request $request) {
        #dd($this->fdc);
        $returnData['inputs'] = json_decode(json_encode(config('collection.deis_form_inputs')));
        $returnData['labels'] = config('collection.deis_form_table_labels');
        $returnData['instructions'] = config('collection.deis_form_instructions');
        $returnData['nav_tab_form_deis'] = config('collections.nav_tab_form_deis');
        $returnData['deis_form_table_options'] = config('collections.deis_form_table_options');
        $returnData['fdc'] = $this->fdc;
        if ($request->wantsJson()) {
            return response()->json($returnData);
        }
        #$returnData['inputs'] = json_decode(json_encode(config('collection.deis_form_inputs')));
        #$returnData['labels'] = config('collection.deis_form_table_labels');
        #$returnData['instructions'] = config('collection.deis_form_instructions');
        return view('formulario.create', $returnData);
    }


    public function store (Request $request) {
        $formData = $request->all();
        $fd = [];

        foreach ($formData as $key => $d)
            if ($d) $fd[$key] = $d;

        $result = FormDeis::create($fd);

        return $result;


        /*
        echo '<pre>';
        print_r($formData);
        echo '</pre>';
        return;
        */

    }


    public function show ($id) {
    }


    public function edit ($id) {
    }


    public function update (Request $request, $id) {
        return 1;
    }


    public function destroy ($id) {
    }
}
