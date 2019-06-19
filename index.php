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

/*
try {
   $dbPgSQL = new DbPgSQL(DB_PGSQL, DB_HOST, DB_NAME, DB_USER, DB_PASS);
} catch (PDOException $e) {
   echo $e->getMessage() . ':(';
}
/*************** prepared PgSQL queries *****************
$inserPsql = 'insert into test (id, name, password) values (:id, :name, :password)';
$selectPsql = 'select id, name, password from test where id = :id';
$updatePsql = 'update test set name = :name where id = :id';
$deletePsql = 'delete from test where id = :id';
/********************* INSERT **********************
$dbPgSQL->query($inserPsql);
$dbPgSQL->bind(':id', $userId);
$dbPgSQL->bind(':name', $userName);
$dbMySQL->bind(':password', $userPass);
$resultPg1 = $dbPgSQL->execute();
/********************* SELECT ONE **********************
$dbPgSQL->query($selectPsql); 
$dbPgSQL->bind(':id', $userId); 
$rowPg1 = $dbPgSQL->single();
/********************** UPDATE ********************
$dbPgSQL->query($updatePsql);
$dbPgSQL->bind(':id', $userId);
$dbPgSQL->bind(':name', $userName);
$resultPg2 = $dbPgSQL->execute();
/*********************** SELECT ALL *********************
$dbPgSQL->query($selectPsql);
$dbPgSQL->bind(':id', $userId);
$rowsPg1 = $dbPgSQL->resultset();
$countRowsPg = $dbPgSQL->rowCount();  
/************************ DELETE *********************
$dbPgSQL->query($deletePsql);
$dbPgSQL->bind(':id', $userId);
$resultPg3 = $dbPgSQL->execute();*/
include 'template/index.php';