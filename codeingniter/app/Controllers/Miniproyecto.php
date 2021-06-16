<?php
namespace App\Controllers;
use App\Models\GeneralModel;

class General extends BaseController{

           public funtion index(){

                  $gModel = new GeneralModel();
                  $mensaje = sesion('mensaje');
                   $datos = $gmodel->listarTodo();
                  $data = ["datos" => $datos,
"mensaje" => $mensaje 

];
return view('listado',$data);

}

public funtion obtenerDatos($id){
             $gmodel = new GeneralModel();
             $data = ["id" => $id];
             $respuesta = $gmodel->obtenerInformacion($data);  

              $datos = [ "datos" => $respuesta];
             Return view('actualizar' ,$datos);

}

public funtion insertar(){
           $gmodel = new GeneralModel();
           $data = [
                    "nombre" => $_POST['nombre'],
                     "a_paterno" => $_POST['apaterno'],
                     "a_materno" => $_POST['amaterno'],
			};
			$respuesta = $gModel->insertar($data);
			
			if ($respuesta > 0){
				return redirect()->to(base_url('/index.php'))->with('mensaje','0');
			}else{
				return redirect()->to(base_url('/index.php'))->with('mensaje','1');
			}
			
	}
			
			
			
	public function actualizar(){
	
		$gModel = new GeneralModel();
		$data = [
			"nombre" => $_POST['nombre'],
			"a_paterno" => $_POST['apaterno'],
			"a_mmaterno" => $_POST['amaterno'],
			
		];
		
		$id = ["id" => $_POST['id']];
		$respuesta = $gModel ->actualizar($dara,$id);
		
		if ($respuesta){
			return redirect()->to(base_url('/index.php'))->with('mensaje','2');
		}else{
			return redirect()->to(base_url('/index.php'))->with('mensaje','3,);
	               }
}
         
public funtion eliminar ($idPersona){
           $gmodel = new GeneralModel();
           $id = ["id" => $idPersonal];
            $respuesta = $gmodel->eliminar($id);

           if($respuesta){
                  return redirect()->to(base_url('/index.php'))->with('mensaje', '4');
}else{
           return redirect()->to(base_url('/index.php'))->with('mensaje', '5');
         }
    
    }

}
