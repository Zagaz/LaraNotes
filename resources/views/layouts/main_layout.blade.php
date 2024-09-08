<?php //HEADER
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOTES</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fontawesome/css/all.min.css')}}">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/png">
</head>
<body>
    <?php //END HEADER ?>

    <?php //This is the main content ?>
    @yield('content')

    <?php //FOOTER ?>
    <script src="asset('assets/bootstrap/bootstrap.bundle.min.js')"></script>
</body>
</html>
<?php //END FOOTER
?>
