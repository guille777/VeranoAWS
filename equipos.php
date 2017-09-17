<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>equipos</title>
	<style>
		body{
			background-color: blue;
		}
		#uno{
			border: solid;
			background-color: red;
			text-align: center;
		}
		#dos{
			border: solid;
			background-color: yellow;
			text-align: center;
		}
		table{
    		font-family: arial, sans-serif;
    		border-collapse: collapse;
    		width: 100%;
		}
		td, th {
    		border: 1px solid #dddddd;
    		text-align: left;
    		padding: 8px;
		}
		h1, h2{
			text-align: center;
		}
		a{
			color: white;
		}
	</style>
</head>
<body>
	<h1>Listado de equipos:</h1>
	<div id="uno">
		<table border="1">
			<tr>
				<th>Equipo</th>
				<th>PJ</th>
				<th>V</th>
				<th>E</th>
				<th>D</th>
				<th>GF</th>
				<th>GC</th>
				<th>DG</th>
				<th>Pts</th>
			</tr>
			<tr>
				<td>Barcelona</td>
				<td>3</td>
				<td>3</td>
				<td>0</td>
				<td>0</td>
				<td>9</td>
				<td>0</td>
				<td>9</td>
				<td>9</td>
			</tr>
			<tr>
				<td>Madrid</td>
				<td>3</td>
				<td>0</td>
				<td>0</td>
				<td>3</td>
				<td>0</td>
				<td>20</td>
				<td>-20</td>
				<td>0</td>
			</tr>
		</table>
	</div>

<h1>Partidos:</h1>
	<div id="dos">
		<table border="1">
		<tr>
			<th>Local</th>
			<th>Visitante</th>
			<th>Dia</th>
			<th>Hora</th>
		</tr>
		<tr>
			<td>Barcelona</td>
			<td>Madrid</td>
			<td>21-10-2017</td>
			<td>21:00</td>
		</tr>
		


</table>


	</div>

<a href="index.php">Home</a>
</body>
</html>