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
        $this->middleware('auth', ['except' => ['testapi']]);
    }


    public function testapi (Request $request) {

        #https://api.minsal.cl
        $url = 'https://api.minsal.cl/oauth/token';
        $data = array('grant_type' => 'client_credentials');

        #$client_id = "<<Client ID entregado>>";
        #$client_secret = "<<Secret entregado>>";
        #$str_base64 = base64_encode($client_id.':'.$client_secret);
        $str_base64 = 'OVRTZzMwMDBVaVBvVkE4NVZqQ3N0MjFuam5EUFExNFM6UkpZRm1ITzB4SUNKNVQ2Zg==';

        $options = array(
           'http' => array(
              'header'  => "Content-type: application/x-www-form-urlencoded\r\n".
                 "Authorization: Basic ".$str_base64,
              'method'  => 'POST',
              'content' => http_build_query($data)
           ),
           "ssl"=>array(
              "verify_peer"=>false,
              "verify_peer_name"=>false,
           )
        );

        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        if ($result === FALSE) {
            # error
        }
        $authObj = json_decode($result);
        $access_token = $authObj->access_token;
        // echo "TOKEN ".$access_token;
        #return $access_token;

        ######################################

        $urlApi = 'https://api.minsal.cl/v2/apiconsultarpersona/personas/consultar/basico/consultaPersonaBasicoPorRun?';
        #$token = getToken();
        $token = $access_token;


        /*
        $data = array(
           'runPersona' => $_POST['rutPrestador'],
           'dvPersona' => $_POST['dvPrestador']
        );
        */

        $data = array(
           'runPersona' => '18002555',
           'dvPersona' => '3'
        );

        $options = array(
           'http' => array(
              'header'  => "Authorization: Bearer ".$token,
              'method'  => 'GET'
           ),
           "ssl"=>array(
              "verify_peer"=>false,
              "verify_peer_name"=>false,
           )
        );

        $authorization = "Authorization: Bearer ".$token;


        $url = $urlApi.http_build_query($data);
        dd($url);
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        #curl_setopt($curl, CURLOPT_POST, 0);

        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($curl, CURLOPT_HTTPHEADER, array($authorization));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        #curl_setopt($curl, CURLOPT_POSTFIELDS,$post);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
        $result = curl_exec($curl);

        #curl_setopt($curl, CURLOPT_HTTPGET, TRUE);
        #curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        #curl_setopt($curl, CURLOPT_HEADER, true);

        $data = curl_exec($curl);
        dd($data);
        curl_close($curl);


        $context = stream_context_create($options);
        $urlApi = $urlApi.http_build_query($data);
        $result = file_get_contents($urlApi, false, $context);
        dd($result);

        //MUESTRA JSON COMPLETO
        echo "<br><br><b>JSON</b>:<br><br>".$result."<br><br><br><br><br><br>";
        //DECODIFICACIÓN DE JSON
        var_dump(json_decode($result)); die();
        $obj = json_decode($result);
        print $obj->{'nombresPersona'}." ";
        print $obj->{'primerApellidoPersona'}." "; // 12345
        print $obj->{'segundoApellidoPersona'};
        echo "<br><br><br>";
        exit;


    }

    public function index (Request $request) {
        return $this->create($request);
        $returnData=[];
        return view('formulario.index', $returnData);
    }

    public function buscar_por_run (Request $request){
        $run_madre = isset($request->run_madre)?$request->run_madre:null;
        if ($run_madre) {
            $formularios = FormDeis::where('run_madre', 'ilike', $run_madre.'%')->get();
            #$formularios = FormDeis::where('run_madre', '=', $run_madre)->get();
            return response()->json(['formularios'=>$formularios]);
        }else{
            return response()->json(['error'=>['002' => 'El run no existe']]);
        }
    }
    public function buscar_por_correlativo (Request $request){
        $correlativo = isset($request->n_correlativo_interno)?$request->n_correlativo_interno:null;
        if ($correlativo) {
            #$formularios = FormDeis::where('n_correlativo_interno', '=', $correlativo)->get();
            $formularios = FormDeis::where('n_correlativo_interno', 'ilike', $correlativo.'%')->get();
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


            foreach ($formData as $key => $d){
                if ($d) {
                    if (strpos($key, 'fecha') > -1) {
                        $f = explode('-',$d);
                        $d = $f[2].'-'.$f[1].'-'.$f[0];
                    }
                    $fd[$key] = $d;
                }
            }


            return $fd;

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
