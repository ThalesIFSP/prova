<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



</head>

<body class="container">

    <form action="destino.php" method="post">
        <div class="form-group col-md-6">
            <h1>Formulário</h1>
        </div>

        <div class="row form-group col-md-12">
            <div class="form-group col-md-6">
                <label for="urlImage">URL de imagem:</label>
                <input type="url" id="urlImage" name="urlImage" class="form-control" />
            </div>
            <div class="form-group col-md-6">
                <label for="show">Mostrar:</label>
                <select id="show" name="show" class="form-control" required>
                    <option value='inline'>Inline</option>
                    <option value='background'>Background</option>

                </select>
            </div>
        </div>



        <div class="form-group col-md-3">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <button type="reset" class="btn btn-secondary">Limpar</button>
        </div>

    </form>


</body>

</html>