<?php
    class Landing{
        public function __construct(){}
        public function index(){
            require_once "views/roles/business/header.php";
            require_once "views/roles/business/index.view.php";
            require_once "views/roles/business/footer.php";
        }
        public function loginWiew(){
            require_once "views/roles/business/header.php";
            require_once "views/business/login.view.php";
            require_once "views/roles/business/footer.php";
        }
        public function tables(){
            require_once "views/roles/business/header.php";
            require_once "views/business/tables.view.php";
            require_once "views/roles/business/footer.php";
        }
    }
?>