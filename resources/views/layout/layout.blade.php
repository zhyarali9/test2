<?php 
    $bootstrap=asset('/assets/css/bootstrap.min.css');
    $appCss=asset('/assets/css/app.css');
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo $bootstrap ?>">
    <link rel="stylesheet" href="<?php echo $appCss ?>">
    <script src="https://kit.fontawesome.com/c896aa5c6e.js" crossorigin="anonymous"></script>
</head>

<body class="bg-messenger">

    <nav class="navbar navbar-expand-sm container mt-3 shadow bg-white radius-10">
        <a class="navbar-brand text-warning" href="/"><img src='<?php image("logo.svg"); ?>' alt="" width="40px"></a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link text-info" href="/home">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-info" href="/login">Login</a>
                </li>
                
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    

    @yield('content')

    <footer class="container bg-white p-3 mt-4 text-center radius-10 shadow">All Right Reserved 2020 Zhyar</footer>

</body>

</html>