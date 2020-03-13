<?php

//Creates the personID at a higher scope level. If it was put in the foreach loop the variable would be reset
$personID = 0;

$people = array(
   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);

//Creates the table
echo "<table border='1'>";
//Creates the headers for each of the columns in the table
echo "<tr><th>First Name</th><th>Last Name</th><th>E-mail</th><th>Info Button</th></tr>";

foreach ($people as $person) {
	//Counter when looping through the foreach statement. Also used to pass the ID to the javascript function
	$personID++;

	//Echoes out PHP table rows and areas for the data
	echo "<tr><td>" . $person['first_name'] . "</td>" . "<td>" . $person['last_name'] . "</td>" . "<td>" . $person['email'] . "</td>" . "<td><button id=btn" . $personID . "  onClick=personInfo(" . $personID . ") type=button>Click Me!</button></td>" . "</tr>";
}

//Closes the table
echo "</table>";

?>

<script type="text/javascript">
	function personInfo(value) {
		var ID = value - 1; //Decreases the value of the ID by 1 so that it doesn't go out of bounds
		var person = <?php echo json_encode($people); ?>; //Grabs the PHP people array and converts it into a Javascript array
		var message = person[ID].first_name + " " + person[ID].last_name + " | " + person[ID].email; //Creates a dynamic alert message
		alert(message); //Outputs the alert message
}
</script>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html>
	<body>
	


	</body>
</html>
