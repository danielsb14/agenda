<?php 
	
	class contactoController
	{	
		public function __construct(){}

		public function index(){
			//echo 'index desde contactoController';
			
			$contactos=contacto::all();
			require_once('views/contacto/index.php');
		}

		public function register(){
			require_once('views/contacto/register.php');
		}

		//guardar
		public function save($contacto){
			contacto::save($contacto);
			header('Location: ../index.php');
		}

		public function update($contacto){
			contacto::update($contacto);
			header('Location: ../index.php');
		}

		public function delete($id){
			//se está de dentro del directorio Controllers y se debe salir con ../
			require_once('../models/contacto.php');
			contacto::delete($id);
			header('Location: ../index.php');
		}
		
		public function error(){
			require_once('views/contacto/error.php');
		} 
	}


	//obtiene los datos del contacto desde la vista y redirecciona a contactoController.php
	if (isset($_POST['action'])) {
		$contactoController= new contactoController();
		//se añade el archivo contacto.php
		require_once('../models/contacto.php');
		
		//se añade el archivo para la conexion
		require_once('../connection.php');

		if ($_POST['action']=='register') {
			$contacto= new contacto(null,$_POST['name'],$_POST['lastname'],$_POST['address'],$_POST['phone'],$_POST['email']);
			$contactoController->save($contacto);
		}elseif ($_POST['action']=='update') {
			$contacto= new contacto($_POST['id'],$_POST['name'],$_POST['lastname'],$_POST['address'],$_POST['phone'],$_POST['email']);
			$contactoController->update($contacto);
		}		
	}

	//se verifica que action esté definida
	if (isset($_GET['action'])) {
		if ($_GET['action']!='register'&$_GET['action']!='index') {
			require_once('../connection.php');
			$contactoController=new contactoController();
			//para eliminar
			if ($_GET['action']=='delete') {		
				$contactoController->delete($_GET['id']);
			}elseif ($_GET['action']=='update') {//mostrar la vista update con los datos del registro actualizar
				require_once('../models/contacto.php');				
				$contacto=contacto::getById($_GET['id']);		
				//var_dump($contacto);
				//$contactoController->update();
				require_once('../views/contacto/update.php');
			}	
		}	
	}
?>