<?php

mysql_connect( "localhost", "root", "" );
mysql_select_db( "to_do" );

if ( empty( $_POST ) ) return;

if ( empty( $_POST['task'] ) ) {
	echo "<div class='alert alert-warning'>Please provide a task.</div>";
	return;
}

extract( $_POST );

$order = "INSERT INTO to_dos (date, task) VALUES ('$date', '$task')";

$result = mysql_query( $order );
if ( $result ) {

	$my_task = $_POST['task'];
	echo "<div class='alert alert-success'>Input data is succeed: $my_task</div>";

} else {
	echo "<div class='alert alert-warning'>Input data is fail</div>";
}

