<!--File :user_add_process.php -->

<?php

session_start();
include_once("../admin/include/db.php");

$user=$_POST['username'];
$pass=$_POST['password'];
$role=1;


$sql = "INSERT INTO user (username, password, role) VALUES (:username, :password, :role)";
$stmt = $db->prepare($sql);
$stmt->execute(['username' => $user, 'password' => $pass, 'role' => $role]);


$_SESSION['pesan']="User baru berhasil ditambahkan.";
$_SESSION['jenis_pesan'] ="info";
header('Location: ../index.php?page=user');


?>