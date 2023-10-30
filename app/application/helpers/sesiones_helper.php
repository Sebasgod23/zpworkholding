<?php
function verifica_sesion($id_usuario, $token){
	//Referencia a mi aplicación
	$miApp = &get_instance();

	if(!($miApp->session->has_userdata("id_usuario") &&
		$miApp->session->has_userdata("token") &&
		$miApp->session->id_usuario == $id_usuario &&
		$miApp->session->token == $token)){
		//La sesión es inválida
		mensaje("Sesión inválida","danger");
		redirect(base_url()."backend/login_admin");
	}
}
?>