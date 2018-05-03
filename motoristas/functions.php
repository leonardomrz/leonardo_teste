<?php

require_once('../config.php');
require_once(DBAPI);

$motoristas = null;
$motorista = null;

/**
 *  Listagem de motoristas
 */
function index() {
	global $motoristas;
	$motoristas = find_all('motoristas');
}

/**
 *  Cadastro de motoristas
 */
function add() {

  if (!empty($_POST['motorista'])) {

    $motorista = $_POST['motorista'];

    save('motoristas', $motorista);
    header('location: index.php');
  }
}


/**
 *	Atualizacao/Edicao de motorista
 */
function edit() {

  if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (isset($_POST['motorista'])) {

      $motorista = $_POST['motorista'];

      update('motoristas', $id, $motorista);
      header('location: index.php');
    } else {

      global $motorista;
      $motorista = find('motoristas', $id);
    }
  } else {
    header('location: index.php');
  }
}

/**
 *  Exclusão de um motorista
 */
function delete($id = null) {

  global $motorista;
  $motorista = remove('motoristas', $id);

  header('location: index.php');
}
