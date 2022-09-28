<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
</head>
<body>
    <div>
        Nome: <b>{{$nome}}</b>
        <br>
        Idade: <b>{{$idade}}</b>
        <br>
        Altura: <b>{{$altura}}</b>
        <br>
        Peso: <b>{{$peso}}</b>
        <br>
        IMC: <b>{{$imc}}</b>
        <br>
        Sono: <b>{{$sono}}</b>
        <br>
        <a class="botao" href="{{URL('/')}}" title="voltar">Voltar</a>
    </div>
</body>
</html>