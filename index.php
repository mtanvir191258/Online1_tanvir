<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM ticket_booking" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo "<th>Id</th> <th>Name</th> <th>APPT_Date</th> <th>From_location</th> <th>To_location</th> <th>From_Status</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $ID </td>";
		echo "<td> $name </td>";
		echo "<td> $APPT_DATE </td>";
		echo "<td> $FROM_LOCATION </td>";
		echo "<td> $TO_LOCATION </td>";
		echo "<td> $STATUS </td>";

		// echo "<td> <a href = 'delete.php?id=$id'> Delete </a> </td>";
		// echo "<td> <a href = 'update_input.php?id=$id&f0=$f0&f1=$f1'> Update </a> </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";

	echo "<p><a href=booking_input.php>addBooking</a>";
	echo "<p><a href=create_input.php>CancelBooking</a>";


?>