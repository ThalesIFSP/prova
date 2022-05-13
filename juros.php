<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <?php
    $price = filter_input(INPUT_GET, "price", FILTER_DEFAULT);

    $priceD = $price * 0.95;

    $price3 = $price / 3;

    $priceA5 = $price * 1.05;
    $price5 =  $priceA5 / 5;

    $priceA1 = $price * 1.1;
    $price12 =  $priceA5 / 12;

    $priceA15 = $price * 1.15;
    $price18 =  $priceA15 / 18;
    ?>

    <style>
        .green {
            color: green;
            font-weight: bold;
        }

        .red {
            color: red;
            font-weight: bold;
        }

        .strong {
            font-weight: bold;
        }
    </style>

</head>

<body class="container">

    <form action="juros.php" method="get">
        <div class="form-group col-md-6">
            <h1>Calculador de Juros</h1>
        </div>

        <div class="form-group col-md-6">
            <label for="price">Preço:</label>
            <input type="number" id="price" name="price" class="form-control" />
        </div>


        <div class="form-group col-md-3">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <button type="reset" class="btn btn-secondary">Limpar</button>
        </div>

    </form>




    <?= $price ? "
     <p>O preço informado é <span class='strong'>R$$price </span></p>
     <p>As condições de pagamento são:</p>
     <ul>
        <li>à vista <strong>R$ $priceD </strong> <span class='green'>(5% de desconto)</span></li>
        <li>parcelado em 3x de <strong>R$$price3</strong> totalizando <strong>R$$price</strong> </li>
        <li>parcelado em 5x de <strong>R$$price5 </strong> totalizando <strong>R$$priceA5 </strong> <span class='red'>(5% de acréscimo)</span></li>
        <li>parcelado em 12x de <strong>R$$price12 </strong> totalizando <strong>R$$priceA1</strong> <span class='red'>(10% de acréscimo)</span></li>
        <li>parcelado em 18x de <strong>R$$price18 </strong> totalizando <strong>R$$priceA15</strong> <span class='red'>(15% de acréscimo)</span></li>
    </ul>
    " : ''
    ?>


</body>

</html>