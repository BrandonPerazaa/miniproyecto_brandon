<?php
namespace App\Models;
use CodeIgniter\Model;
class DatosModel extends Model{
  public function obtenerInformacion($data){
    $gModel = $this->db->table('persona');
    $gModel-> where($data);
    return $gModel->get()->getResultArray();
    
  }
  
  public function listarTodo(){
    $gModel = $this->db->query("SELECT * FROM persona");
    return $gModel->getResult();
    
  }

public function insertarTodo(){
       $gmodel = $this->db->tablet('persona');
       $gmodel->insert($data);
       return $this->db->insertID();

}

public function actualizar($data,$id){
       $gmodel = $this->db->table('persona');
       $gmodel->set($data);
       $gmodel->where($id);
       return $gmodel->update();
   
  }
      
               public function eliminar($id){
               $gmodel = $this->db->table('persona');
               $gmodel->where($id);
               return $gmodel->delete();
          
         }

}
