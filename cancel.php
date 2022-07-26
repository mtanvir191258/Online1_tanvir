<?php

	$name = $_GET["name"];

	$id = $_GET["id"];
	

    



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



        mysqli_query( $connect, "DELETE FROM ticket_booking WHERE id=$id" )
	

		or die("Can not execute query");



	echo "Record inserted:<br> name = $name <br> id = $id  <br> " ;



	echo "<p><a href=read.php>READ all records</a>";

?>