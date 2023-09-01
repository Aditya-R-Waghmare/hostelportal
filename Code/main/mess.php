<html>

<head>
	<title>HOSTEL :: MESS</title>
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
						<li><a href="#"><i class="icon-group icon-2x"></i> Manage Mess</a> </li>
						<li><a href="addmess.php"><i class="icon-group icon-2x"></i> Add Food</a> </li>

						<br><br>


					</ul>
				</div>
			</div>
			<div class="span10">
				<div class="contentheader">
					<i class="icon-table"></i> Mess Details
				</div>
				<ul class="breadcrumb">
					<li><a href="index.php">Dashboard</a></li> /
					<li class="active">Mess Details</li>
				</ul>


				<div style="margin-top: -19px; margin-bottom: 21px;">
					<a href="index.php"><button class="btn btn-default btn-large" style="float: left;"><i
								class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
					<?php
					include('../connect.php');
					$result = $db->prepare("SELECT * FROM mess");
					$result->execute();
					$rowcount = $result->rowcount();
					?>
				</div>



				<a href="addmess.php"><button type="submit" class="btn btn-info"
						style="float:right; width:300px; height:40px;" /><i class="icon-plus-sign icon-large"></i> Add
					Food</button></a><br><br>
				<table class="hoverTable" id="resultTable" data-responsive="table" style="text-align: center;">
					<thead>
						<tr>
							<th width="10%"> Day</th>
							<th width="17%"> Lunch </th>
							<th width="17%"> Dinner </th>
							<th width="15%"> Action </th>
						</tr>
					</thead>
					<tbody>

						<?php

						include('../connect.php');
						$result = $db->prepare("SELECT * FROM mess");
						$result->execute();
						for ($i = 0; $row = $result->fetch(); $i++) {

							?>

							<td>
								<?php echo $row['day']; ?>
							</td>
							<td>
								<?php echo $row['lunch']; ?>
							</td>
							<td>
								<?php echo $row['dinner']; ?>
							</td>

							<td>
								<a title="Click to view the Foods" href="viewmess.php?id=<?php echo $row['day']; ?>"><button
										class="btn btn-success btn-mini"><i class="icon-search"></i> View</button> </a>
								<a title="Click to edit the Foods" href="editmess.php?id=<?php echo $row['day']; ?>"
									style="margin:15px;"><button class="btn btn-warning btn-mini"><i
											class="icon-edit"></i>Edit</button> </a>
								<a href="#" id="<?php echo $row['day']; ?>" class="delbutton"
									title="Click To Delete"><button class="btn btn-danger btn-mini"><i
											class="icon-trash"></i> Delete</button></a>
							</td>
							</tr>
							<?php
						}
						?>

					</tbody>
				</table>

				<center>

					<hr width="100%" size="5" color="black" noshade>
					<h2>Breakfast details:</h2>

					<center>

						<table id="example" class="display" style="width:100%; background-color: white;">
							<thead style="background-color: black; color: white;">
								<tr>
									<th width="15%"> Student Name</th>
									<th width="15%"> USN </th>
									<th width="15%"> Order ID </th>
									<th width="15%"> Breakfast </th>
								</tr>
							</thead>

							<tbody>

								<?php
								$dt = date('Y-m-d');
								include('../connect.php');
								$result = $db->prepare("SELECT * FROM `breakfast` WHERE date >= '$dt';");
								$result->execute();
								for ($i = 0; $row = $result->fetch(); $i++) {

									?>

									<td>
										<?php echo $row['sname']; ?>
									</td>
									<td>
										<?php echo $row['usn']; ?>
									</td>
									<td>
										<?php echo $row['orderid']; ?>
									</td>
									<td>
										<?php echo $row['bfast']; ?>
									</td>


									</tr>
									<?php
								}
								?>

							</tbody>

						</table>
					</center>

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
					if (confirm("Sure you want to delete this? There is NO undo!")) {

						$.ajax({
							type: "GET",
							url: "deletemess.php",
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