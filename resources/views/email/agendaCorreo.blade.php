<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset ="UTF-8">
    <title>Document</title>
    <style>
        h1{
            color: #005fff;

        }
    </style>
</head>
<body>
<h1 style="font-family: 'Cooper Black';background-color: aliceblue";>MININOS</h1>
<p>Hola...</p>
<p>Recuerda que la cita para tu mascota fue agendada para:</p>
<p><strong style="font-family: 'Cooper Black'">Tipo Cita: </strong>{{$TipoCita_id_tipoCita}}</p>
<p><strong style="font-family: 'Cooper Black'">Fecha y Hora: </strong>{{$fecha_agenda}}</p>
<p><strong style="font-family: 'Cooper Black'">Mascota: </strong>{{$Mascota_id_mascota}}</p>
<p><strong style="font-family: 'Cooper Black'">Especialista: </strong>{{$Empleados_id_veterinario}}</p>
<p><strong style="font-family: 'Cooper Black'">Descripción: </strong>{{$descripcion}}</p>
<p>No olvides que si deseas cancelar la cita, la debes realizar con minimo 2 horas de antelación</p>
</body>
</html>
