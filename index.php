<?php

include ('config.php');
include ('libs/DB.php');
include ('libs/MySql.php');
include ('libs/PSql.php');
try {
   $dbMySQL = new MySql(DB_MYSQL, DB_HOST, DB_NAME, DB_USER, DB_PASS);
} catch (PDOException $e) {
   echo $e->getMessage() . ':(';
}


$id = '32';
$name= 'Wesley';
$password = 'lanms';

$userId = '3';
$nameUser= 'Oniel'; 

$userIdDelete = '3';


/*************** prepared MySQL queries *****************/
$insertSql = 'insert into user (id, name, password) values (:id, :name, :password)';
var_dump($insertSql);
$selectSql = 'select id, name, password from user where id = :id';
$selectSqlAll = 'select id, name, password from user';
$updateSql = 'update user set name = :name where id = :id';
$deleteSql = 'delete from user where id = :id';
/********************* INSERT **********************/ 
$dbMySQL->query($insertSql);
$dbMySQL->bind(':id', $id);
$dbMySQL->bind(':name', $name);
$dbMySQL->bind(':password', $password);
$resultMy1 = $dbMySQL->execute();
/********************* SELECT ONE **********************/
$dbMySQL->query($selectSql); 
$dbMySQL->bind(':id', $id); 
$rowMy1 = $dbMySQL->single();
/********************** UPDATE *********************/
$dbMySQL->query($updateSql);
$dbMySQL->bind(':id', $userId);
$dbMySQL->bind(':name', $nameUser);
$resultMy2 = $dbMySQL->execute();
/*********************** SELECT ALL *********************/
$dbMySQL->query($selectSqlAll);
$dbMySQL->bind(':id', $id);
$rowsMy1 = $dbMySQL->resultset();
$countRowsMy = $dbMySQL->rowCount();  
/************************ DELETE *********************/
$dbMySQL->query($deleteSql);
$dbMySQL->bind(':id', $userIdDelete);
$resultMy3 = $dbMySQL->execute();



$pId = '32';
$pName= 'Wesley';
$pPassword = 'lanms';

$pUserId = '3';
$pNameUser= 'Oniel'; 

$pUserIdDelete = '3';


try {
   $dbPgSQL = new PSql(DB_PGSQL, DB_HOST, DB_NAME, DB_USER, DB_PASS);
} catch (PDOException $e) {
   echo $e->getMessage() . ':(';
}
/*************** prepared PgSQL queries *****************/
$inserPsql = 'insert into user (id, name, password) values (:id, :name, :password)';
$selectPsql = 'select id, name, password from user where id = :id';
$selectAllPsql = 'select id, name, password from user';
$updatePsql = 'update user set name = :name where id = :id';
$deletePsql = 'delete from user where id = :id';
/********************* INSERT **********************/
$dbPgSQL->query($inserPsql);
$dbPgSQL->bind(':id', $pId);
$dbPgSQL->bind(':name', $pName);
$dbMySQL->bind(':password', $pPassword);
$resultPg1 = $dbPgSQL->execute();
/********************* SELECT ONE **********************/
$dbPgSQL->query($selectPsql); 
$dbPgSQL->bind(':id', $userId); 
$rowPg1 = $dbPgSQL->single();
/********************** UPDATE ********************/
$dbPgSQL->query($updatePsql);
$dbPgSQL->bind(':id', $pUserId);
$dbPgSQL->bind(':name', $pNameUser);
$resultPg2 = $dbPgSQL->execute();
/*********************** SELECT ALL *********************/
$dbPgSQL->query($selectAllPsql);
$dbPgSQL->bind(':id', $userId);
$rowsPg1 = $dbPgSQL->resultset();
$countRowsPg = $dbPgSQL->rowCount();  
/************************ DELETE *********************/
$dbPgSQL->query($deletePsql);
$dbPgSQL->bind(':id', $pUserIdDelete);
$resultPg3 = $dbPgSQL->execute();*/
include 'template/index.php';