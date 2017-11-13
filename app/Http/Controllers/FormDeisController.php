<?php

namespace App\Http\Controllers;

use App\FormDeis;
use App\FormDeisLogSeguimientoVih;
use App\Pais;
use App\Establecimiento;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\FormDeisInput;
use Illuminate\Support\Facades\Hash;


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
    }

    #Busqueda de validacion para comprobar si es que el rut existe
    public function buscar_run_existente (Request $request) {
        if ($request->wantsJson()) {
            $run_madre = isset($request->run_madre)?$request->run_madre:null;
            if ($run_madre) {
                #$formularios = FormDeis::where('run_madre', 'ilike', $run_madre.'%')->get();
                $formularios = FormDeis::where('run_madre', '=', $run_madre)->get();
                if (count($formularios)>0){
                    return response()->json(['rd'=>'Existe']);
                }else{
                    return response()->json(['rd'=>'No existe']);
                }

            }else{
                return response()->json(['rd'=>'No existe']);
            }
        }
    }

    #Busqueda de un registro por el run de la madre
    public function buscar_por_run (Request $request){
        if ($request->wantsJson()) {
            $run_madre = isset($request->run_madre)?$request->run_madre:null;
            if ($run_madre) {
                #$formularios = FormDeis::where('run_madre', 'ilike', $run_madre.'%')->get();
                $formularios = FormDeis::where('run_madre', '=', $run_madre)->get();
                return response()->json(['formularios'=>$formularios]);
            }else{
                return response()->json(['error'=>['rd' => 'El run no existe']]);
            }
        }
    }

    #Busqueda de un registro por el correlativo del registro
    public function buscar_por_correlativo (Request $request){
        if ($request->wantsJson()) {
            $correlativo = isset($request->n_correlativo_interno)?$request->n_correlativo_interno:null;
            if ($correlativo) {
                #$formularios = FormDeis::where('n_correlativo_interno', 'ilike', $correlativo.'%')->get();
                $formularios = FormDeis::where('n_correlativo_interno', '=', $correlativo)->get();
                return response()->json(['formularios'=>$formularios]);
            }else{
                return response()->json(['error'=>['rd' => 'El correlativo no existe']]);
            }
        }
    }

    #Metodo que retorna la informacion necesaria para el renderizado de los inputs en el formulario de form_deis
    public function inputs_formulario (Request $request) {
        if ($request->wantsJson()) {
            #Preparacion de variables que contienen la informacion del renderizado de los inputs y de las colecciones que llenan los comboboxes
            $returnData['auth'] = auth()->user();
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
            #$returnData['deis_form_table_options'] += ['anos_estudio' => [''=>'Seleccione nivel de escolaridad']];

            return response()->json($returnData);
        }
    }

    #Metodo que retorna la informacion necesaria para el renderizado de los datos del formulario para crear un nuevo registro
    #Similar al metodo de esta clase : inputs_formulario();
    public function datos_formulario (Request $request) {
        if ($request->wantsJson()) {
            #Instancia y creacion del nuevo registro
            $this->fdc = new FormDeis();
            $this->fdc->save();
            $this->fdc = FormDeis::find($this->fdc->id);
            $this->fdc->n_correlativo_interno = $this->fdc->id;

            #Preparacion de variables que contienen la informacion del renderizado de los inputs y de las colecciones que llenan los comboboxes
            $returnData['fdc'] = $this->fdc;
            $returnData['auth'] = auth()->user();
            $returnData['inputs'] = FormDeisInput::where('table_name', $table_name = 'form_deis_inputs')->orderby('order_layout_form', 'asc')->get();
            $returnData['estades_gestacionales'] = config('collections.estades_gestacionales');
            $returnData['nav_tab_form_deis'] = config('collections.nav_tab_form_deis');
            $returnData['deis_form_table_options'] = config('collections.deis_form_table_options');
            $returnData['deis_form_table_options'] += ['pais_origen' => Pais::pluck('nombre_pais', 'id_pais')];

            $returnData['deis_form_table_options'] += ['lugar_atencion_parto' => Establecimiento::select(
               DB::raw("CONCAT(id_establecimiento,' - ',nombre_establecimiento) AS nombre_establecimiento"),'id_establecimiento')
               ->pluck('nombre_establecimiento', 'id_establecimiento')];

            $returnData['deis_form_table_options'] += ['lugar_control_prenatal' =>
               Establecimiento::select(DB::raw("CONCAT(id_establecimiento,' - ',nombre_establecimiento) AS nombre_establecimiento"),'id_establecimiento')
                  ->pluck('nombre_establecimiento', 'id_establecimiento')];

            #$returnData['deis_form_table_options'] += ['anos_estudio' => [''=>'Seleccione nivel de escolaridad']];

            return response()->json($returnData);
        }
    }

    #Funcion que marca un registro como ocupado cuando se estaá modificando
    public function marcar_registro_form_deis (Request $request) {
        if ($request->wantsJson()) {
            #Busca todos los registros en modificacion por el usuario en sesion
            $forms_deis_edited_by_user = FormDeis::where('usuario_modifica_form_deis', auth()->user()->id)->get();
            #Recorre los registros y los disponibiliza
            foreach ($forms_deis_edited_by_user as $key => $form) {
                $form->usuario_modifica_form_deis = null;
                $form->estado_form_deis = 'disponible';
                $form->save();
            }

            #Mediante el correlativo se busca el registro que el usuario ha seleccionado
            $form_deis = FormDeis::where('n_correlativo_interno', $request->n_correlativo_interno)->first();

            #Si el registro está ocupado, retorna esa informacion para que el usuario que intenta modificar el registro, no pueda hacerlo
            if ($form_deis->estado_form_deis == 'ocupado') {
                return response()->json(['fdc' => $form_deis]);
            }else{
                #Caso contrario, cambia el estado a ocupado y envia el registro
                $form_deis->usuario_modifica_form_deis = auth()->user()->id;
                $form_deis->estado_form_deis = 'ocupado';
                $form_deis->save();
                return response()->json(['fdc' => $form_deis]);
            }
        }
    }

    public function confirmar_confidencialidad_mujer_vih (Request $request) {
        if ($request->wantsJson()) {
            $password = Hash::check($request->clave_usuario, auth()->user()->password);
            #Retorna true o false
            return response()->json(['rd' => $password ]);
        }
    }


    public function create (Request $request) {
        $returnData['instructions'] = config('collection.deis_form_instructions');
        $returnData['auth'] = auth()->user();

        if (!$request->wantsJson()) {
            return view('formulario.create', $returnData);
        }else{
            return response()->json($returnData);
        }
    }

    #Guardado de informacion, para guardar y actualizar
    public function store (Request $request) {
        if ($request->wantsJson()) {
            $formData = $request->all();
            $fd = [];

            $form_deis = FormDeis::find($formData['_id_formulario']);
            $formData['_id_formulario'] = null;

            foreach ($formData as $key => $d){
                if ($d) {
                    if (strpos($key, 'fecha' && !in_array($key, ['fecha_ingreso_control_otras_especialidades_otro'])) > -1) {
                        $f = explode('-',$d);
                        $d = $f[2].'-'.$f[1].'-'.$f[0];
                    }
                    $fd[$key] = $d;
                }
            }


            #$result = FormDeis::create($fd);
            $result = $form_deis->update($fd);

            if ($form_deis->mujer_es_vih_positivo == 'Si') {
                $fd['usuario_modifica_form_deis'] = auth()->user()->id;
                FormDeisLogSeguimientoVih::create($fd);
            }


            return response()->json(['result' => $result, 'data' => $fd]);
        }
        /*
        echo '<pre>';
        print_r($formData);
        echo '</pre>';
        return;
        */
    }


    public function show ($id) { }
    public function edit ($id) { }
    public function destroy ($id) { }
    public function update (Request $request, $id) {
        /*
        $formData = $request->all();
        return $formData;

        foreach ($formData as $key => $d){
            if ($d) {
                if (strpos($key, 'fecha') > -1) {
                    $f = explode('-',$d);
                    $d = $f[2].'-'.$f[1].'-'.$f[0];
                }
                $fd[$key] = $d;
            }
        }

        $form_deis = FormDeis::find($id);
        $result = $form_deis->update($fd);

        return $result;
        */
    }

}
