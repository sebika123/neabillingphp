<head>
<title> Add Demand Rate Details</title>
</head>
<body>
<h2>The information you entered is: </h2>
<?php
    include("dbconnect.php");
    $POID = $_POST["poid"];
    $Name = $_POST["name"];
    $Status = $_POST["status"];
   
?>
<p>Payment Option ID: <?php echo $POID; ?><br>
<p>Name: <?php echo $Name; ?><br>
<p>Status: <?php echo $Status; ?><br>

<?php
include("dbconnect.php");
$query = "INSERT into payment_option(payment_id,name,status) VALUES('$POID','$Name','$Status');";
$result = mysqli_query($conn,$query);
if($result)
{
    echo "Data Inserted Succesfully";
}
else
{
    echo "ERROR: ".$query.":-".mysqli_error($conn);
}
mysqli_close($conn);
?>