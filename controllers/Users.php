<?php

    require_once "models/model_dto/UserDto.php";

    class Users{
        public function __construct(){}
        public function index(){            
            require_once "views/roles/admin/header.php";
            require_once "views/roles/admin/admin_main.view.php";
            require_once "views/roles/admin/footer.php";
        }

        // Crear Rol
        public function createRol(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "views/roles/admin/header.php";
                require_once "views/modules/1_users/rol_create.view.php";
                require_once "views/roles/admin/footer.php";
            }
            // Método Post
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Capturar los datos y crear Objeto DTO
                $userDto = new UserDto(
                    $_POST['rol_codigo'],
                    $_POST['rol_nombre']
                );                
                // Validar los datos

                // Pasar el Objeto DTO al método (CRUD) del Objeto DAO

                // Redireccionar a un controlador o una página web
                require_once "views/roles/admin/header.php";
                echo "<br><h1>Código Rol: " . $userDto->getCodigoRol() . "</h1>";
                echo "<br><h1>Nombre Rol: " . $userDto->getNombreRol() . "</h1>";
                require_once "views/roles/admin/footer.php";
                // header("Location: ?c=Dashboard");
            }
            
        }

        // Consultar Roles

        // Actualizar Rol

        // Eliminar Rol
    }
?>