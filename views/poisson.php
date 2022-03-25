<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices POO</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <nav>
            <?php require '_navbar.php'; ?>
        </nav>
        <section>
            <h1>Poisson : Playground </h1>
            <h3>Identity of the fishes :</h3>
            <p>Fish 1 : <?php echo $guppito->identify(); ?></p>
            <p>Fish 2 : <?php echo $redFish->identify(); ?></p>
            <p>Fish 3 : <?php echo $shark->identify(); ?></p>
            <h3>When they are afraid, what will they do :</h3>
            <p>Fish 1 : <?php echo $guppito->flee(); ?></p>
            <p>Fish 2 : <?php echo $redFish->flee(); ?></p>
            <p>Fish 3 : <?php echo $shark->flee(); ?></p>
            <h3>What do they eat ? :</h3>
            <p>Fish 1 : <?php echo $guppito->eat(); ?></p>
            <p>Fish 2 : <?php echo $redFish->eat(); ?></p>
            <p>Fish 3 : <?php echo $shark->eat(); ?></p>
        </section>
    </div>
</body>

</html>