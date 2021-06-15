<?php 

namespace App\Models;
use CodeIgniter\Model;
class UserModel extends Model {
public function agregarUser ($nombre,$email,$pais,$cuidad,$contraseña,$rol){
    $sql ="INSERT INTO registro (nombre,email,pais,cuidad,contraseña,rol) VALUES ('{$nombre}','{$email}','{$pais}','{$cuidad}','{$contraseña}','{$rol}')";
    $this->db->query($sql);
 }

 public function agregarApartamento($cuidad,$pais,$direccion,$ubicacion,$numeroHabitaciones,$imagen,$imagenDestacada,$valor,$reseña){
   $sql ="INSERT INTO agregarapartamento (cuidad,pais,direccion,ubicacion,numeroHabitaciones,imagen,imagenDestacada,valor,reseña) 
   VALUES ('{$cuidad}','{$pais}','{$direccion}','{$ubicacion}','{$numeroHabitaciones}','{$imagen}','{$imagenDestacada}','{$valor}','{$reseña}') ";
   $this->db->query($sql);
 }

 public function obtenerUsuario($id){
    $sql = "SELECT * FROM registro WHERE id={$id}";
    $usuario = $this -> db->query($sql)->getResult();
    return $usuario[0];
}

 public function InicioSesion($email,$contraseña){
    $sql = "SELECT * FROM registro WHERE email='{$email}' AND  $contraseña= '{$contraseña}'";
    $user = $this -> db->query($sql)->getResult();
	return  $user;

 }

 public function obtenerNombre($nombre){
    $sql = "SELECT * FROM registro WHERE nombre='{$nombre}' ";
    $usuario = $this -> db->query($sql)->getResult();
    return $usuario;

 }

 public function agregarCrud ($nombre,$apartamento,$telefono){
   $sql ="INSERT INTO crudusuario (Nombre,apartamento,Telefono) VALUES ('{$nombre}','{$apartamento}','{$telefono}')";
   $this->db->query($sql);
 }

 public function obtenerCrud(){
   $sql = "SELECT * FROM crudusuario";
   $users = $this -> db->query($sql)->getResult();
   return $users;
 }

 function deleteCrud($id){
   $sql = "DELETE FROM crudusuario WHERE id={$id}";
   $this->db->query($sql);
}


}


