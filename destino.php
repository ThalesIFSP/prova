<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body class="container">
    <?php
    $urlImage = filter_input(INPUT_POST, "urlImage", FILTER_DEFAULT);
    $show = filter_input(INPUT_POST, "show", FILTER_DEFAULT);
    ?>


    <?= $show == 'inline' ?
        "<img src='$urlImage' class='img' heigth=100 width=200 />" : ''
    ?>

    <style>
        .img {
            height: 200;
            width: 200;
        }

        body {
            background-image: <?= $show == 'background' ? 'url("aguia.webp")' : '' ?>;

        }
    </style>
</body>

</html>