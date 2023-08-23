<?php
	$connection = mysqli_connect("localhost", "root", "root", "bi_assignment");

	if (mysqli_connect_errno()) 
	{
		echo "<script>alert('Error: " . mysqli_connect_errno() . "');</script>";
	}/*else 
	{
		echo "<script>alert('Successfully connected.');</script>";
	}*/
