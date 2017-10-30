<?php

namespace App\Http\Controllers;

use App\FormDeis;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\FormDeisInput;


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
        #$returnData['inputs'] = json_decode(json_encode(config('collection.deis_form_inputs')));
        #$returnData['labels'] = config('collection.deis_form_table_labels');
        $returnData['inputs'] = FormDeisInput::where('table_name', $table_name='form_deis_inputs')->orderby('order_layout_form','asc')->get();
        $returnData['instructions'] = config('collection.deis_form_instructions');
        $returnData['estades_gestacionales'] = config('collections.estades_gestacionales');
        $returnData['nav_tab_form_deis'] = config('collections.nav_tab_form_deis');
        $returnData['deis_form_table_options'] = config('collections.deis_form_table_options');
        if ($request->wantsJson()) {
            $this->fdc = new FormDeis();
            $this->fdc->save();
            $returnData['fdc'] = $this->fdc;
            return response()->json($returnData);
        }
        #$returnData['inputs'] = json_decode(json_encode(config('collection.deis_form_inputs')));
        #$returnData['labels'] = config('collection.deis_form_table_labels');
        #$returnData['instructions'] = config('collection.deis_form_instructions');
        return view('formulario.create', $returnData);
    }


    public function store (Request $request) {

        if ($request->wantsJson()) {
            $formData = $request->all();
            $fd = [];

            $form_deis = FormDeis::find($formData['_id_formulario']);
            $formData['_id_formulario'] = null;

            foreach ($formData as $key => $d)
                if ($d) $fd[$key] = $d;



            #$result = FormDeis::create($fd);
            $result = $form_deis->update($fd);

            return response()->json(['result' => $result]);
        }


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

        $formData = $request->all();
        return $formData;

        foreach ($formData as $key => $d)
            if ($d) $fd[$key] = $d;

        return $fd;

        $form_deis = FormDeis::find($id);
        $result = $form_deis->update($fd);

        return $result;
    }


    public function destroy ($id) {
    }
}
