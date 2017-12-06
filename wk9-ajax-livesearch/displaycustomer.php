<?php
$q=$_GET['custid'];
$connection = mysqli_connect('localhost', 'root', 'root', 'ajaxsearch');
$sql="SELECT * FROM tbl_customers WHERE customer_id =".$q;
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_array($result);

print "<img src=\"".$row['customer_photo']."\"><div>".$row['customer_lastname'].", ".$row['customer_firstname']."<br />".$row['customer_job']." <br /> ".$row['customer_city']."</div>";

?>