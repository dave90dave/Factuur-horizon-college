<html>
<head>
<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</head>

<div id="gegevens">
<p><?php echo $_GET["name"]; ?></p>
<p><?php echo $_GET["adres"]; ?></p>
<p><?php echo $_GET["postcode"]; ?> <?php echo $_GET["stad"]; ?> </p>
<p><?php echo $_GET["email"]; ?></p><br><br>
</div>

<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '80e9p0s46bmm';
$db_name = 'factuurapp'; 

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * FROM producten';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('Error: ' . mysqli_error($conn));
}
?>
<html>
<body>
 <table style="width:60%">
  <tr>
	<th>ID</th>
    <th>Product</th>
    <th>Omschrijving</th>
    <th>Kosten</th>
  </tr>
		<?php
		while ($row = mysqli_fetch_array($query))
		{
			$amount  = $row['ID'] == 0 ? '' : number_format($row['ID']);
			echo '<tr>;
					<td>'.$row['ID'].'</td>;
					<td>'.$row['Product'].'</td>;
					<td>'.$row['Omschrijving'].'</td>;
					<td>'.$row['Kosten'].'</td>;
				</tr>';
		}
		
		
	
		
		

		
		?>
	</table>
	<style>
	table {
		border: solid;
		border-style: dotted;
	}
	#price {
		color: blue;
	}
	#gegevens {
	padding: 50px;
	text-size: 16px;
	}
	</style>
</body>
</html>