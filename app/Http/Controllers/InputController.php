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
        #$this->returnData[''];


        return view('input.create', $this->returnData);
    }

    public function addLabelToInput (Request $request) {
        $arr_txt = '';
        $created_labels = [];
        if (isset($request->textarea_attr) && $request->textarea_attr) {
            $arr_txt = $request->textarea_attr;
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

        return $created_labels;
    }

    public function store (Request $request) {
        $arr_txt = '';
        $created_inputs = [];
        if (isset($request->textarea) && $request->textarea) {
            $arr_txt = $request->textarea;
        }
        $arr_txt = eval($arr_txt);

        foreach ($arr_txt as $key => $field) {
            $fdi = new FormDeisInput();

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
            array_push($created_inputs, $fdi);
        }


        return $created_inputs;

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
