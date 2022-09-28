<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações</title>
</head>
<body>
    <form action="{{url('/resultado')}}" method="get">
        <div>
            <h2><b>Calculo do IMC</b></h2>
            <label>Nome:</label>
            <input type="text" name="nome">
            <br>
            <label>Data de Nascimento (dd/mm/aaaa):</label>
            <input type="text" name="datanasci">
            <br>
            <label>Peso (kg):</label>
            <input type="text" name="peso">
            <br>
            <label>Altura (m):</label>
            <input type="text" name="altura">
            <br>
            <label>Tempo de sono (em horas):</label>
            <input type="text" name="sono">
            <br>
            <input type="submit" name="enviar" value="Enviar">
        </div>
    </form>
</body>
</html>