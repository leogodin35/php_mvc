<?php

require "controller/Controller.php";

$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'index';

$ctrl = new Controller();

switch ($pagina) {
  case 'index':
    $ctrl->Index();
    break;
  case 'login':
    $ctrl->Login();
    break;
  case 'painel':
    $ctrl->Painel();
    break;
}
