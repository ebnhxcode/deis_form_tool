<?php

namespace App\Http\Controllers;

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

    public function store (Request $request) {
        $arr_txt = '';
        if (isset($request->textarea) && $request->textarea) {
            $arr_txt = $request->textarea;
        }
        $arr_txt = eval($arr_txt);

        foreach ($arr_txt as $key => $field) {





            return $field;



        }

        return ;

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
