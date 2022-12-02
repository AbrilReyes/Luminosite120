<?php

namespace App\Http\Controllers;

use App\DireccionesModel;
use App\UsuariosModel;
use App\ProductosModel;
use App\Http\Requests\ValidarRequest;
use App\Http\Requests\ValidarProductosRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\VentasModel;
use Illuminate\Http\Request;
use App\MapasModel;
use Mapper;
use Cornford\Googlmapper\MapperServiceProvider;

class SistemController extends Controller
{
    

    public function home()
    {
        return  view("layouts.index");
    }
    public function aviso()
    {
        return  view("templates.aviso");
    }
    public function registrarse()
    {
        return  view("templates.registrarse");
    }

    public function iniciar_sesion()
    {
        return  view("templates.iniciar_sesion");
    }

    public function catalogo(Request $request, $buscar=null)
    {
        $usus = ProductosModel::paginate(9);
        
        $orders = ProductosModel::Buscar($request->get('buscar'))
        ->orderBy('nombre');
        return  view("templates.catalogo")
        ->with(['usus' => $usus])
        ->with(['orders' => $orders]);
    }

    public function usuarios()
    {
        $usus = UsuariosModel::all();
        return  view("templates.usuarios")
        ->with(['usus' => $usus]);
    }

    public function guardar(ValidarRequest $request){
     
        $file = $request ->file('img');
        $img = $file -> getClientOriginalName();
        // $img = $request -> file('img')->getClientOriginalName();
        
        \Storage::disk('local')->put($img, \File::get($file));
   
         $usu = UsuariosModel::create(array(
            'img' => $img,
            'nombre'     =>$request->input('nombre'),
            'app'        =>$request->input('app'),
            'apm'        =>$request->input('apm'),
            'email'      =>$request->input('email'),
            'pass'       =>$request->input('pass'),
            'tel'        =>$request->input('tel'),
            'matricula'  =>$request->input('matricula'),
            'fn'         =>$request->input('fn'),
            'aviso' =>$request->input('aviso'),
            'tipo_usuario'      => 3
         ));
    
        return redirect()->route('iniciar_sesion');

    }

    public function modificar(UsuariosModel $id){
        return view("templates.editar")
            ->with(['usu' => $id]);
    }
    public function salvar(UsuariosModel $id, Request $request){

             $id->update($request->only('nombre',  'app', 'apm','email', 'pass', 'tel','fn','tipo_usuario','aviso'));

            return redirect()->route('usuarios');
    }

    public function borrar(UsuariosModel $id){
        $id->delete();
        return redirect()->route('usuarios');
    }



    public function guardarProductos(ValidarProductosRequest $request){

        
        $file = $request->file('img');
        
        $img = $file->getClientOriginalName();
        // $img = $request -> file('img')->getClientOriginalName();
    
        \Storage::disk('local')->put($img, \File::get($file));
    
         $usu = ProductosModel::create(array(
            'img' => $img,
            'nombre_producto'=>$request->input('nombre_producto'),
            'no_existencias' =>$request->input('no_existencias'),
            'precio' =>        $request->input('precio'),
            'descripcion' =>   $request->input('descripcion'),
            'medida' =>        $request->input('medida'),
            'precio_oferta' => $request->input('precio_oferta')
            
         ));
    
        return redirect()->route('productos');

        }

    public function registrarProductos()
    {
        return  view("templates.registrar_productos");
    }

    public function modificarProductos(ProductosModel $id){
        return view("templates.editarProductos")
            ->with(['usu' => $id]);
    }
    public function salvarProductos(ProductosModel $id, Request $request){
        $id->update($request->only('nombre_producto','no_existencias', 'precio','descripcion','medida','precio_oferta'));


            return redirect()->route('productos');
    }

    public function borrarProducto(ProductosModel $id){
        $id->delete();
        return redirect()->route('productos');
    }



    public function productos()
    {
        $usus = ProductosModel::all();
        return  view("templates.productos")
        ->with(['usus' => $usus]);
    }

    public function carrito()
    {
        $usus = ProductosModel::all();
        return view('templates.carrito')
        ->with(['usus' => $usus]);
    }

    public function addCarrito($id=null)
    {
        $usus = ProductosModel::all();
        return view('templates.carrito')
        ->with('id', $id)
        ->with(['usus' => $usus]);
    }

    public function detalleProducto($id=null)
    {
        $usus = ProductosModel::find($id);
        return view('templates.detalle_producto')
        ->with('id', $id)
        ->with(['usu' => $usus]);
    }

    public function buscar(Request $request)
    {
        
        $query = ProductosModel::Buscar($request->get('buscar'))->paginate(3);
        // dd($query);
        return view("templates.catalogo")
        ->with(['usus' => $query]);

    }
    public function reporte()
    {
        
        return  view("templates.reporte_ventas");
}
    public function detalleUsuario()
    {
        $usus = UsuariosModel::all();
        return view('templates.detalle_usuario')
        ->with(['usus' => $usus]);
    }

    public function mapa(){
        Mapper::map(19.283295, -99.660684);
        return view('templates.mapa');
    }



public function registrarDireccion($id=null,$cantidad=null)
{
    $usus = UsuariosModel::find($id);
    $direccion = DireccionesModel::find($id);
    $ventas = VentasModel::all();
    $comps = UsuariosModel::all();
    $todos = DireccionesModel::all();

    $usu = VentasModel::create(array(
        'monto_total'    => $cantidad,
        'direcciones_id' => $direccion->clientes_id,
        'clientes_id'    => $id,
     ));

    return view('templates.ventas')
    ->with(['usus' => $ventas])
    ->with(['comps' => $comps])
    ->with(['todos' => $todos]);
}
public function paypal()
    {
    
        return  view("templates.paypal");
    }


    
}
