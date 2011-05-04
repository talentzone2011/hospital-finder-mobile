<?php 
$sector=array(0=>"sector", 1=>"Norte", 2=>"Centro", 3=>"Sur");
$tipo=array(0=>"tipo", 1=>"Hospital", 2=>"Clinica", 3=>"Farmacia");
$especialidad=array(0=>"especialidad", 1=>"Medicina General", 2=>"Cardiologia", 3=>"Oncologia", 4=>"Radiologia", 5=>"Neurologia", 6=>"Pediatria");
for($i=0; $i<10; $i++){
$hospital[$i]="$tipo esta en el $sector y especialidad $especialidad";
}
if (is_array($_REQUEST)&&count($_REQUEST>1))
{
	//print_r($_REQUEST);
	$eleccion=$_REQUEST['sector'];
	$nombre=$hospital[$eleccion];
	echo $eleccion;	
}
else
{
	echo "no hay post";
}
?>