<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Validação de CPF</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <style>
             .title-container {
                        padding: 10px;
                        width: 50%;
                        height: 50px;
                        background-color: #00DBDE;
                        background-image: linear-gradient(90deg, #00DBDE 0%, #FC00FF 100%);
                        margin-top: 0;
                        margin-bottom: 35px;
                    }
                h5 {
                        text-align: center;
                    }
    </style>

    <body>
    <div class="container">
            <div class="card mb-3">
                <div class="card-body">
                <h5 class="card-title">Validação de CPF</h5>
                    <form method="post" action="validaCpf.php">
                    <div class="mb-3">
                            <input type="text" class="form-control" name="txtCpf" id="txtCpf" placeholder="Informe o CPF" required>
                    </div>
                            <button type="submit" class="btn btn-primary" id="btnCadastrar" value="Validar">Validar</button>
                    </form>
                    </div>
            </div>
    </div>
    </body>
</html>