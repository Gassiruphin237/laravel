<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo request()->path(); ?></title>
        <!-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    
    
    </head>
<body>
    <?php include "../public/includes/navbar.php";  ?>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Hello</h1>
            <p class="lead">Bienvenue sur votre plateforme de commande pour vos pizzas
                to featured content or information.</p>
            <hr class="my-4">
            <p>Vous pouvez passez vos commndes et nous enverrons nos livreurs sur place!!!. votre satisfaction est notre
                priorité </p>
            <a class="btn btn-success btn-lg" href="" role="button">Let's go</a>
        </div>

    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <?php //include "../public/includes/footer.php";  ?>
</body>

</html>