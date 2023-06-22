<head>
<title> Add Payment Details</title>
</head>
<body>
<h2>The information you entered is: </h2>
<?php
    include("dbconnect.php");
    $PID = $_POST["pid"];
    $BID = $_POST["bid"];
    $Pdate = $_POST["pdate"];
    $PAmount = $_POST["amount"];
    $PaymentTypeID = $_POST["paymenttypeid"];
    $RebateAmt = $_POST["rebate"];
    $FineAmt = $_POST["fine"];
    
?>
<p>Payment ID: <?php echo $PID; ?><br>
<p>Bill ID: <?php echo $BID; ?><br>
<p>Payment Date: <?php echo $Pdate; ?><br>
<p>Payment Amount: <?php echo $PAmount; ?><br>
<p>Payment Type ID: <?php echo $PaymentTypeID; ?><br>
<p>Rebate Amount: <?php echo $RebateAmt; ?><br>
<p>Fine Amount: <?php echo $FineAmt; ?><br>

<?php
include("dbconnect.php");
$query = "INSERT into payment(PID,BID,Pdate,PAmount,Payment_type_ID,Rebate_Amt,Fine_Amt) VALUES('$PID'$BID','$Pdate','$PAmount','$PaymentTypeID','$RebateAmt','$FineAmt');";
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
