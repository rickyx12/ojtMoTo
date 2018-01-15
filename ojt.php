<?php

require "database.php";
require "Time.php";

$db = new database();
$studentTime = new Time();

$totalHr = 0;
$totalMin = 0;

$studentTime->getTimeSheet();
?>


<<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
	<table border="1" cellspacing="0" cellpadding="1">
		<thead>
			<tr>
				<th>Date</th>
				<th>In</th>
				<th>Out</th>
				<th>Hours</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($studentTime->getTimeSheet_time() as $id): ?>
				<tr>
					<td>
						<?= $db->formatDate($db->selectNow('timeSheet','date','id',$id)) ?>
					</td>
					<td>
						<?php
							$timeIn = $db->selectNow('timeSheet','timeIn','id',$id);
							$timeIns = preg_split('/\s+/', $timeIn);
							echo $db->formatTime($timeIns[1]);
						?>
					</td>
					<td>
						<?php
							$timeOut = $db->selectNow('timeSheet','timeOut','id',$id);
							$timeOuts = preg_split('/\s+/', $timeOut);
							echo $db->formatTime($timeOuts[1]);
						?>
					</td>
					<td>
						<?php
							$hrsRendered = $studentTime->hoursRendered($timeIn,$timeOut);
							$totalHr +=  $studentTime->totalHour($hrsRendered);
							 $totalMin += $studentTime->totalMin($hrsRendered);
							echo $hrsRendered;
						?>
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
		<tfoot>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td>
					<b>
						<?php
							if( $totalMin >= 60 ) {
								$totalHr += 1;
								$totalMin -= 60;
							}
							echo $totalHr." hrs and ".$totalMin." mins";	
							
						?>
					</b>
				</td>
			</tr>
		</tfoot>
	</table>
</body>
</html>