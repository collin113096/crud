<?php

require_once "classes/sub/Student.php";

Student::update($_GET['id'], $_POST);

header("location: index.php");