<?php
/**
 * Created by MAMP.
 * User: Sathwik N Sharma
 * Date: 2020-05-24
 * Time: 8:13 PM
 */

$pdo = new PDO('mysql:host=127.0.0.1;port=8889;dbname=misc', 'root', 'root');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);