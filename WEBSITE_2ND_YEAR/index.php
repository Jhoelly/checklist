<?php include('header.php'); ?>
<?php include('db_con.php') ?>
    <br>
				<h2>STUDENT INFORMATION</h2>
		<br>
		<table class="table table-hover table-bordered table-striped">
			<thead>
				<tr>
					<th>Student Number</th>
					<th>Full name</th>
					<th>University</th>
					<th>Program</th>
					<th>Address</th>
					<th>Contact Number</th>
					<th>Date of Admission</th>
				</tr>
			</thead>
			<tbody>
				<?php 
                    $query = "SELECT * FROM `students`";

                    $result = mysqli_query($connection, $query);

                    if(!$result){
                    	die("query failed".mysql_error());
                    }
                    else {
                    	
                    	while($row = mysqli_fetch_assoc($result)) {
                    		?>
                             <tr>
                         <td><?php echo $row['student_number']; ?></td>
					               <td><?php echo $row['full_name']; ?></td>
					               <td><?php echo $row['university']; ?></td>
					               <td><?php echo $row['program']; ?></td> 					                     
					               <td><?php echo $row['address']; ?></td>
					               <td><?php echo $row['contact_number']; ?></td>
					               <td><?php echo $row['date_of_admission']; ?></td> 					               
					         </tr>
                    		<?php
                    	}
                    }
				?>
			</tbody>
			
		</table>

		<?php

		if (isset($_GET['message'])) {
			echo "<h6>".$_GET['message']."</h6>";
		}

		  ?>

		 <?php

		if (isset($_GET['insert_msg'])) {
			echo "<h6>".$_GET['insert_msg']."</h6>";
		}

		  ?>
		  <table class="table table-hover table-bordered table-striped">
			<thead>
				<tr>
					<th>Course Code</th>
					<th>Course Title</th>
					<th>Credit Unit</th>
					<th>Contact hours</th>
					<th>Instructor</th>
				</tr>
			</thead>
			<tbody>
								<?php 
                    $query = "SELECT * FROM `courses`";

                    $result = mysqli_query($connection, $query);

                    if(!$result){
                    	die("query failed".mysql_error());
                    }
                    else {
                    	
                    	while($row = mysqli_fetch_assoc($result)) {
                    		?>
                             <tr>
                         <td><?php echo $row['course_code']; ?></td>
					               <td><?php echo $row['course_title']; ?></td>       
					               <td><?php echo $row['credit_unit']; ?></td>
					               <td><?php echo $row['contact_hrs']; ?></td>
					               <td><?php echo $row['instructor_id']; ?></td>
					         </tr>
                    		<?php
                    	}
                    }
				?>
			</tbody>
		</table>
			
<?php include('footer.php'); ?>