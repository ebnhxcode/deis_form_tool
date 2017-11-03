<?php

namespace App\Http\Controllers;

use App\FormDeisInput;
use Illuminate\Http\Request;

use App\Http\Requests;

class InputController extends Controller
{

    public function __construct () {
        $this->middleware('auth');
    }
    private $returnData = [];
    public function index (Request $request) {
        $this->returnData['tables'] = config('collection.tables');
        if ( $request->wantsJson() ) {
            $json = FormDeisInput::where('table_name', $table_name='form_deis_inputs')->orderby('id_input','asc')->get();
            $this->returnData['json'] = $json;
            return response()->json($this->returnData);
        }

        return view('input.index', $this->returnData);
    }

    public function create (Request $request) {
        $this->returnData['tables'] = config('collection.tables');
        if ( $request->wantsJson() ) {
            return response()->json($this->returnData);
        }

        return view('input.create', $this->returnData);
    }

    public function addLabelToInput (Request $request) {
        $this->validate($request, [
           'json_attr' => 'required',
           'table_name_attr' => 'required',
        ]);

        $arr_txt = '';
        $created_labels = [];

        $arr_txt = $request->json_attr;
        $table_name = isset($request->table_name_attr)?$request->table_name_attr:null;
        $arr_txt = eval($arr_txt);

        foreach ($arr_txt as $key => $field) {
            $fdi = FormDeisInput::where('id', $key)->where('table_name', $table_name)->first();


            if ($fdi) {
                if (isset($field['text'])) {
                    $fdi->label = $field['text'];
                }
                if (isset($field['tag'])) {
                    $fdi->tag = $field['tag'];
                }
                if (isset($field['subtag'])) {
                    $fdi->subtag = $field['subtag'];
                }
                if (isset($field['empty_column'])) {
                    $fdi->empty_column = $field['empty_column'];
                }
                if (isset($field['order'])) {
                    $fdi->order = $field['order'];
                }
                $fdi->save();
            }

        }
        $created_labels = FormDeisInput::where('table_name', $table_name)->get();
        return response()->json(['created_labels' => $created_labels]);
    }

    public function store (Request $request) {
        $this->validate($request, [
            'json' => 'required',
            'table_name' => 'required',
        ]);

        $arr_txt = '';
        $created_inputs = [];

        $arr_txt = $request->json;
        $table_name = isset($request->table_name)?$request->table_name:null;
        $arr_txt = eval($arr_txt);

        foreach ($arr_txt as $key => $field) {
            $fdi = new FormDeisInput();
            $fdi->table_name = $table_name;
            if (isset($field['directivas'])) {
                $fdi->type = isset($field['directivas']['type'])?$field['directivas']['type']:'';
                $fdi->id = isset($field['directivas']['id'])?$field['directivas']['id']:'';
                $fdi->name = isset($field['directivas']['name'])?$field['directivas']['name']:'';
                $fdi->value = isset($field['directivas']['value'])?$field['directivas']['value']:'';
                $fdi->max_length = isset($field['directivas']['max_length'])?$field['directivas']['max_length']:'';
                $fdi->placeholder = isset($field['directivas']['placeholder'])?$field['directivas']['placeholder']:'';
                $fdi->required = isset($field['directivas']['required'])?$field['directivas']['required']:'';
                $fdi->class = isset($field['directivas']['class'])?$field['directivas']['class']:'';
                $fdi->style = isset($field['directivas']['style'])?$field['directivas']['style']:'';
            }
            if (isset($field['bloque'])) {
                $fdi->bloque = isset($field['bloque']['nombre'])?$field['bloque']['nombre']:'';
            }
            if (isset($field['seccion'])) {
                $fdi->seccion = isset($field['seccion']['nombre'])?$field['seccion']['nombre']:'';
            }
            if (isset($field['class_custom'])) {
                $fdi->class_custom = isset($field['class_custom']['class'])?$field['class_custom']['class']:'';
            }

            $fdi->save();
        }
        $created_inputs = FormDeisInput::where('table_name', $table_name)->get();
        return response()->json(['created_inputs' => $created_inputs]);
    }

    public function show ($id) {
        /*
        $json = FormDeisInput::where('table_name', $table_name='form_deis_inputs')->orderby('id_input','asc')->get();
        foreach ($json as $key => $j) {
            $j->order_layout_form = $j->id_input;
            $j->save();
        }
        */
    }

    public function edit ($id) {
    }

    public function update (Request $request, $id) {
        $input = FormDeisInput::find($id);
        $input->update($request->all());
        return response()->json(['input' => $input]);
    }

    public function destroy ($id) {
    }
}
