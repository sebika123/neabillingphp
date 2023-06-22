<head>
<title> Add Bill Details</title>
</head>
<body>
<h2>The information you entered is: </h2>
<?php
    include("dbconnect.php");
    $BID = $_POST["bid"];
    $BYear = $_POST["year"];
    $BMonth = $_POST["month"];
    $CUSID = $_POST["cusid"];
    $Current = $_POST["curr-read"];
    $Previous = $_POST["prev-read"];
    $BAmount = $_POST["bamount"];
    
?>
<p>Bill ID: <?php echo $BID; ?><br>
<p>Bill Year: <?php echo $BYear; ?><br>
<p>Bill Month: <?php echo $BMonth; ?><br>
<p>Customer ID: <?php echo $CUSID; ?><br>
<p>Current Reading: <?php echo $Current; ?><br>
<p>Previous Reading: <?php echo $Previous; ?><br>
<p>Bill Amount: <?php echo $BAmount; ?><br>

<?php
include("dbconnect.php");
$query = "INSERT into bill(bill_id,Bmonth,Byear,customerid,current_reading,previous_reading,bill_amount) VALUES('$BID','$BMonth','$BYear','$CUSID','$Current','$Previous','$BAmount');";
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