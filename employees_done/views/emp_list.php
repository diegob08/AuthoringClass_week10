<div id="content">
<ul>
<?php
while($emp = mysqli_fetch_array($employees)) {
	echo '<li><a href="index.php?id='.$emp['emp_id'].'">'.$emp['emp_fname'].' '.$emp['emp_lname'].'</a></li>';
}
?>
</ul>
</div>