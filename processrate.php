<head>
<title> Add Demand Rate Details</title>
</head>
<body>
<h2>The information you entered is: </h2>
<?php
    include("dbconnect.php");
    $DRID = $_POST["drid"];
    $Demandtype = $_POST["demandtypeid"];
    $Rate = $_POST["rate"];
    $EffectiveDate = $_POST["effectivedate"];
    $IsCurrent = $_POST["iscurrent"];
    
?>
<p>Demand Rate ID: <?php echo $DRID; ?><br>
<p>Demand Type ID: <?php echo $Demandtype; ?><br>
<p>Rate: <?php echo $Rate; ?><br>
<p>Effective Date: <?php echo $EffectiveDate; ?><br>
<p>IsCurrent: <?php echo $IsCurrent; ?><br>

<?php
include("dbconnect.php");
$query = "INSERT into demandrate(DRID,demand_type_id,rate,effective_date,isCurrent) VALUES('$DRID','$Demandtype','$Rate','$EffectiveDate','$IsCurrent');";
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