<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UsuariosModel;
use Auth;
use App\Http\Requests\ValidaRequestusuariocliente;

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

class LoginController extends Controller
{
    
    public function validar(Request $request){
       
        
        $request->validate([
                
            'captcha' => 'required|captcha'
        ]);
        $correo = $request->input('email');
        $pass = $request->input('pass');

        $consulta = UsuariosModel::Where('email', '=', $correo)
            ->where('pass', '=', $pass)
            ->get();
        
            if(count($consulta)==0){
                return view('templates.iniciar_sesion');
            }
            else{
                // -------------------------------crea las sessiones
                $request-> session()->put('session_id', $consulta[0]->id_usuario);
                $request-> session()->put('session_name', $consulta[0]->nombre);
                $request-> session()->put('session_tipo', $consulta[0]->tipo_usuario);
            
                //-------------------consulta las sessiones
                $session_id =$request->session()->get('session_id');
                $session_name =$request->session()->get('session_name');
                $session_tipo =$request->session()->get('session_tipo');

                if($session_tipo == 1){ return view('templates.iniciar_sesion'); 
                }
                else{
                      if($session_tipo == 2){  
                                    
                     
                        return view('templates.iniciar_sesion')
                          ->with(['usus'=>$usus])
                          ;
                    
                    }
                        else{
                           return view('templates.iniciar_sesion');
                        
                    }
                }
             }
             

        }
        public function logout(Request $request){
            //----------------destruye las session
            $request-> session()->forget('session_id');
            $request-> session()->forget('session_name');
            $request-> session()->forget('session_tipo');

            return view('templates.iniciar_sesion');
        }
    
        public function reloadCaptcha() {
            return response()->json(['captcha' => captcha_img()]);
        }




        //-------------
        public function loo(Request $request)
        {
            

                            $user = \DB::table('tb_usuario')->select('email', 'pass')->where('email', $request->email)->get(); 
                        
                            if(count($user)){  
                            if($user[0]->pass === $request->pass){
                                return 'Ya estas Logeado' ;
                            }else{
                            
                            return 'contraseña incorrecta';
                            }
                            }else{
                                return 'no se encontró el registro';
                                }

        }
        public function loo2(Request $request){
            
        $nombre = $request->input('nombre');
        $email = $request->input('email');
        $pass = $request->input('pass');
        $app = $request->input('app');
        $apm = $request->input('apm');
        $tel = $request->input('tel');
        $matricula = $request->input('matricula');
        $fn = $request->input('$fn');
        $aviso = $request->input('aviso');
        $img = $request->input('img');

        \DB::table('tb_usuario')->insert([
            'nombre' =>   $nombre,
            'email' =>  $email ,
            'pass'=> $pass,
            'app' =>$app,
            'apm' =>$apm,
            'tel' =>$tel,
            'matricula' => $matricula,
            'fn' =>$fn,
            'aviso' =>$aviso,
            'img' =>$img
             ]);
        }


        public function get01g(){
            $consulta = UsuariosModel::all();
            return response() -> json($consulta, 200);
        
        }


     public function editar(Request $request,$id_usuario){
        $this->validate($request,[
            'nombre'=>'required',
            'email'=>'required',
            'pass'=>'required',
            'app'=>'required',
            'apm'=>'required',
            'tel'=>'required',
            'matricula'=>'required',
            'fn'=>'required',
            'aviso'=>'required',
            'img'=>'required',
        ]);
        $input_data=$request->all();
        \DB::table('tb_usuario')->where('id_usuario',$id_usuario)->update(['nombre'=>$input_data['nombre'],
            'email'=>$input_data['email'],
            'pass'=>$input_data['pass'],
            'app'=>$input_data['app'],
            'apm'=>$input_data['apm'],
            'tel'=>$input_data['tel'],
            'matricula'=>$input_data['matricula'],
            'fn'=>$input_data['fn'],
            'aviso'=>$input_data['aviso'],
            'img'=>$input_data['img']]);
        return back()->with('message','perfil actualizado con exito!');
        
    
        }
    
    public function eliminar(UsuariosModel $nombre){
        $nombre -> delete();
        return response() -> json(null, 204);
    }
        
  

     
}


