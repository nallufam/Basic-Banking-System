<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- external css bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- <link href="./css/style.css" rel="text/stylesheet"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Money Bank</title>
    <!-- Added by me -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&family=Baloo+Bhaijaan+2&family=Bree+Serif&display=swap" rel="stylesheet">

</head>

<body>

    <!-- header with connection and sql code -->
    <?php require_once './include/header.php' ?>


    <!-- main container start -->
    <section id="top" class="top">
        <div class="img">
            <img src="main.jpg" alt="TSF-Image" style=" width:100vw; height: 95vh;">
        </div>
    </section>
    <!-- main container end -->
    

    <!-- middle container start-->
    <section id="services" class="services" style="font-family: 'Baloo Bhaijaan 2', cursive;">
        <div class="container my-5">
            <h1 class="text-dark text-center my-5" style="font-family: 'Bree Serif', serif;">Our Services</h1>
            <div class="container">
                <div class="row row-cols-2">
                    <div class="col ">
                        <h3>Manage Everything at one place</h3>
                        <div class="container col my-5">
                            <p class="lead"> To start a transaction</p>
                            <a href="customer.php"><button class="btn btn-primary" type="button">Click Here</button></a>
                        </div>
                        <div class="container col my-5">
                            <p class="lead">See Transaction History</p>
                            <a href="transaction.php"><button class="btn btn-primary" type="button">Click Here</button></a>
                        </div>

                    </div>

                    <div class="col">
                        <img src="services.jpg" class="rounded img-fluid float-right" alt="...">

                    </div>
                </div>
    </section>

    
        <?php require_once './include/footer.php' ?>
</body>

<!-- bootstrap js script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</html>