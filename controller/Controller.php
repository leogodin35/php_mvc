<?php

require "model/Model.php";

class Controller {

  public function Index() {

    include "view/Index.php";
  }
  public function Login() {

    include "view/Login.php";
  }
  public function Painel() {
    $model = new Model();
    $usuario = $model->UsuarioLogado();

    include "view/Painel.php";
  }
}
