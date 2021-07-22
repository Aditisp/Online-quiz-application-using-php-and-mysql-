<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		#header{
			height: 10%;
			width: 100%;
			top: 2%;
			background-color: #228B22;
			position: fixed;
			color: white;
			font-size: 16px;
			
		}
		#left_side{
			height: 75%;
			width: 15%;
			top: 10%;
			position: fixed;
		}
		#right_side{
			height: 75%;
			width: 80%;
			background-color: whitesmoke;
			position: fixed;
			left: 17%;
			top: 18%;
			color: red;
			border: solid 1px black;
		}
		#top_span{
			top: 15%;
			width: 80%;
			left: 17%;
			position: fixed;
		}
		table {
            margin: 0 auto;
            font-size: large;
            
        }
		tbody{
			color: black;
		}
		
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
  
        td {
            font-weight: lighter;
        }
		#td{
			border: 1px solid black;
			padding-left: 2px;
			text-align: center;
			width: 200px;
			background-color:#10e895;
		}
		.button {
				  background-color: #4CAF50;
				  border: none;
				  color: white;
				  padding: 15px 32px;
				  text-align: center;
				  text-decoration: none;
				  display: inline-block;
				  font-size: 16px;
				  margin: 4px 2px;
				  cursor: pointer;
				}
		a{
			color: white;
		}
		

	</style>
	<?php
		session_start();
		$name = "";
		$connection = mysqli_connect("localhost","root","aditi26");
		$db = mysqli_select_db($connection,"mpp");
	?>
