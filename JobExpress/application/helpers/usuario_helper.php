<?php

 

 if(!isset($_SESSION['rol'])=='1' && !defined('NOLOGIN'))
 {
   redirect('Seguridad/loginUsuario');
 }
