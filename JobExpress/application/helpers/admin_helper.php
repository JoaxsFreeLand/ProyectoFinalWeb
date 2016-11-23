<?php

session_start();

if(!isset($_SESSION['rol']=='3') && !defined('NOLOGIN'))
{
  redirect('Principal/index');

}
