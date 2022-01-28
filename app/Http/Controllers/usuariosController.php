<?php

namespace App\Http\Controllers;
//use app\Models\usuarios;
use App\Models\usuarios;
use Illuminate\Http\Request;

class usuariosController extends Controller
{
    public function showList ()
    {
     $usuario = Usuarios::all();
     //return json_encode($usuario);
     return view('Usuario-list');
    }
    
    public function Form(){
        return view('newUsuario');
    }

    public function saveUsuarios(Request $request)
    {


        try {
            if($request->email) {

                usuarios::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'message' => $request->message
                ]);

                $details = [
                    'title' => 'Nombre: '. $request->name, 
                    'body' => 'Email: '. $request->email,
                    'section' => 'Mensaje: '. $request->message,
                  
                     
                ];

                //Mail::to("aliagajoseignacio@gmail.com")->send(new SendData($details));

                
                return 'Email ENVIADO';
            }

        } catch (\ErrorException $e) {
            return json_encode(['status' => 'faild', 'message' => $e->getMessage()]);
        }
    }
}
