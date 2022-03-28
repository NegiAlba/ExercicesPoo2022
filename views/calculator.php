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
            <h1>Calculator</h1>
            <?php
                // On va vérifier si l'array params est vide pour l'affichage. En toute logique, dans params la seule chose que l'on passe sur cette page c'est le result.
                if (!empty($this->params)) {
                    echo "The result is $this->result";
                }
            ?>
            <form action="" method="post">
                <div>
                    <label for="a">a</label>
                    <input type="number" name="a" id="a">
                </div>
                <div>
                    <label for="b">b</label>
                    <input type="number" name="b" id="b">
                </div>
                <div>
                    <label for="operator">Operator</label>
                    <select name="operator" id="operator">
                        <option value="add">+</option>
                        <option value="multiply">*</option>
                        <option value="divide">/</option>
                        <option value="substract">-</option>
                        <option value="median">median</option>
                    </select>
                </div>
                <button type="submit">Calculer</button>
            </form>
        </section>
    </div>
</body>

</html>