<?php
	echo 'Τιμή Πρώτη:',$_POST['Num1'];
	echo '<br>';
	echo 'Τιμή Δεύτερη:',$_POST['Num2'];
	echo '<br>';
	if ($_POST['Num1'] >= 0 && $_POST['Num2'] >= 0)
	{
		echo 'Άθροισμα = ',$_POST['Num1'] + 	$_POST['Num2'];
		echo '<br>';
	}
	else {
		echo 'Γινόμενο = ',$_POST['Num1'] * $_POST['Num2'];
		echo '<br>';
	}

?>
