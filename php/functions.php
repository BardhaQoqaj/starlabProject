<?php

//  DATABASE

const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = 'contact_db';

$conn = new MySQLi(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$conn = mysqli_connect('localhost','root','','contact_db')
 or die('connection failed');