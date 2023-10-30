<?php
class consultas_model extends CI_Model
{
    public function get_usuarios() //funcion mandar llamar los datos 
    {
        $rs = $this->db
            ->select("id_usuario,nombre_usuario,password,activo")
            ->from("zp_usuario")
            ->order_by("nombre_usuario")
            ->get();
        return $rs->num_rows() > 0 ? $rs->result() : NULL;
    }
    public function insert_datos($nombre, $pass) //insert datos  
    {
        $this->db
            ->insert("zp_usuario", array(
                "nombre_usuario" => $nombre,
                "password"   =>  MD5($pass),
                "activo" => 0
            ));
        return $this->db->insert_id();
    }
    public function delete_usuario($id_usuario) //delete usuarios
    {
        $this->db
            ->where("id_usuario", $id_usuario)
            ->delete("zp_usuario");

        return $this->db->affected_rows() == 1;
    }
    public function insert_contactos($nombre, $correo, $asunto, $telefono, $mensaje)
    {
        $existing_email = $this->db
            // Verificar si el correo ya existe en la base de datos
            ->get_where("zp_contactos", array("correo" => $correo))
            ->row();

        if ($existing_email) { // Si el correo ya existe, no realizar la inserción y devolver un mensaje o código de error
            return 0;
        } else {
            $this->db // Si el correo no existe, realizar la inserción en la base de datos
                ->insert("zp_contactos", array(
                    "nombre" => $nombre,
                    "correo" => $correo,
                    "asunto" => $asunto,
                    "telefono" => $telefono,
                    "mensaje" => $mensaje
                ));
            return $this->db->insert_id();  // Devolver el ID de la inserción
        }
    }

    //----------------------------------------------------------------
    public function exists_username($username, $pass) //verifica que el correo exista en la base de datos
    {
        $rs   =   $this->db
            ->where("nombre_usuario", $username)
            ->where("password", $pass)
            ->get("zp_usuario");
        return $rs->num_rows() == 1 ? $rs->row()->id_usuario : 0;
    }
    public function update_token($username, $token) //Reemplaza el token cada que inicia sesiòn ...
    {
        $this->db
            ->set("token", $token)
            ->where("nombre_usuario", $username)
            ->update("zp_usuario");
        return $this->db->affected_rows() == 1;
    }
    public function get_usuario($id_usu) //Trae sus datos del usuario una vez que sus datos sean correctos ...
    {
        $rs   =  $this->db
            ->select("id_usuario, nombre_usuario, password, activo, token")
            ->where("id_usuario", $id_usu)
            ->get("zp_usuario");
        return $rs->num_rows() > 0 ? $rs->row() : NULL;
    }
    public function get_informacion() //funcion mandar llamar los datos 
    {
        $rs = $this->db
            ->select("id_usuario,nombre_usuario,password,activo")
            ->from("zp_usuario")
            ->order_by("nombre_usuario")
            ->get();
        return $rs->num_rows() > 0 ? $rs->result() : NULL;
    }
    public function carrga_img_conocenos($img_path, $desc)
    {
        $existing_img = $this->db
            ->get_where("zp_imagen", array("imagen" => $img_path))
            ->row();

        if ($existing_img) {
            return 0;
        } else {
            $this->db->insert("zp_imagen", array(
                "imagen" => $img_path,
                "descripcion" => $desc,
                "accion" => "c1",
            ));
            return 1;
        }
    }
    public function carrga_img_portafolio($img_path, $desc)
    {
        $existing_img = $this->db
            ->get_where("zp_imagen", array("imagen" => $img_path))
            ->row();

        if ($existing_img) {
            return 0;
        } else {
            $this->db->insert("zp_imagen", array(
                "imagen" => $img_path,
                "descripcion" => $desc,
                "accion" => "p1",
            ));
            return 1;
        }
    }
    public function eliminar_imagen_conocenos($id)
    {
        $this->db->where("id_imagen", $id);
        $this->db->delete("zp_imagen");

        if ($this->db->affected_rows() > 0) {
            return 200; // Éxito: Se eliminó la imagen.
        } else {
            return 400; // Error: No se pudo eliminar la imagen.
        }
    }
    public function get_all_images_conocenos()
    {
        $this->db->select('id_imagen, imagen, descripcion');
        $this->db->where('accion','c1');
        $this->db->from('ZP_IMAGEN');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    public function obtener_nombre_imagen($id) {
        $this->db->select('imagen'); // Reemplaza 'nombre_imagen' por el nombre real de la columna en tu tabla de imágenes.
        $this->db->where('id_imagen', $id); // Reemplaza 'id' por el nombre real de la columna de ID en tu tabla.

        $query = $this->db->get('ZP_IMAGEN'); // Reemplaza 'tu_tabla_de_imagenes' por el nombre real de tu tabla.

        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->imagen; // Reemplaza 'nombre_imagen' por el nombre real de la columna en tu tabla de imágenes.
        } else {
            return null; // Devuelve null si no se encuentra la imagen en la base de datos.
        }
    }
    public function get_all_images_portafolio()
    {
        $this->db->select('id_imagen, imagen, descripcion');
        $this->db->where('accion','p1');
        $this->db->from('ZP_IMAGEN');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    public function eliminar_imagen_portafolio($id)
    {
        $this->db->where("id_imagen", $id);
        $this->db->delete("zp_imagen");

        if ($this->db->affected_rows() > 0) {
            return 200; // Éxito: Se eliminó la imagen.
        } else {
            return 400; // Error: No se pudo eliminar la imagen.
        }
    }
}
