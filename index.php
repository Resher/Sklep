<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>Nasz Sklep komputerowy</title>
    <link rel="stylesheet" href="styl8.css">
</head>
<body>
    <section id="baner">
        <section id="menu">
            <a href="index.php">Główna</a>
            <a href="procesory.html">Procesory</a>
            <a href="ram.html">RAM</a>
            <a href="grafika.html">Grafika</a>
        </section>
        <section id="logo">
            <h2>Podzespoły komputerowe</h2>
        </section>
    </section>
    <section id="main">
        <h1>Dzisiejsze promocje</h1>
        <table>
            <tr>
                <th>NUMER</th> <th>NAZWA PODZESPOŁU</th> <th>OPIS</th> <th>CENA</th>
            </tr>
            <?php
                $con = mysqli_connect('localhost','root','','sklep');
                $ask1 = 'SELECT id, nazwa, opis, cena FROM podzespoly WHERE cena < 1000';
                $res = mysqli_query($con, $ask1);
                while($row = mysqli_fetch_assoc($res))
                {
                    echo '<tr>';
                    echo '<td>'.$row['id'].'</td>';
                    echo '<td>'.$row['nazwa'].'</td>';
                    echo '<td>'.$row['opis'].'</td>';
                    echo '<td class="cena">'.$row['cena'].'</td>';
                    echo '</tr>';
                }
                mysqli_close($con);
            ?>
        </table>
    </section>
    <section id="footer">
        <section id="first">
            <img src="scalak.jpg" alt="promocje na procesory">
        </section>
        <section id="second">
            <h4>Nasz Sklep Komputerowy</h4>
            <p>Współpracujemy z hurtownią <a href="http://www.edata.pl" target='_blank'>edata</a></p>
        </section>
        <section id="third">
            <p>zadzwoń: 601 602 603</p>
        </section>
        <section id="fourth">
            <p>Stronę wykonał: PESEL</p>
        </section>
    </section>
</body>
</html>
// qtaz