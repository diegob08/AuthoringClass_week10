<div id="content">
	<table class="col-sm-12 row" id="detailtable">

    	<?php
        	while($emp = mysqli_fetch_array($employees)) {
        		echo '<img class="img-responsive img-center" id="empimg" src="images/'.$emp['emp_image'].'" alt="'.$emp['emp_fname'].' '.$emp['emp_lname'].'">';
				echo '<h3 id="empname">'.$emp['emp_fname'].' '.$emp['emp_lname'].'</h3>';

				echo '<tr>';
				echo '<th class="col-sm-6">Job Title:</th>';
				echo '<td class="col-sm-6">'.$emp['emp_job'].'</td>';
				echo '</tr>';

				echo '<tr>';
				echo '<th class="col-sm-6">Start Date:</th>';
				echo '<td class="col-sm-6">'.$emp['emp_startdate'].'</td>';
				echo '</tr>';

				echo '<tr>';
				echo '<th class="col-sm-6">Email:</th>';
				echo '<td class="col-sm-6">'.$emp['emp_email'].'</td>';
				echo '</tr>';

				echo '<tr>';
				echo '<th class="col-sm-6">Phone Number:</th>';
				echo '<td class="col-sm-6">'.$emp['emp_phone'].'</td>';
				echo '</tr>';

				echo '<tr>';
				echo '<th class="col-sm-6">Birthday:</th>';
				echo '<td class="col-sm-6">'.$emp['emp_birthdate'].' (Age '.$emp['emp_age'].')</td>';
				echo '</tr>';
        	}

        ?>
	</table>
</div>