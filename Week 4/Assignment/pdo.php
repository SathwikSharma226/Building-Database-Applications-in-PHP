<?php
/**
 * User: Sathwik
 * Date: 2020-05-23
 * Time: 10:27 PM
 */

$pdo = new PDO('mysql:host=127.0.0.1;port=8889;dbname=misc', 'root', 'root');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);