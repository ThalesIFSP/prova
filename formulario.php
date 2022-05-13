<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



</head>

<body class="container">

    <form action="destino.php" method="post">
        <div class="form-group col-md-6">
            <h1>Praticando 1</h1>
        </div>

        <div class="form-group col-md-6">
            <label for="title">Título da página:</label>
            <input type="text" id="title" name="title" class="form-control" required />
        </div>

        <div class="form-group col-md-6">
            <label for="body">Corpo:</label>
            <textarea type="text" id="body" name="body" class="form-control" required></textarea>
        </div>

        <div class="form-group col-md-6">
            <label for="repeat">Repetir o corpo?:</label>
            <select id="repeat" name="repeat" class="form-control" required>
                <?php
                for ($i = 1; $i < 10; $i++) {
                    if ($i == 1) {
                        echo "<option value='$i'>Não repetir</option>";
                    } else {
                        echo "<option value='$i'>$i</option>";
                    }
                } ?>

            </select>
        </div>

        <div class="row form-group col-md-6">
            <div class="form-group col-md-6">
                <label for="textColor">Cor texto:</label>
                <input type="color" id="textColor" name="textColor" class="form-control" required />
            </div>

            <div class="form-group col-md-6">
                <label for="backgroundColor">Cor de fundo da página:</label>
                <input type="color" id="backgroundColor" name="backgroundColor" class="form-control" required />
            </div>

        </div>

        <div class="form-group col-md-6">
            <label for="urlLink">URL de link:</label>
            <input type="url" id="urlLink" name="urlLink" class="form-control" />
        </div>



        <div class="form-group col-md-3">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <button type="reset" class="btn btn-secondary">Limpar</button>
        </div>

    </form>


</body>

</html>