<?php
/* CONSTRUCT  */
class Backend extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("sesiones");
    }
    /* INDEX */
    public function index()
    {
        $data = array(
            "titulo" => "ZPWORKHOLDING",
            "css"    => array("estilo"),
            "js"     => array("index", "navbar")

        );
        $this->load->view("partes/header_page_view", $data);
        $this->load->view("partes/navbar");
        $this->load->view("cuerpo/index");
        $this->load->view("partes/footer_page_view");
    }
    /* FILOSOFIA */
    public function filosofia()
    {
        $data = array(
            "titulo" => "Filosofia",
            "css"    => array("estilo"),
            "js"     => array("filosofia", "navbar")
        );
        $this->load->view("partes/header_page_view", $data);
        $this->load->view("partes/navbar");
        $this->load->view("cuerpo/filosofia");
        $this->load->view("partes/footer_page_view");
    }
    /* CONOCENOS */
    public function conocenos()
    {
        $data = array(
            "titulo" => "Conócenos",
            "css"    => array("estilo"),
            "js"     => array("conocenos", "navbar")

        );
        $this->load->view("partes/header_page_view", $data);
        $this->load->view("partes/navbar");
        $this->load->view("cuerpo/conocenos");
        $this->load->view("partes/footer_page_view");
    }
    /* SERVICIOS */
    public function servicios()
    {
        $data = array(
            "titulo" => "Servicios",
            "css"    => array( "estilo"),
            "js"     => array("servicios", "navbar")

        );
        $this->load->view("partes/header_page_view", $data);
        $this->load->view("partes/navbar");
        $this->load->view("cuerpo/servicios");
        $this->load->view("partes/footer_page_view");
    }
    /* PORTAFOLIO */
    public function portafolio()
    {
        $data = array(
            "titulo" => "Portafolio",
            "css"    => array("estilo"),
            "js"     => array("portafolio", "navbar")

        );
        $this->load->view("partes/header_page_view", $data);
        $this->load->view("partes/navbar");
        $this->load->view("cuerpo/portafolio");
        $this->load->view("partes/footer_page_view");
    }
    /* CONTACTOS */
    public function contactos()
    {
        $data = array(
            "titulo" => "Contactos",
            "css"    => array("", "estilo"),
            "js"     => array("contactos", "navbar")

        );
        $this->load->view("partes/header_page_view", $data);
        $this->load->view("partes/navbar");
        $this->load->view("cuerpo/contactos");
        $this->load->view("partes/footer_page_view");
    }
    /* AYUDA */
    public function ayuda()
    {
        $data = array(
            "titulo" => "Ayuda",
            "css"    => array("", "estilo", "estilo"),
            "js"     => array("ayuda", "navbar")
        );
        $this->load->view("partes/header_page_view", $data);
        $this->load->view("partes/navbar");
        $this->load->view("cuerpo/ayuda");
        $this->load->view("partes/footer_page_view");
    }
    //------------------------ADMINISTRADOR----------------------------------------
    public function admin_1f96df72a9c90fc634f8c48ba7502815()
    {
        $data = array(
            "titulo" => "WorkHolding-Admin",
            "css"    => array("estilos"),
            "js"     => array("admin/login"),
        );
        $this->load->view("admin/header_page_view", $data);
        $this->load->view("admin/navbar_login");
        $this->load->view("admin/index");
        $this->load->view("admin/footer_page_view");
    }
    public function conocenos_admin($id_usuario, $token)
    {
        verifica_sesion($id_usuario, $token);
        $data = array(
            "titulo" => "WorkHolding-Admin",
            "css"    => array("estilos"),
            "js"     => array("admin/index", "admin/conocenos")
        );
        $this->load->view("admin/header_page_view", $data);
        $this->load->view("admin/navbar_login");
        $this->load->view("admin/navbar");
        $this->load->view("admin/conocenos");
        $this->load->view("admin/footer_page_view");
    }
    public function portafolio_admin($id_usuario, $token)
    {
        verifica_sesion($id_usuario, $token);
        $data = array(
            "titulo" => "WorkHolding-Admin",
            "css"    => array("estilos"),
            "js"     => array("admin/portafolio")
        );
        $this->load->view("admin/header_page_view", $data);
        $this->load->view("admin/navbar_login");
        $this->load->view("admin/navbar");
        $this->load->view("admin/portafolio");
        $this->load->view("admin/footer_page_view");
    }
    public function  index_admin($id_usuario, $token)
    {
        verifica_sesion($id_usuario, $token);
        $data = array(
            "titulo" => "WorkHolding-Admin",
            "css"    => array("estilos"),
            "js"     => array("admin/index")
        );
        $this->load->view("admin/header_page_view", $data);
        $this->load->view("admin/navbar_login");
        $this->load->view("admin/navbar");
        $this->load->view("admin/inicio");
        $this->load->view("admin/footer_page_view");
    }
    public function cambio_password($id_usuario, $token)
    {
        verifica_sesion($id_usuario, $token);
        $data = array(
            "titulo" => "WorkHolding-Admin",
            "css"    => array("estilos"),
            "js"     => array("admin/cambio_password")
        );
        $this->load->view("admin/header_page_view", $data);
        $this->load->view("admin/navbar_login");
        $this->load->view("admin/navbar");
        $this->load->view("admin/cambio_password");
        $this->load->view("admin/footer_page_view");
    }
    private function creasesion($id_usuario, $token, $nombre_usuario, $password)
    {
        //CREA VARIABLES DE SESION
        $this->session->set_userdata(array(
            "id_usuario"    =>  $id_usuario,
            "token"     =>  $token,
            "username"  =>  $nombre_usuario,
            "pass"   =>  $password
        ));
    }
    public function inicio($id_usuario, $token, $nombre_usuario, $password)
    {
        $this->creasesion($id_usuario, $token, $nombre_usuario, $password);
        //REDIRIGE A VISTA DE PRODUCTOS
        redirect(base_url() . "backend/index_admin/$id_usuario/$token");
    }
    public function cierrasesion($id_usuario, $token)
    {
        verifica_sesion($id_usuario, $token);
        $this->session->unset_userdata(array(
            "id_usuario",
            "token", "username", "pass"
        ));
        $this->session->sess_destroy();
        redirect(base_url() . "backend/login_admin/");
    }
    
}
