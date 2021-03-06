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
            <h1>Oiseau : Playground </h1>
            <h3>Identity of the birds :</h3>
            <p>Bird 1 : <?php echo $this->eagle->identify(); ?></p>
            <p>Bird 2 : <?php echo $this->albatros->identify(); ?></p>
            <p>Bird 3 : <?php echo $this->pigeon->identify(); ?></p>
            <h3>When they are afraid, what will they do :</h3>
            <p>Bird 1 : <?php echo $this->eagle->flee(); ?></p>
            <p>Bird 2 : <?php echo $this->albatros->flee(); ?></p>
            <p>Bird 3 : <?php echo $this->pigeon->flee(); ?></p>
            <h3>What do they eat ? :</h3>
            <p>Bird 1 : <?php echo $this->eagle->eat(); ?></p>
            <p>Bird 2 : <?php echo $this->albatros->eat(); ?></p>
            <p>Bird 3 : <?php echo $this->pigeon->eat(); ?></p>
            <h3>Would they migrate :</h3>
            <p>Bird 1 : <?php echo $this->eagle->migrate('Jan'); ?></p>
            <p>Bird 2 : <?php echo $this->albatros->migrate('Jul'); ?></p>
        </section>

        <section>
            <form action="" method="post">
                <div>
                    <input type="text" name="oiseau" id="oiseau">
                </div>
                <div>
                    <input type="date" name="date" id="date">
                </div>
                <div>
                    <button type="submit">Envoyer</button>
                </div>
            </form>
        </section>
    </div>
</body>

</html>