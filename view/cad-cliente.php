<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de Cliente</title>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
        <link href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
        
    </head>
    <body>

        <div class="container">
            <form method="post" action="../controller/cad-cliente.php">
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Nome" name="nome">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Endereço de Origem" name="origem">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Endereço de Destino" name="destino">
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Enviar">
                </div>
            </form>
        </div>
        

        <footer>
            <script src="vendor/components/jquery/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>
            <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
        </footer>
    </body>
</html>