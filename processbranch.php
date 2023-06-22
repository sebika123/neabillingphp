<head>
<title> Add branch</title>
</head>
<body>
<h2>The information you entered is: </h2>
<?php
    include("dbconnect.php");
    $BID = $_POST["branch-id"];
    $BName = $_POST["name"];
    $Bstatus = $_POST["status"];
?>
<p>Branch ID: <?php echo $BID; ?><br>
<p>Branch Name: <?php echo $BName; ?><br>
<p>Branch Status: <?php echo $Bstatus; ?><br>
<?php
include("dbconnect.php");
$query = "INSERT into branch(branch_id,name,status) VALUES('$BID','$BName','$Bstatus');";
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