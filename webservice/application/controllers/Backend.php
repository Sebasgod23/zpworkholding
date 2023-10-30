<?php

class Backend extends CI_Controller
{
    public function __construct() //funcion constructor
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model("consultas_model");
        $this->load->library('session');

        $config['upload_path'] = './images/'; // Ruta de tu carpeta de imágenes
        $config['allowed_types'] = 'gif|jpg|jpeg|png|webp'; // Tipos de archivos permitidos
        $config['max_size'] = 10120; // Tamaño máximo en kilobytes (ajusta según tus necesidades).
        $config['upload_max_size'] = 10120; // El tamaño se expresa en kilobytes (5120 KB = 5 MB)

        $this->load->library('upload', $config);
    }
    public function get_usuarios() //funcion mandar llamar datos
    {
        $data = $this->consultas_model->get_usuarios();
        $obj["resultado"] = $data != NULL;
        $obj["mensaje"] = $obj["resultado"] ?
            "Se recuperaron " . count($data) . " Datos" : "No hay Datos";
        $obj["dato"] = $data;
        echo json_encode($obj);
    }
    public function insert_datos() //funcion insert usuario
    {
        $nombre = $this->input->post("nombre_usuario");
        $pass = $this->input->post("password_usuario");


        $nombre = mb_strtoupper($nombre); //darte estilo mayusculas al capturar los datos

        $id_usu = $this->consultas_model->insert_datos($nombre, $pass);
        $obj["resultado"] = $id_usu != 0;
        $obj["mensaje"] = $obj["resultado"] ?
            "Datos insertados" : "Imposible registro de datos";
        echo json_encode($obj);
    }
    public function eliminar_usuario() //funcion elminar usuario
    {
        $id_usuario = $this->input->post("id_usuario");
        $valor = $this->consultas_model->delete_usuario($id_usuario);
        $obj["resultado"] = $valor != 0;
        $obj["mensaje"] = $obj["resultado"] ?
            "Se ha eliminado el usuario exitosamente"   :   "Imposible eliminar ese usuario";
        echo json_encode($obj);
    }
    public function insert_contactos() //Funcion elimanar contactos   
    {
        $nombre = $this->input->post("nombre");
        $correo = $this->input->post("email");
        $asunto = $this->input->post("asunto");
        $telefono = $this->input->post("telefono");
        $mensaje = $this->input->post("mensaje");

        $id_con = $this->consultas_model->insert_contactos($nombre, $correo, $asunto, $telefono, $mensaje);
        $obj["resultado"] = $id_con != 0;
        $obj["mensaje"] = $obj["resultado"] ?
            "Datos insertados correctamente" : "Imposible registro de datos";
        echo json_encode($obj);
    }
    public function get_all_images_ilus()
    {
        $data = $this->consultas_model->get_all_images_ilus();

        if (!empty($data)) {
            $response['status'] = 200;
            $response['data'] = $data;
            $response['msj'] = 'Se encontraron ilustraciones.';
        } else {
            $response['status'] = 400;
            $response['msj'] = 'Imagenes no cargadas en la base de datos.';
        }

        echo json_encode($response);
    }
    //----------------------------------------------------------------
    public function get_informacion() 
    {
        $data = $this->consultas_model->get_informacion();
        $obj["resultado"] = $data != NULL;
        $obj["msj"] = $obj["resultado"] ?
            "Se recuperaron " . count($data) . " Datos" : "No hay Datos";
        $obj["dato"] = $data;
        echo json_encode($obj);
    }
    public function verificausuario()
    { 
        //session_start();
        $usuario = $this->input->post("usuario");
        $pass = $this->input->post("pass");
        $pass = MD5($pass);
        $id_usu = $this->consultas_model->exists_username($usuario, $pass);
        if ($id_usu  != 0) {
            //Crea la variable de sesión
            session_regenerate_id();
            $token = MD5(session_id());

            if ($this->consultas_model->update_token($usuario, $token)) {
                $usuario =  $this->consultas_model->get_usuario($id_usu);
                $obj    =   array(
                    "resultado" =>  true,
                    "msj"   =>  "Bienvenido " . $usuario->nombre_usuario,
                    "usuario"   =>  $usuario,
                    "token"     =>  $token
                );
            } else {
                $obj = array(
                    "resultado" =>  false,
                    "msj"   =>  "Imposible crear una sesion"
                );
            }
        } else {
            $obj = array(
                "resultado" =>  false,
                "msj"   =>  "Error, correo o contraseña incorrectas"
            );
        }
        echo json_encode($obj);
    }
    public function carrga_img()
    {
        $desc = $this->input->post("modal-desc");
        if ($this->upload->do_upload('modal-img')) {
            $data = $this->upload->data();
            $img_name = basename($data['file_name']); // Obtiene solo el nombre del archivo.
            $this->consultas_model->carrga_img($img_name, $desc);
            $response['status'] = 200;
            $response['msj'] = 'Imagen cargada correctamente';
        } else {
            $response['status'] = 400;
            $response['msj'] = $this->upload->display_errors();
        }
        echo json_encode($response);
    }
    public function eliminar_img()
    {
        $id = $this->input->post("id");
    
        // Obtén el nombre del archivo de la base de datos antes de eliminarlo.
        $imagen = $this->consultas_model->obtener_nombre_imagen($id);
    
        $status = $this->consultas_model->eliminar_imagen($id);
    
        if ($status == 200) {
            // Elimina el archivo del sistema de archivos si la eliminación de la base de datos fue exitosa.
            $file_path = './images/' . $imagen; // Ajusta la ruta a la ubicación real de tus imágenes.
            if (file_exists($file_path) && is_file($file_path)) {
                unlink($file_path);
            } else {
                // Maneja el caso en el que el archivo no existe.
                $response['status'] = 400;
                $response['msj'] = 'El archivo de imagen no existe.';
            }
    
            $response['status'] = 200;
            $response['msj'] = 'Imagen eliminada con éxito.';
        } else {
            $response['status'] = 400;
            $response['msj'] = 'Error al eliminar la imagen.';
        }
        echo json_encode($response);
    }
    public function get_all_images()
    {
        $data = $this->consultas_model->get_all_images();

        if (!empty($data)) {
            $response['status'] = 200;
            $response['data'] = $data;
        } else {
            $response['status'] = 400;
            $response['msj'] = 'No se encontraron imágenes.';
        }

        echo json_encode($response);
    }


}
