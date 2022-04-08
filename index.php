<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack Blocco 1</title>
</head>
<body>
    <!-- Snack 1
    Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60
    Snack 2
    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
    Snack 4
    Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
    Snack 5
    Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->
    <section>
        <h2>Snack 1</h2>
        <?php
            $matches = [
                [
                    "home" => "Bertram Derthona Basket Tortona",
                    "visitors" => "Carpegna Prosciutto Pesaro",
                    "home-points" => 70,
                    "visitors-points" =>86,
                ],
                [
                    "home" => "Allianz Pallacanestro Trieste",
                    "visitors" => "Virtus Segafredo Bologna",
                    "home-points" => 81,
                    "visitors-points" =>92,
                ],
                [
                    "home" => "Banco di Sardegna Sassari",
                    "visitors" => "A|X Armani Exchange Milano",
                    "home-points" => 92,
                    "visitors-points" => 90,
                ],
                [
                    "home" => "Happy Casa Brindisi",
                    "visitors" => "Openjobmetis Varese",
                    "home-points" => 72,
                    "visitors-points" => 75,
                ],
                [
                    "home" => "Germani Brescia",
                    "visitors" => "Dolomiti Energia Trentino",
                    "home-points" => 86,
                    "visitors-points" => 72,
                ],
                [
                    "home" => "UNAHOTELS Reggio Emilia",
                    "visitors" => "Umana Reyer Venezia",
                    "home-points" => 78,
                    "visitors-points" => 85,
                ],
                [
                    "home" => "Fortitudo Kigili Bologna",
                    "visitors" => "Vanoli Basket Cremona",
                    "home-points" => 85,
                    "visitors-points" => 83,
                ],
                [
                    "home" => "NutriBullet Treviso Basket",
                    "visitors" => "GeVi Napoli Basket",
                    "home-points" => 67,
                    "visitors-points" => 77,
                ],
            ];
            // var_dump($matches);
            //echo count($matches);
        ?>
        <ul>
            <?php 
                for ($_i = 0; $_i < count($matches); $_i++) { ?>
                    <li>
                        <?= $matches[$_i]["home"]." - ".$matches[$_i]["visitors"].": ".$matches[$_i]["home-points"]." - ".$matches[$_i]["visitors-points"]?>
                    </li>
                <?php };
            ?>
        </ul>
    </section>

</body>
</html>