<?php

require_once "classes/sub/Student.php";

Student::delete($_GET['id']);

header("location: index.php");