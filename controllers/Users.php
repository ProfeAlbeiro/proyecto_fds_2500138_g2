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
                # Por Constructor
                $userDto = new UserDto(
                    $_POST['rol_codigo'],
                    $_POST['rol_nombre']
                );
                
                # Por Método Set('parámetro');
                $userDto2 = new UserDto;
                $userDto2->setCodigoRol($_POST['rol_codigo']);
                $userDto2->setNombreRol($_POST['rol_nombre']);
                // Validar los datos

                // Pasar el Objeto DTO al método (CRUD) del Objeto DAO

                // Redireccionar a un controlador o una página web                
                require_once "views/roles/admin/header.php";
                # Objeto 1
                echo "<br><h1>Objeto 1: Constructor</h1>";
                echo "<br><h3>Código Rol: " . $userDto->getCodigoRol() . "</h3>";
                echo "<br><h3>Nombre Rol: " . $userDto->getNombreRol() . "</h3>";

                # Objeto 2
                echo "<br><h1>Objeto 2: Métodos Set</h1>";
                echo "<br><h3>Código Rol: " . $userDto2->getCodigoRol() . "</h3>";
                echo "<br><h3>Nombre Rol: " . $userDto2->getNombreRol() . "</h3>";
                require_once "views/roles/admin/footer.php";
                // header("Location: ?c=Dashboard");
            }
            
        }

        // Consultar Roles

        // Actualizar Rol

        // Eliminar Rol
    }
?>