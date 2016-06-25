<?php 


$rx = ReservationData::getRepeated($_POST["pacient_id"], $_POST["medic_id"], $_POST["date_at"], $_POST["time_at"]);
if($rx == null){
$r = new ReservationData();
$r->title = $_POST["title"];
$r->note = $_POST["note"];
$r->pacient_id = $_POST["pacient_id"];
$r->medic_id = $_POST["medic_id"];
$r->date_at = $_POST["date_at"];
$r->time_at = $_POST["time_at"];
$r->r_id = $_POST["r_id"];

$r->status_id = $_POST["status_id"];
$r->payment_id = $_POST["payment_id"];
$r->price = $_POST["price"];
$r->sick = $_POST["sick"];
$r->symtoms = $_POST["symtoms"];
$r->medicaments = $_POST["medicaments"];


$r->add();

print "<script>window.location='index.php?view=reservations';</script>";

}
// Core::redir("index.php?view=reservations");
// Core::alert("Agregado exitosamente!");
// }else{
// Core::alert("Error al agregar, Cita Repetida!");
// }

?>