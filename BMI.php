<?php


    $gewicht = $_GET["gewicht"];
    $lengte = $_GET["lengte"];

    BMIcalc($gewicht, $lengte);

        function BMIcalc($gewicht, $lengte)
        {
            $gewicht = (int)$gewicht;
            $lengte = (int)$lengte;

            $bmi = $gewicht / (($lengte / 10000) * $lengte);
            $bmi = round($bmi, 1);

            echo '<p class="bold">Gewicht: ' . $gewicht . ' KG</p>' .
                '<p class="bold">Lengte: ' . $lengte . ' CM</p>' .
                '<p class="bold">BMI: ' . $bmi . '</p>';


            switch ($bmi) {
                case $bmi < 0 :
                    echo "<p style='color: red' class='bold'>Ongeldige BMI en/of geen valide/missende input, probeer het opnieuw</p>";
                    break;
                case $bmi < 18.5:
                    echo "<p style='color: lightblue' class='bold'>Ondergewicht</p>";
                    break;
                case $bmi >= 18.5 && $bmi < 25:
                    echo "<p style='color: limegreen' class='bold'>Normaal/Gezond gewicht</p>";
                    break;
                case $bmi >= 25 && $bmi < 27:
                    echo "<p style='color: yellowgreen' class='bold'>Licht overgewicht</p>";
                    break;
                case $bmi >= 27 && $bmi < 30:
                    echo "<p style='color: orange' class='bold'>Matig overgewicht</p>";
                    break;
                case $bmi >= 30 && $bmi < 40:
                    echo "<p style='color: darkorange' class='bold'>Obesitas</p>";
                    break;
                case $bmi >= 40 && $bmi < 100:
                    echo "<p style='color: orangered' class='bold'>Morbide obesitas</p>";
                    break;
                case $bmi >= 100:
                    echo "<p style='color: red' class='bold'>Ongelde BMI en/of geen valide/missende input, probeer opnieuw</p>";
                    break;
                default:
                    echo "<p style='color: red' class='bold'>Geen valide/missende input</p>";
            }
        }
