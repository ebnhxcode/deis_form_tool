<?php

namespace App\Http\Controllers;

use App\FormDeisInput;
use Illuminate\Http\Request;

use App\Http\Requests;

class InputController extends Controller
{
    private $returnData = [];
    public function index (Request $request) {



    }

    public function create (Request $request) {
        $this->returnData['tables'] = config('collection.tables');
        if ( $request->wantsJson() ) {
            return response()->json($this->returnData);
        }


        return view('input.create', $this->returnData);
    }

    public function addLabelToInput (Request $request) {
        $arr_txt = '';
        $created_labels = [];
        if (isset($request->json_attr) && $request->json_attr) {
            $arr_txt = $request->json_attr;
        }
        $arr_txt = eval($arr_txt);
        foreach ($arr_txt as $key => $field) {
            $fdi = FormDeisInput::where('id', $key)->first();

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
            }

            $fdi->save();
            array_push($created_labels, $fdi);
            return $fdi;
        }

        #Buscar por base de datos segun el input del select por el nombre de la tabla
        return $created_labels;
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
