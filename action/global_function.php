<?php

session_start();

function isLogin(){
	return isset($_SESSION['user_id']);
}

function isUser($id){
	return $id == $_SESSION['user_id'];
}