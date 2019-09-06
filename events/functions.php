<?php

require_once('../config.php');
require_once(DBAPI);

$events = null;
$event = null;

/**
 *  Listagem de Clientes
 */
function index() {
	global $events;

	$events = find_all('events');
}


/**
 *  Cadastro de Clientes
 */
function add() {

	if (!empty($_POST['event'])) {

		$today = 
		date_create('now', new DateTimeZone('America/Sao_Paulo'));

		$event = $_POST['event'];
		$event['modified'] = $event['created'] = $today->format("Y-m-d H:i:s");

		save('events', $event);
		header('location: index.php');
	}
}


/**
 *	Atualizacao/Edicao de Cliente
 */
function edit() {

	$now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

	if (isset($_GET['id'])) {

		$id = $_GET['id'];

		if (isset($_POST['event'])) {

			$event = $_POST['event'];
			$event['modified'] = $now->format("Y-m-d H:i:s");

			update('events', $id, $event);
			header('location: index.php');
		} else {

			global $event;
			$event = find('events', $id);
		} 
	} else {
		header('location: index.php');
	}
}


/**
 *  Visualização de um Cliente
 */
function view($id = null) {
  global $event;

  $event = find('events', $id);
}


/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {

  global $event;
  $event = remove('events', $id);

  header('location: index.php');
}
