<?php

require_once "classes/sub/Student.php";

Student::store($_POST);

header("location: index.php");