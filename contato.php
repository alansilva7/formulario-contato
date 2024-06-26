<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Formulário de contato</title>
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="my-5">Formulário de Contato</h1>
            <form action="enviar.php" method="POST">

                <div class="mb-3">
                    <input type="text" name="nome" placeholder="Digite seu nome" class="form-control">
                </div>

                <div class="mb-3">
                    <input type="email" name="email" placeholder="Digite seu email" class="form-control">
                </div>

                <div class="mb-3">
                    <textarea name="mensagem" placeholder="Digite sua mensagem" rows="3" class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
                
            </form>
        </div>
    </div>
</div>





















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>