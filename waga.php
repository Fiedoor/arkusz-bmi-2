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
                Wzrost[cm]: <input type="number" name="wzrost" id=""><br>
                <input type="submit" value="Licz BMI i zapisz wynik">
            </form>
            <?php
            // skrypt1
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
            //skrypt2
            ?>
        </table>
    </div>
    <footer>
        AUTOR: PESEL
        <a href="zrzuty/kw2.jpg">Wynik działania kwerendy 2</a>
    </footer>
</body>

</html>