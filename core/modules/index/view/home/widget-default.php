 <?php

$events = ReservationData::getEvery();
$thejson = [];
foreach($events as $event){

	$thejson = array(
		"title"=>$event->title,
		//"url"=>"./?view=editreservation&id=".$event->id,
		"start"=>$event->date_at);
// 
}
 //  ."T".$event->time_at   print_r(json_encode($thejson));


?> 
<script> 

	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			//defaultDate: true,
			editable: false,
			eventLimit: true,  
			events: [<?php print json_encode($thejson); ?>
			] 
		});
		console.log("paso");
	});

</script> 
		<h1>Calendario</h1> 
		<div class="cont-total">
			<div id="calendar"></div>
		</div>
		



  