</head>
<body>
	<div id="header"><br>
		<center>ADMIN PANEL </center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     
		<a href="logout.php" >Logout</a>
		
	</div>
	
	<div id="left_side">
		<br><br><br>
		<form action="" method="post">
			<table>
				<tr>
					<td>
						<br>

						<input type="submit" class="button" name="search_student" value="SEARCH STUDENT"><br><br>
						<input type="submit" class="button" name="edit_student" value=" EDIT  STUDENT    "><br><br>
						<input type="submit" class="button" name="add_new_student" value=" ADD  STUDENT    "><br><br>
						<input type="submit" class="button" name="delete_student" value="DELETE STUDENT"><br><br>
						<input type="submit" class="button" name="display_student" value="DISPLAY STUDENT"> <br><br>
						<a href="../Admin Panel/Tests_Company_Student_Add_Edit.php">
						<input type="button" class="button" value="   TEST   PANEL      ">  
						</a> <br>
						

						
						

					</td>
				</tr>
				
			</table>
		</form>
	</div>
	<div id="right_side"><br><br>
		<div id="demo">
		<!-- #Code for search student---Start-->
			<?php
				if(isset($_POST['search_student']))
				{
					?>
					<center>
					<form action="" method="post">
					&nbsp;&nbsp;<b>ENTER ROLL NO. :</b>&nbsp;&nbsp; <input type="text" name="roll_no">
					<input type="submit" name="search_by_roll_no_for_search" value="Search">
					</form><br><br>
					
					</center>
					<?php
				}
				if(isset($_POST['search_by_roll_no_for_search']))
				{
					$query = "select * from students where roll_no = '$_POST[roll_no]'";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?>
						<table>
							<tr>
								<td>
									<b>ROLL NO. :</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['roll_no']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>NAME :</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['name']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>FATHER'S NAME :</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['father_name']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>CLASS :</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['class']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>MOBILE :</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['mobile']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>EMAIL :</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['email']?>" disabled>
								</td>
							</tr>
							
							<tr>
								<td>
									<b>REMARK :</b>
								</td> 
								<td>
									<textarea rows="3" cols="40" disabled><?php echo $row['remark']?></textarea>
								</td>
							</tr>
						</table>

						<?php
					}
				}
			?>
		<!-- #Code for edit student details---Start-->
		<?php
			if(isset($_POST['edit_student']))
			{
				?>
				<center>
				<form action="" method="post">
				&nbsp;&nbsp;<b>ENTER ROLL NO. :</b>&nbsp;&nbsp; <input type="text" name="roll_no">
				<input type="submit" name="search_by_roll_no_for_edit" value="Search">
				</form><br><br>
				
				</center>
				<?php
			}
			if(isset($_POST['search_by_roll_no_for_edit']))
			{
				$query = "select * from students where roll_no = $_POST[roll_no]";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					?>
					<form action="admin_edit_student.php" method="post">
						<table>
						<tr>
							<td>
								<b>ROLL NO. :</b>
							</td> 
							<td>
								<input type="text" name="roll_no" value="<?php echo $row['roll_no']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>NAME :</b>
							</td> 
							<td>
								<input type="text" name="name" value="<?php echo $row['name']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>FATHER'S NAME :</b>
							</td> 
							<td>
								<input type="text" name="father_name" value="<?php echo $row['father_name']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>CLASS :</b>
							</td> 
							<td>
								<input type="text" name="class" value="<?php echo $row['class']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>MOBILE :</b>
							</td> 
							<td>
								<input type="text" name="mobile" value="<?php echo $row['mobile']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>EMAIL :</b>
							</td> 
							<td>
								<input type="text" name="email" value="<?php echo $row['email']?>">
							</td>
						</tr>
						
						<tr>
							<td>
								<b>REMARK :</b>
							</td> 
							<td>
								<textarea rows="3" cols="40" name="remark"><?php echo $row['remark']?></textarea>
							</td>
						</tr><br>
						<tr>
							<td></td>
							<td>
								<input type="submit" name="edit" value="Save">
							</td>
						</tr>
					</table>
					</form>
					<?php
				}
			}
		?>
		<!-- #Code for Delete student details---Start-->
		<?php
			if(isset($_POST['delete_student']))
			{
				?>
				<center>
				<form action="delete_student.php" method="post">
				&nbsp;&nbsp;<b>ENTER ROLL NO. :</b>&nbsp;&nbsp; <input type="text" name="roll_no">
				<input type="submit" name="search_by_roll_no_for_delete" value="Delete">
				</form><br><br>
				</center>
				<?php
			}
			?>

			<!-- add new student -->
			
			<?php 
				if(isset($_POST['add_new_student'])){
					?>
					<center><h4>Fill the given details</h4></center>
					<form action="add_student.php" method="post">
						<table>
							<center>
							<tr>
								<td>
									<b>ROLL NO. :</b>
								</td> 
								<td>
									<input type="text" name="roll_no" required>
								</td>
							</tr>
							<tr>
								<td>
									<b>NAME :</b>
								</td> 
								<td>
									<input type="text" name="name" required>
								</td>
							</tr>
							<tr>
								<td>
									<b>FATHER'S NAME:</b>
								</td> 
								<td>
									<input type="text" name="father_name" required>
								</td>
							</tr>
							<tr>
								<td>
									<b>CLASS :</b>
								</td> 
								<td>
									<input type="text" name="class" required>
								</td>
							</tr>
							<tr>
								<td>
									<b>MOBILE :</b>
								</td> 
								<td>
									<input type="text" name="mobile" required>
								</td>
							</tr>
							<tr>
								<td>
									<b>EMAIL :</b>
								</td> 
								<td>
									<input type="text" name="email" required>
								</td>
							</tr>
							
							<tr>
								<td>
									<b>REMARK :</b>
								</td> 
								<td>
									<textarea rows="3" cols="40" placeholder="Optional" name="remark"></textarea>
								</td>
							</tr>
							<tr>
								<td></td>
								<td><br><input type="submit" name="add" value="Add Student"></td>
							</tr>
						</table></center>
					</form>
					<?php
				}
			?>

<?php 
				if(isset($_POST['display_student']))
				{
				
					$query = "select * from students";
					$query_run = mysqli_query($connection,$query);
					
					?>
					<table class="table table-bordered table-hover table-striped" >
					
					<tbody>
					<tr>
						<th>ROLL NO</th>
						<th>NAME</th>
						<th>FATHER's NAME</th>
						<th>CLASS</th>
						<th>MOBILE</th>
						<th>EMAIL</th>
						<th>REMARK</th>
            		</tr>
					
					

                            <?php
                            while ($row = mysqli_fetch_assoc($query_run))
							{
                            
                            
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $row["roll_no"]; ?>
                                    </td>  <br>
                                    <td>
										
                                        <?php echo $row["name"]; ?></td>
                                    <td>
										<?php echo $row["father_name"];?>
									</td>
                                    <td>
									
									<?php echo $row["class"];?></td>
                                    <td>
										
									<?php echo $row["mobile"];?></td>
                                    <td>
									
									<?php echo $row["email"];?></td>
                                    <td>
										
									<?php echo $row["remark"];?></td>
                                </tr>

                                <?php
							}
						}
                            ?>
							
						
						</tbody>
						</table>
						
				
			
			



		</div>
	</div>
</body>
</html>