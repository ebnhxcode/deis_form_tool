<?php

namespace App\Http\Controllers;

use App\FormDeis;
use App\Pais;
use App\Establecimiento;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\FormDeisInput;


class FormDeisController extends Controller {

    private $fdc;
    public function __construct () {
        $this->middleware('auth');
    }


    public function testapi (Request $request) {





    }

    public function index (Request $request) {
        return $this->create($request);
        $returnData=[];
        return view('formulario.index', $returnData);
    }

    public function buscar_por_rut (Request $request){
        $run_madre = isset($request->run_madre)?$request->run_madre:null;
        #$formularios = FormDeis::where('run_madre', 'ilike', '%'.$run_madre.'%')->get();
        if ($run_madre) {
            $formularios = FormDeis::where('run_madre', '=', $run_madre)->get();
            return response()->json(['formularios'=>$formularios]);
        }else{
            return response()->json(['error'=>['002' => 'El run no existe']]);
        }
    }
    public function buscar_por_correlativo (Request $request){
        $correlativo = isset($request->n_correlativo_interno)?$request->n_correlativo_interno:null;
        if ($correlativo) {
            $formularios = FormDeis::where('n_correlativo_interno', '=', $correlativo)->get();
            return response()->json(['formularios'=>$formularios]);
        }else{
            return response()->json(['error'=>['002' => 'El correlativo no existe']]);
        }
    }

    public function inputs_formulario (Request $request) {
        if ($request->wantsJson()) {
            $returnData['inputs'] = FormDeisInput::where('table_name', $table_name = 'form_deis_inputs')->orderby('order_layout_form', 'asc')->get();
            $returnData['estades_gestacionales'] = config('collections.estades_gestacionales');
            $returnData['nav_tab_form_deis'] = config('collections.nav_tab_form_deis');
            $returnData['deis_form_table_options'] = config('collections.deis_form_table_options');
            $returnData['deis_form_table_options'] += ['pais_origen' => Pais::pluck('nombre_pais', 'id_pais')];
            $returnData['deis_form_table_options'] += ['lugar_atencion_parto' =>
               Establecimiento::select(
                  DB::raw("CONCAT(id_establecimiento,' - ',nombre_establecimiento) AS nombre_establecimiento"),'id_establecimiento')
                  ->pluck('nombre_establecimiento', 'id_establecimiento')];

            $returnData['deis_form_table_options'] += ['lugar_control_prenatal' =>
               Establecimiento::select(
                  DB::raw("CONCAT(id_establecimiento,' - ',nombre_establecimiento) AS nombre_establecimiento"),'id_establecimiento')
                  ->pluck('nombre_establecimiento', 'id_establecimiento')];


            return response()->json($returnData);
        }
    }

    public function datos_formulario (Request $request) {
        if ($request->wantsJson()) {
            $this->fdc = new FormDeis();
            $this->fdc->save();
            $this->fdc = FormDeis::find($this->fdc->id);
            $this->fdc->n_correlativo_interno = $this->fdc->id;
            $returnData['fdc'] = $this->fdc;
            $returnData['inputs'] = FormDeisInput::where('table_name', $table_name = 'form_deis_inputs')->orderby('order_layout_form', 'asc')->get();
            $returnData['estades_gestacionales'] = config('collections.estades_gestacionales');
            $returnData['nav_tab_form_deis'] = config('collections.nav_tab_form_deis');
            $returnData['deis_form_table_options'] = config('collections.deis_form_table_options');
            $returnData['deis_form_table_options'] += ['pais_origen' => Pais::pluck('nombre_pais', 'id_pais')];
            $returnData['deis_form_table_options'] += ['lugar_atencion_parto' => Establecimiento::select(
               DB::raw("CONCAT(id_establecimiento,' - ',nombre_establecimiento) AS nombre_establecimiento"),'id_establecimiento')
               ->pluck('nombre_establecimiento', 'id_establecimiento')];
            $returnData['deis_form_table_options'] += ['lugar_control_prenatal' =>
               Establecimiento::select(
                  DB::raw("CONCAT(id_establecimiento,' - ',nombre_establecimiento) AS nombre_establecimiento"),'id_establecimiento')
                  ->pluck('nombre_establecimiento', 'id_establecimiento')];
            $returnData['deis_form_table_options'] += ['anos_Estudio' => [''=>'Seleccione nivel de escolaridad']];
            return response()->json($returnData);
        }
    }

    public function create (Request $request) {
        $returnData['instructions'] = config('collection.deis_form_instructions');

        if ($request->wantsJson()) {
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

            return response()->json(['result' => $result, 'data' => $fd]);
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
