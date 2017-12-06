<?php
$q=$_GET['searchstring'];
if($q!=NULL) {
$connection = mysqli_connect('localhost', 'root', 'root', 'ajaxsearch');
$sql="SELECT * FROM tbl_customers WHERE customer_lastname LIKE '".$q."%'";
$result = mysqli_query($connection, $sql);
$numrows = mysqli_num_rows($result);
if($numrows > 0) {
while($row = mysqli_fetch_array($result)) {
 print "<a href=\"#\" onclick=\"displayInfo(".$row['customer_id'].")\">".$row['customer_lastname'].", ".$row['customer_firstname']."</a>";
 }

}else{
print "No results match your search";
}
}
?>