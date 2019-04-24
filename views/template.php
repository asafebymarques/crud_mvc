<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?=BASE_URL?>assets/css/style.css"/>
    <title>Meu site</title>
</head>
<body>
    <header>
         <h1>Meu sistema de contatos</h1>
         <hr>
    </header>
    
    <section>
        <?php $this->loadViewInTemplate($viewName, $viewData); ?>
    </section>

    <footer>
        Todos os direitos reservados.
    </footer>
</body>
</html>