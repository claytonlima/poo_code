<?php require_once "classes/Cliente.php";

function filtrar($var)
{
    if($var->cpf==@$_GET['clienteCpf'] && @$_GET['estrela'] == '')
    {
        return true;
    }
    elseif($var->estrela==@$_GET['estrela'])
    {
        return true;
    }
    else{
        return false;
    }
}

$cliente = array(
    0 => new Cliente('Clayton Lima','111111111111','30','1','M','Rua perdida SP','PJ'),
    1 => new Cliente('Carol Lima','22222222222','45','5','F','Rua achei SP','PF'),
    2 => new Cliente('Geo Lima','33333333','55','3','F','Rua perdida SP','PJ'),
    3 => new Cliente('Bruno Lima','44444444','18','4','M','Rua perdida SP','PF'),
    4 => new Cliente('Lucas Lima','5555555555','14','2','M','Rua perdida SP','PF'),
    5 => new Cliente('Luan Lima','6666666','30','1','M','Rua perdida SP','PJ'),
    6 => new Cliente('Fernando Lima','9999999','25','3','M','Rua perdida SP','PF'),
    7 => new Cliente('Rodrigo Lima','4101010101','20','4','M','Rua perdida SP','PJ'),
    8 => new Cliente('Paula Lima','121212121212','28','5','M','Rua perdida SP','PJ'),
    9 => new Cliente('Eduardo Lima','131313131331','55','5','M','Rua perdida SP','PF')
);

if(@$_GET['ordenar']== 1){
    rsort($cliente);
}else{
    sort($cliente);
}

if(@$_GET['clienteCpf'] != 'todos' && @$_GET['estrela'] == ''){
    $filtro = array_filter($cliente,'filtrar');
}
elseif(@$_GET['clienteCpf'] == '' && @$_GET['estrela'] != '')
{
    $filtro = array_filter($cliente,'filtrar');
}
else{
    $filtro = $cliente;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trilhando o POO</title>
    <link href="bootstrap3/css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
</div>
<div class="form-group" style="width: 500px; margin:0 auto; margin-top: 10px;">
    <form action="index.php" method="GET">
        <label for="sel1">Clientes:</label>
        <select class="form-control" id="sel1" name="clienteCpf" style="margin-bottom: 10px;">
            <option value="">Escolher uma opção</option>
            <option value="todos">Todos</option>
            <?php
            foreach ($cliente as $clientes) : ?>
                <option value="<?php echo $clientes->cpf;?>"><?php echo $clientes->nome;?></option>
            <?php endforeach; ?>
        </select>

        <label for="sel1">Estrelas:</label>
        <select class="form-control" id="sel1" name="estrela" style="margin-bottom: 10px;">
            <option value="">Escolha uma opção</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>

        </select>
     <div>
         <fieldset>
            <input type="radio" name="ordenar" value="0">Ascendente<br>
            <input type="radio" name="ordenar" value="1" style="margin-bottom: 10px;">Descendente<br>
         </fieldset>
     </div>
         <button class="btn btn-info col-md-5 col-md-offset-1" style="width:225px; margin-left: 135px; margin-bottom: 20px"type="submit">Consultar</button>
    </form>

    <?php if(!empty($filtro)):?>
    <table style="width: 125%">
        <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Pessoa</th>
            <th>Estrelas</th>
            <th>Idade</th>
            <th>Sexo</th>
            <th>Endereço</th>
        </tr>
        </thead>
    <?php endif;?>
        <tbody>
        <?php $row_count = 1;?>
        <?php
        foreach ($filtro as $clientes):
            ?>
            <tr>
                <td><?php echo $row_count++; ?></td>
                <td><?php echo $clientes->nome ; ?></td>
                <td><?php echo $clientes->cpf; ?></td>
                <td><?php echo $clientes->pessoa; ?></td>
                <td><?php echo $clientes->estrela; ?></td>
                <td><?php echo $clientes->idade; ?></td>
                <td><?php echo $clientes->sexo; ?></td>
                <td><?php echo $clientes->endereco; ?></td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="bootstrap3/js/bootstrap.min.js"></script>
</body>
</html>