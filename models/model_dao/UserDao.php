<?php
    class UserDao{
        
        // ATRIBUTOS: Encapsulados
        private $pdo;

        // MÉTODOS:

        # Sobrecarga de Constructores
        public function __construct(){
            try {
				$this->pdo = DataBase::connection();				
			} catch (Exception $e) {
				die($e->getMessage());
			}
        }

        # Crear un Rol
        public function createRolDao($userDto){
            try {
				// Crear la Consulta
				$sql = 'INSERT INTO ROLES VALUES (
							:codigoRol,
							:nombreRol							
						)';

				// Preparar la BBDD para la consulta
				$dbh = $this->pdo->prepare($sql);

				// Vincular los datos del objeto a la consulta de Inserción
				$dbh->bindValue('codigoRol', $userDto->getCodigoRol());			
				$dbh->bindValue('nombreRol', $userDto->getNombreRol());

				// Ejecutar la consulta
				$dbh->execute();
                
			} catch (Exception $e) {
				die($e->getMessage());	
			}
        }

		# Consultar Roles
		public function readRolDao(){
			try {
				$rolList = [];
				$sql = 'SELECT * FROM ROLES';
				$dbh = $this->pdo->query($sql);
				foreach ($dbh->fetchAll() as $rol) {
					$rolList[] = new UserDto(
						$rol['codigo_rol'],
						$rol['nombre_rol']						
					);
				}
				return $rolList;
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}

    }
?>