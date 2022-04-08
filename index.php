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

    <section>
        <h2>Snack 2</h2>
        <form action="" method="get">
            <input type="text" name="name" id="name" placeholder="Nome" >
            <input type="text" name="email" id="email" placeholder="eMail" >
            <input type="text" name="age" id="age" placeholder="Età">
            <button>Accedi</button>
        </form>
        <?php
            if ((isset($_GET['name'])) && (isset($_GET['email'])) && (isset($_GET['age']))) {
                $name = $_GET['name'];
                $email = $_GET['email'];
                $age = $_GET['age'];
                if ((strlen($name) > 3) && (strpos($email, "@") !== false) && (strpos($email,".",strpos($email, "@")) !== false) && (is_numeric($age))) {
                    echo 'Accesso riuscito';
                } else {
                    echo 'Accesso negato';
                };
            };
        ?>
    </section>

    <section>
        <h2>Snack 4</h2>
        <?php
            $random_numbers_array = [];
            while (count($random_numbers_array) < 15) {
                $random_number = rand(1, 99);
                if (!in_array($random_number, $random_numbers_array)) {
                    $random_numbers_array[] = $random_number;
                };
            };
            echo implode(",", $random_numbers_array);
        ?>
    </section>
    
    <section>
        <h2>Section 5</h2>
        <?php
            $main_paragraph = "First Light Fusion says it's got another approach altogether, that doesn't require expensive, powerful lasers or magnets to get the job done. Like the HB11 approach, First Light requires tremendous speed. Hypersonic speed, in fact, in the form of a projectile being fired from a railgun at a falling target, which is specifically designed to generate finely tuned, collapsing shockwaves that create momentary pressure levels nearly a billion times higher than atmospheric air pressure at sea level. Pressure levels high enough to cause small embedded deuterium fuel pellets to implode upon themselves at high enough speeds to overcome nuclear repulsion and start fusion reactions. Multiple cavities collapse when hit with a hypersonic projectile to produce converging shockwaves that generate fusion-inducing pressure and temperature levels that cause deuterium fuel pellets to implode Multiple cavities collapse when hit with a hypersonic projectile to produce converging shockwaves that generate fusion-inducing pressure and temperature levels that cause deuterium fuel pellets to implode. First Light Fusion This technique, says First Light, is inspired by the pistol shrimp, and its famous underwater bubble-shooting weapon. These little fellas snap their claws together at incredible speed, creating a shockwave and squirting a jet of water forward at up to 60 mph (96 km/h). That's so fast that the water itself gets vaporized as it shears against the still water around it, creating tiny bubble cavities. The bubble cavities interact with the shockwave, and collapse in an infinitesimally short period of time – but for the briefest of moments, the vapor in those bubbles is heated to tens of thousands of degrees, and even emits a bright flash of light. Amazing stuff, you can hear Richard Hammond talking about it and see these shockwaves in ultra-slow motion in this BBC Earth Lab video clip. First Light took this as a starting point and began designing ways to amplify this effect well beyond what the shrimp's claw can achieve, to a point where it can create fusion-friendly conditions. It has created and refined a series of small targets, some in cubic form with sides of about 1 cm (0.4 inches) that are designed to create a series of interacting shockwaves and bubble cavities when they're hit with coin-shaped projectiles at super-high velocities. These shockwaves intersect at planned moments to supercharge the pistol shrimp's cavitation effects, greatly multiplying the pressure around a small, precisely positioned fuel pellet in the middle. Complex target designs place multiple cavities around fuel pellets, positioned to precisely tune the shockwaves that result when a hypersonic projectile hits it Complex target designs place multiple cavities around fuel pellets, positioned to precisely tune the shockwaves that result when a hypersonic projectile hits it. First Light Fusion The projectile is fired using an electromagnetic design similar to a railgun, at insane speeds around 6.5 km/sec (23,400 km/h, 14,540 mph), or just under 19 times the speed of sound. It's aimed directly at the target, which itself is dropping through the reaction chamber through the same entrance. When it hits, the impact pressure is around 100 gigapascals. The target design uses interacting cavity collapses and pressure waves to amplify that pressure up to around one terapascal, and when the fuel pellet implodes just as massive pressure waves bear down on it from all sides, the final pressure can get as high as 100 terapascals, with the fuel accelerating to more than 70 km/sec (252,000 km/h, 157,000 mph), or Mach 204, as it implodes. You can see this in action below, with colors representing pressure levels and the small sphere in the middle representing the fuel pellet. At this instant, says First Light, the fuel becomes the fastest-moving object on Earth, and the pressure and temperature that fuel pellet generates as it's compressed from several millimeters down to less than 100 microns is enough to trigger fusion reactions. These release impressive amounts of heat energy and neutrons, which are absorbed by 1-meter-thick (3.3-ft) curtains of liquid lithium metal flowing within the chamber. You can see a simulation of this process in the video below. As the pellet splashes down into a pool of liquid lithium, a heat exchanger transfers the heat to water, generating steam that turns a turbine and produces electricity in the final commercial reactor design. Each target, says First Light, would produce enough energy to power an average UK home for two years. According to Energy UK, that equates to about 6.2 megawatt-hours. In a commercial power plant, this would happen once every 30 seconds, giving the plant an effective output around 744 MW – a little under the 1 GW of the average US nuclear fission plant, but without any nuclear waste or potential of meltdown. The company says this relatively simple technique (well, certainly simple when compared to tokamak and stellarator designs) offers a pathway to a very competitive Levelised Cost Of Energy (LCOE) of under US$50/MWh. That's only a little pricier than the LCOE of current solar and wind energy – but of course it can be produced on demand, making it an excellent base load generator for a power grid, or a good option to ramp up and down to keep up with the demand curve. Here's another video, zoomed out to show the wider reactor design. The company has now demonstrated a proof of concept with inspectors from the UK Atomic Energy Authority on hand for over three months to witness a fusion shot, review the experimental setup, check calibration data and look over the data processing and statistical analysis. First Light says the UK AEA has confirmed the experiment showed that the shot produced neutrons consistent with those produced from the fusion of deuterium fuel. Now, this is an early-stage demonstration, and as such only about 50 such neutrons were produced, matching the predicted yield. But First Light says it's got to the point of achieving fusion in record time, showing the most rapid progress on fusion triple product of any project in the history of fusion. It's also spent less than $59 million to get there, where the most conservative budget for the ITER project sits at around $20 billion. The company says plans for an experiment that'll demonstrate net energy gain are advancing at pace, whatever that means, and that the team is working towards a pilot plant producing ~150 MW of electricity and costing less than $1 billion in the 2030s. The key technology is our target designs, says First Light Fusion co-founder and CEO Dr. Nick Hawker. As objects, these are very complex, but the physics is simpler than other fusion approaches; it can be understood and simulated accurately. With this result we have proven our new method for inertial fusion works and, more importantly, we have proven our design process. It certainly feels like momentum is building in the nuclear fusion space, with massive governmental efforts beginning to see serious competition from innovative commercial companies like First Light and HB11 that are attacking this old chestnut from fresh angles. The dream of fusion energy is well and truly alive, and we wish each project every success. ";
            echo '<h3>Paragrafo di partenza</h3><p>'.$main_paragraph.'</p>';
            echo strlen($main_paragraph);
        ?>
        <h3>Paragrafi separati</h3>
        <?php
            $start = 0;
            // echo substr($main_paragraph, $start, 8);
            // echo strpos($main_paragraph, "k", $start);
            // echo substr($main_paragraph, 8, 20);

            while (strpos($main_paragraph, ". ", $start) !== false) {
                echo '<p>'.substr($main_paragraph, $start, (strpos($main_paragraph, ". ", $start) + 1 - $start)).'</p>';
                $start = strpos($main_paragraph, ". ", $start) + 2;
                // echo $start;
            }
        ?>
    </section>
</body>
</html>