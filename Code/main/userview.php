<html>

<head>
	<title>
		HOSTEL:: USERS
	</title>

	<?php
	require_once('auth.php');
	?>
	<link href="css/bootstrap.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">

	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
	<style type="text/css">
		body {
			padding-top: 60px;
			padding-bottom: 40px;
			background-color: #DDC6B6;
		}

		.sidebar-nav {
			padding: 90px 10px;
		}
	</style>
	<link href="css/bootstrap-responsive.css" rel="stylesheet">

	<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
	<script src="jeffartagame.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
	<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
	<script src="lib/jquery.js" type="text/javascript"></script>
	<script src="src/facebox.js" type="text/javascript"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$('a[rel*=facebox]').facebox({
				loadingImage: 'src/loading.gif',
				closeImage: 'src/closelabel.png'
			})
		})
	</script>
</head>
<?php
function createRandomPassword()
{
	$chars = "003232303232023232023456789";
	srand((float) microtime() * 1000000);
	$i = 0;
	$pass = '';
	while ($i <= 7) {

		$num = rand() % 33;

		$tmp = substr($chars, $num, 1);

		$pass = $pass . $tmp;

		$i++;
	}
	return $pass;
}
$finalcode = 'RS-' . createRandomPassword();
?>

<script>
	function sum() {
		var txtFirstNumberValue = document.getElementById('txt1').value;
		var txtSecondNumberValue = document.getElementById('txt2').value;
		var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue);
		if (!isNaN(result)) {
			document.getElementById('txt3').value = result;

		}

		var txtFirstNumberValue = document.getElementById('txt11').value;
		var result = parseInt(txtFirstNumberValue);
		if (!isNaN(result)) {
			document.getElementById('txt22').value = result;
		}

		var txtFirstNumberValue = document.getElementById('txt11').value;
		var txtSecondNumberValue = document.getElementById('txt33').value;
		var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
		if (!isNaN(result)) {
			document.getElementById('txt55').value = result;

		}

		var txtFirstNumberValue = document.getElementById('txt4').value;
		var result = parseInt(txtFirstNumberValue);
		if (!isNaN(result)) {
			document.getElementById('txt5').value = result;
		}

	}
</script>


<script language="javascript" type="text/javascript">
	< !--Begin
	var timerID = null;
	var timerRunning = false;

	function stopclock() {
		if (timerRunning)
			clearTimeout(timerID);
		timerRunning = false;
	}

	function showtime() {
		var now = new Date();
		var hours = now.getHours();
		var minutes = now.getMinutes();
		var seconds = now.getSeconds()
		var timeValue = "" + ((hours > 12) ? hours - 12 : hours)
		if (timeValue == "0") timeValue = 12;
		timeValue += ((minutes < 10) ? ":0" : ":") + minutes
		timeValue += ((seconds < 10) ? ":0" : ":") + seconds
		timeValue += (hours >= 12) ? " P.M." : " A.M."
		document.clock.face.value = timeValue;
		timerID = setTimeout("showtime()", 1000);
		timerRunning = true;
	}

	function startclock() {
		stopclock();
		showtime();
	}
	window.onload = startclock;
	-->
</SCRIPT>

<body>
	<?php include('navfixed.php'); ?>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span2">
				<div class="well sidebar-nav">
					<ul class="nav nav-list">
						<li><a href="index.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li>
						<li><a href="#"><i class="icon-group icon-2x"></i> Manage Users</a> </li>

						<br><br>


					</ul>
				</div>
			</div>
			<div class="span10">
				<div class="contentheader">
					<i class="icon-table"></i> Users Information
				</div>
				<ul class="breadcrumb">
					<li><a href="index.php">Dashboard</a></li> /
					<li class="active">Users</li>
				</ul>


				<div style="margin-top: -19px; margin-bottom: 21px;">
					<a href="index.php"><button class="btn btn-default btn-large" style="float: left;"><i
								class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
					<?php
					include('../connect.php');
					$result = $db->prepare("SELECT * FROM user ORDER BY id ASC");
					$result->execute();
					$rowcount = $result->rowcount();
					?>


					<div style="text-align:center;">
						Total Number of Users: <font color="green" style="font:bold 22px 'Aleo';">[
							<?php echo $rowcount; ?>]
						</font>
					</div>


				</div>
				<table id="example" class="display" style="width:100%; background-color: white;">
					<thead style="background-color: black; color: white;">
						<tr>


							<th width="10%"> User ID </th>
							<th width="20%"> Name </th>
							<th width="20%"> Mobile Number </th>
							<th width="15%"> Username </th>
							<th width="15%"> Password </th>
							<th width="15%"> Action </th>
						</tr>
					</thead>
					<tbody>

						<?php

						include('../connect.php');
						$result = $db->prepare("SELECT * FROM user ORDER BY id ASC");
						$result->execute();
						for ($i = 0; $row = $result->fetch(); $i++) {

							?>


							<td>
								<?php echo $row['id']; ?>
							</td>
							<td>
								<?php echo $row['name']; ?>
							</td>
							<td>
								<?php echo $row['number']; ?>
							</td>
							<td>
								<?php echo $row['username']; ?>
							</td>
							<td>
								<?php echo $row['password']; ?>
							</td>
							<td><a title="Click to view the User"
									href="userdetails.php?id=<?php echo $row['id']; ?>"><button
										class="btn btn-success btn-mini"><i class="icon-search"></i> View</button> </a>
								<a href="#" id="<?php echo $row['id']; ?>" class="delbutton" title="Click To Delete"><button
										class="btn btn-danger btn-mini"><i class="icon-trash"></i> Delete</button></a>
							</td>
							</tr>
							<?php
						}
						?>



					</tbody>
				</table>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

	<script src="js/jquery.js"></script>
	<script type="text/javascript">
			$(function () {


				$(".delbutton").click(function () {

					var element = $(this);

					var del_id = element.attr("id");

					var info = 'id=' + del_id;
					if (confirm("Sure you want to delete this user? There is NO undo!")) {

						$.ajax({
							type: "GET",
							url: "deleteuser.php",
							data: info,
							success: function () {

							}
						});
						$(this).parents(".record").animate({
							backgroundColor: "#fbc7c7"
						}, "fast")
							.animate({
								opacity: "hide"
							}, "slow");

					}

					return false;

				});

			});
	</script>
	<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
	<script src="//code.jquery.com/jquery-3.5.1.js"></script>
	<script>
		$('#example').DataTable();
	</script>
</body>
<?php include('footer.php'); ?>

</html>