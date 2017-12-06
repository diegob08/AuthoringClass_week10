<!-- Page Content -->
<div class="container">
    <!-- Introduction Row -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Personnel Information</h1>
        </div>
    </div>

    <!-- Team Members Row -->
    <div class="row" id="emptable">
    	<table class="col-sm-12 row">
    		<tr>
                <th class="col-sm-1">Picture</th>
                <th class="col-sm-3">First name</th>
                <th class="col-sm-3">Last name</th>
                <th class="col-sm-3">Job Title</th>
                <th class="col-sm-2"></th>
          	</tr>

        	<?php
	        	while($emp = mysqli_fetch_array($employees)) {
	        		echo '<tr>';
					echo '<td><img class="img-responsive img-center" id="empimg" src="images/'.$emp['emp_thumb'].'" alt="'.$emp['emp_fname'].' '.$emp['emp_lname'].'"></td>';
					echo '<td>'.$emp['emp_fname'].'</td>';
					echo '<td>'.$emp['emp_lname'].'</td>';
					echo '<td>'.$emp['emp_job'].'</td>';
					echo '<td><a href="index.php?id='.$emp['emp_id'].'">Details</a>';
					echo '</tr>';
	        	}

            ?>
        </table>
    </div>
