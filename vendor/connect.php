<?php
$connect = new mysqli("localhost", "root", "root", "area_web");

if(!$connect) {
    die('Error connect to DataBase');
}