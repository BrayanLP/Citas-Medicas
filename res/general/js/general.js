$(document).ready(function(){ 
    $('select').material_select();
 	$('.perfil .cont-img').on('click',function(){
 		$('.perfil ul').toggleClass('show');
 	})
 	$(".button-collapse").sideNav();
    $('.datepicker').pickadate({
	    selectMonths: true, // Creates a dropdown to control month
	    selectYears: 15 // Creates a dropdown of 15 years to control year
	  });
         
})
 $(function () {
    $('#datetimepicker1').datetimepicker();
 });