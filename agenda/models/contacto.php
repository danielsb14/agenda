<?php
/**
* Modelo para el acceso a la base de datos y funciones CRUD
* Autor: ELivar Largo
* Sitio Web: wwww.ecodeup.com
*/
class contacto
{
	//atributos
	public $id;
	public $name;
	public $lastname;
	public $address;
	public $phone;
	public $email;

	//constructor de la clase
	function __construct($id, $name, $lastname, $address, $phone, $email)
	{
		$this->id=$id;
		$this->name=$name;
		$this->lastname=$lastname;
		$this->address=$address;
		$this->phone=$phone;
		$this->email=$email;
	}

	//función para obtener todos los contacto
	public static function all(){
		$listacontactos =[];
		$db=Db::getConnect();
		$sql=$db->query('SELECT * FROM contacto');

		// carga en la $listacontacto cada registro desde la base de datos
		foreach ($sql->fetchAll() as $contacto) {
			$listacontacto[]= new contacto($contacto['id'],$contacto['name'], $contacto['lastname'],$contacto['address'],$contacto['phone'],$contacto['email']);
		}
		return $listacontacto;
	}

	//la función para registrar un contacto
	public static function save($contacto){
			$db=Db::getConnect();
			$insert=$db->prepare('INSERT INTO contacto VALUES(NULL,:name,:lastname,:address, :phone, :email)');
			$insert->bindValue('name',$contacto->name);
			$insert->bindValue('lastname',$contacto->lastname);
			$insert->bindValue('address',$contacto->address);
			$insert->bindValue('phone',$contacto->phone);
			$insert->bindValue('email',$contacto->email);
			//$insert->execute();
		}

	//la función para actualizar 
	public static function update($contacto){
		$db=Db::getConnect();
		$update=$db->prepare('UPDATE contacto SET name=:name, lastname=:lastname, address=:address, phone=:phone,email=:email WHERE id=:id');
		$update->bindValue('id',$contacto->id);
		$update->bindValue('name',$contacto->name);
		$update->bindValue('lastname',$contacto->lastname);
		$update->bindValue('address',$contacto->address);
		$update->bindValue('phone',$contacto->phone);
		$update->bindValue('email',$contacto->email);
		$update->execute();
	}

	// la función para eliminar por el id
	public static function delete($id){
		$db=Db::getConnect();
		$delete=$db->prepare('DELETE FROM contacto WHERE ID=:id');
		$delete->bindValue('id',$id);
		$delete->execute();
	}

	//la función para obtener un contacto por el id
	public static function getById($id){
		//buscar
		$db=Db::getConnect();
		$select=$db->prepare('SELECT * FROM contacto WHERE ID=:id');
		$select->bindValue('id',$id);
		$select->execute();
		//asignarlo al objeto contacto
		$contactoDb=$select->fetch();
		$contacto= new contacto($contactoDb['id'],$contactoDb['name'],$contactoDb['lastname'],$contactoDb['address'],$contactoDb['phone'],$contactoDb['email']);
		return $contacto;
	}
}
?>