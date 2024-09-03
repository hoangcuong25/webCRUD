<?php


function query($pdo, $sql, $parameters = []) {
	$query = $pdo->prepare($sql);
	$query->execute($parameters);
	return $query;
}

function getquestion($pdo, $id) {
	$parameters = [':id' => $id];
	$query = query($pdo, 'SELECT * FROM question WHERE id = :id', $parameters);
	return $query->fetch();
}

function getanswer($pdo, $id) {
	$parameters = [':id' => $id];
	$query = query($pdo, 'SELECT * FROM answer WHERE id = :id', $parameters);
	return $query->fetch();
}

function getuser($pdo, $id) {
	$parameters = [':id' => $id];
	$query = query($pdo, 'SELECT * FROM users WHERE id = :id', $parameters);
	return $query->fetch();
}

function getmodule($pdo, $id) {
	$parameters = [':id' => $id];
	$query = query($pdo, 'SELECT * FROM module WHERE id = :id', $parameters);
	return $query->fetch();
}

function totalquestion($pdo) {
	$query = query($pdo, 'SELECT COUNT(*) FROM question');
	$row = $query->fetch();
	return $row[0];
}

function insertquestion($pdo, $questiontext, $userid, $moduleid, $filetoupload) {
	$query = 'INSERT INTO question (questiontext, questiondate, userid, moduleid, filetoupload)
	VALUES (:questiontext, CURDATE(), :userid, :moduleid, :filetoupload)';
	$parameters = [':questiontext' => $questiontext, ':userid' => $userid, ':moduleid' => $moduleid, ':filetoupload' =>$filetoupload];
	query($pdo, $query, $parameters);
}

function insertanswer($pdo, $answertext, $userid, $questiontid) {
	$query = 'INSERT INTO answer (answertext, userid, questiontid)
	VALUES (:answertext, :userid, :questiontid)';
	$parameters = [':answertext' => $answertext, ':userid' => $userid, ':questiontid' => $questiontid];
	query($pdo, $query, $parameters);
}

function insertmessage($pdo, $title, $messagetext, $userid) {
	$query = 'INSERT INTO messages (title, messagetext, userid)
	VALUES (:title, :messagetext, :userid)';
	$parameters = [':title' => $title, ':messagetext' => $messagetext, ':userid' => $userid];
	query($pdo, $query, $parameters);
}

function insertuser($pdo, $name_user, $email, $adress, $username, $pass) {
	$query = 'INSERT INTO users (name_user, email , adress, username, pass)
	VALUES (:name_user, :email, :adress, :username, :pass)';
	$parameters = [':name_user' => $name_user, ':email' => $email, ':adress' => $adress, ':username' => $username, ':pass' => $pass];
	query($pdo, $query, $parameters);
}

function insertmodule($pdo, $modulename) {
	$query = 'INSERT INTO module (modulename)
	VALUES (:modulename)';
	$parameters = [':modulename' => $modulename];
	query($pdo, $query, $parameters);
}

function updatequestion($pdo, $id, $questiontext, $moduleid) {
	$query = 'UPDATE question SET questiontext = :questiontext, moduleid = :moduleid WHERE id = :id';
	$parameters = [':questiontext' => $questiontext, ':moduleid' => $moduleid, ':id' => $id];
	query($pdo, $query, $parameters);
}

function deletequestion($pdo, $id) {
	$parameters = [':id' => $id];
	query($pdo, 'DELETE FROM question WHERE id = :id', $parameters);
}

function deleteuser($pdo, $id) {
	$parameters = [':id' => $id];
	query($pdo, 'DELETE FROM users WHERE id = :id', $parameters);
}

function deletemodule($pdo, $id) {
	$parameters = [':id' => $id];
	query($pdo, 'DELETE FROM module WHERE id = :id', $parameters);
}

function allusers($pdo) {
	$users = query($pdo, 'SELECT * FROM users');
	return $users->fetchAll();
}


function allmodule($pdo) {
	$modules = query($pdo, 'SELECT * FROM module ');
	return $modules->fetchAll();
}
