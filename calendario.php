<link rel="shortcut icon" href="img/de.ico">


<!DOCTYPE html>
<html lang="es">
<head>
	<!--http://www.lawebdelprogramador.com-->
	<title><center>CASG</title>
	<meta charset="utf-8">
	<style>
		#calendar {
			position: absolute;
              left: 35%;
              right: 45%;
              top: 26s%;
			font-family:Arial;
			font-size:19px;
		}
		#calendar caption {
			text-align:center;
			padding:30px 30px;
			background-color:#003366;
			color:#fff;
			font-weight:bold;
			font-size:medium;
			position: center;
		}
		#calendar caption div:nth-child(1) {float:left;}
		#calendar caption div:nth-child(2) {float:right;}
		#calendar caption div:nth-child(2) a {cursor:pointer;}
		#calendar th {
			background-color:black;
			color:#fff;
			width:100px;

			position: center;
		}
		#calendar td {
			text-align:center;
			padding:
			35px 35px;
			background-color:white;
			position: center;
		}
		#calendar .hoy {
			background-color:gray;
			opacity:0.8;

		}
	</style>
</head>
 
<body>
 
<h1><center></h1>
<table id="calendar">
	<caption></caption>
	<thead>
		<tr>
			<th><h4>Lun</th><th><h4>Mar</th><th><h4>Mie</th><th><h4>Jue</th><th><h4>Vie</th><th><h4>Sab</th><th><h4>Dom</h4></th>
		</tr>
	</thead>
	<tbody>
	</tbody>
</table>
 
</body>
</html>
 
<script>
var actual=new Date();
function mostrarCalendario(year,month)
{
	var now=new Date(year,month-1,1);
	var last=new Date(year,month,0);
	var primerDiaSemana=(now.getDay()==0)?7:now.getDay();
	var ultimoDiaMes=last.getDate();
	var dia=0;
	var resultado="<tr bgcolor='silver'>";
	var diaActual=0;
	console.log(ultimoDiaMes);
 
	var last_cell=primerDiaSemana+ultimoDiaMes;
 
	// hacemos un bucle hasta 42, que es el máximo de valores que puede
	// haber... 6 columnas de 7 dias
	for(var i=1;i<=42;i++)
	{
		if(i==primerDiaSemana)
		{
			// determinamos en que dia empieza
			dia=1;
		}
		if(i<primerDiaSemana || i>=last_cell)
		{
			// celda vacia
			resultado+="<td>&nbsp;</td>";
		}else{
			// mostramos el dia
			if(dia==actual.getDate() && month==actual.getMonth()+1 && year==actual.getFullYear())
				resultado+="<td class='hoy'>"+dia+"</td>";
			else
				resultado+="<td>"+dia+"</td>";
			dia++;
		}
		if(i%7==0)
		{
			if(dia>ultimoDiaMes)
				break;
			resultado+="</tr><tr>\n";
		}
	}
	resultado+="</tr>";
 
	var meses=Array("<h3>Enero", "<h3>Febrero", "<h3>Marzo", "<h3>Abril", "<h3>Mayo", "<h3>Junio", "<h3>Julio", "<h3>Agosto", "<h3>Septiembre", "<h3>Octubre", "<h3>Noviembre", "<h3>Diciembre");
 
	// Calculamos el siguiente mes y año
	nextMonth=month+1;
	nextYear=year;
	if(month+1>12)
	{
		nextMonth=1;
		nextYear=year+1;
	}
 
	// Calculamos el anterior mes y año
	prevMonth=month-1;
	prevYear=year;
	if(month-1<1)
	{
		prevMonth=12;
		prevYear=year-1;
	}
 
	document.getElementById("calendar").getElementsByTagName("caption")[0].innerHTML="<div>"+meses[month-1]+" / "+year+"</div><div><a onclick='mostrarCalendario("+prevYear+","+prevMonth+")'>&lt;</a> <a onclick='mostrarCalendario("+nextYear+","+nextMonth+")'>&gt;</a></div>";
	document.getElementById("calendar").getElementsByTagName("tbody")[0].innerHTML=resultado;
}
 
mostrarCalendario(actual.getFullYear(),actual.getMonth()+1);
</script>