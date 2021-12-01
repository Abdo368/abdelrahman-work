<?php
// collect data from post
$taskName=$_POST['taskName'];
$taskDesc=$_POST['taskDesc'];
include 'connect.php';
$query=$conn->prepare("INSERT INTO tasks SET name='$taskName' , description='$taskDesc'");
$query->execute();
