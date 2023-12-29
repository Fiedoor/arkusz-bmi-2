<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Twój wskaźnik BMI</title>
    <link rel="stylesheet" href="styl4.css">
</head>

<body>
    <header>
        <div id="baner">
            <h2>Oblicz wskaźnik BMI</h2>
        </div>
        <div id="logo">
            <img src="wzor.png" alt="liczymy BMI">
        </div>
    </header>
    <main>
        <div id="lewy">
            <img src="rys1.png" alt="zrzuć kalorie!">
        </div>
        <div id="prawy">
            <h1>Podaj dane</h1>
            <form action="waga.php" method="post">
                Waga: <input type="number" name="waga"><br>
                Wzrost[cm]: <input type="number" name="wzrost"><br>
                <input type="submit" value="Licz BMI i zapisz wynik">
            </form>
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'egzamin');
            if (isset($_POST['waga']) and isset($_POST['wzrost'])) {
                $waga = $_POST['waga'];
                $wzrost = $_POST['wzrost'];
                $bmi = $waga / pow($wzrost, 2);
                $bmi = floor($bmi * 10000);
                echo "Twoja waga wynosi: $waga; Twój wzrost : $wzrost <br> BMI wynosi: $bmi";
                if ($bmi <= 18) {
                    $przedzial = 1;
                } else if ($bmi >= 19 and $bmi <= 25) {
                    $przedzial = 2;
                } else if ($bmi >= 26 and $bmi <= 30) {
                    $przedzial = 3;
                } else if ($bmi >= 31) {
                    $przedzial = 4;
                }
                $data = date("Y-m-d");
                echo $data;
                $q1 = "INSERT INTO `wynik`( `bmi_id`, `data_pomiaru`, `wynik`) VALUES ($przedzial,$data,$bmi)";
                mysqli_query($conn, $q1);
            }
            ?>
        </div>
    </main>
    <div id="glowny">
        <table>
            <tr>
                <th>Lp.</th>
                <th>Interpretacja</th>
                <th>zaczyna się od...</th>
            </tr>
            <?php
            $q2 = "SELECT id,informacja,wart_min FROM `bmi`";
            $res = mysqli_query($conn, $q2);
            foreach ($res as $row) {
                echo "<tr>";
                foreach ($row as $r) {
                    echo "<td>$r</td>";
                }
                echo "</tr>";
            }
            mysqli_close($conn);
            ?>
        </table>
    </div>
    <footer>
        AUTOR: PESEL
        <a href="zrzuty/kw2.jpg">Wynik działania kwerendy 2</a>
    </footer>
</body>

</html>