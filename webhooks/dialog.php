<?php
//esto incluye la librería
include_once "../somos/somosdialog.php";
debug();


//credenciales('Ieqroobot','123456789');
// me conecto a db
$mysqli = mysqli_connect("localhost", "Erick_dialog", "@lberttT23", "Erick_dialog");

if (!$mysqli) {
	echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
	die();
}


if (intent_recibido("Partidos_politicos")) {
	$a2015 = "Partido Acción Nacional,
	       Partido Revolucionario Institucional,
				 Morena,
				 Partido del trabajo y
				 Movimiento ciudadano";
	$a2016 = " Sí claro, es el Partido Acción Nacional,
			 	    Partido Revolucionario Institucional,
			 			Morena,
			 		  Movimiento Naranja,
			 		  Movimiento ciudadano y Partido Verde";

$a2018 = "Partido Acción Nacional,
        	Partido Revolucionario Institucional,
	        Morena,
		      Partido del trabajo y
			    Movimiento ciudadano";
$a2019 = "Partido Acción Nacional,
					Partido Revolucionario Institucional,
				  Morena,
				 Partido del trabajo y
				Movimiento ciudadano";
  $anos = obtener_variables()['year'];
  $pp = obtener_variables()['PartidosPoliticos'];

	if ($anos == null and $pp == null ) {
  enviar_texto("$a2016");
  }

  if ($anos == "2015" or $anos == "2016" or $anos == "2017" or $anos == "2018" or $anos == "2019" ) {
  enviar_texto("Los partidos políticos acreditados ante el Instituto Estatal Electoral del año $anos son el $a2015");
  } else {
		enviar_texto("El año $anos dado es inválido, podrías repetirme la pregunta con un año válido");
	}

}

if (intent_recibido("Candidatos")){
	$anos = obtener_variables()['year'];
  $pp = obtener_variables()['date-period'];
	$candidatos = "Jorge Balam Pérez candidato del Pan,
						Roberto Canto Gómez candidato del pri,
						Raul Kun Reyes Pat candidato de Morena
						Regina Fuentes Flores candidato del Pt
						y Flor Margarita Girasol candidato de Mc";

	if ($anos == null and $pp == null ) {
					  enviar_texto("Los candidatos son: $candidatos");
		}

}

if (intent_recibido("pp_representantes")){
	$anos = obtener_variables()['year'];
	$representantes = "Carlos Po Pérez representante del Pan,
						Gilberto Matu Gómez representante del del pri,
						Cristina flores Reyes Pato representante de Morena,
						Zarina Goroza Sánchez representante del Pt
						y Flora Ángel Carrillo representante de Mc";

	if ($anos == null and $pp == null ) {
					  enviar_texto("Los representantes son: $representantes");
		}

}

/*function consulta_stock($sabor){
  global $mysqli;
  $resultado = $mysqli->query("SELECT `Nombres` FROM `partidosp`");
  $stock = mysqli_fetch_assoc($resultado);
  $cantidad = $stock[$sabor];
  return $cantidad;
}*/



 ?>
