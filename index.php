<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h2>STRONA BIBLIOTEKI SZKOLNEJ WIEDZAMIN</h2>
    </header>
    <section>
        <h3>Nasze dzisiejsze propozycje:</h3>
        <table>
            <thead>
                <th>Autor</th>
                <th>Tytuł</th>
                <th>Katalog</th>
            </thead>
            <tbody>
                <?php
                $db = mysqli_connect('localhost','root','','biblioteka')
                $zapytanie = "SELECT autor, tytul, kod FROM ksiazki ORDER BY RAND() LIMIT 5";
                $wynik = mysqli_query($db,$zapytanie);
                    while ($wiersz = mysqli_fetch_assoc($wynik)) {
                        $autor = $wiersz['autor']; 
                        $tytul = $wiersz['tytul'];
                        $kod = $wiersz['kod'];
                        
                        echo "<tr>";
                        echo "<td>$autor</td>";
                        echo "<td>$tytul</td>";
                        echo "<td>$kod</td>";
                        echo "</tr>";
                    }       
                    mysqli_close($db);
                ?>
            </tbody>
        </table>
    </section>
    <main>
        <article id="q">
            <img src="3.jpg" alt="okładka książki">
            <p></p>
        </article>
        <article id="w">
            <img src="3.jpg" alt="okładka książki">
            <p></p>
        </article>
        <article id="e">
            <img src="3.jpg" alt="okładka książki">
            <p></p>
        </article>
    </main>
    <footer><p>Bla bla bal</p></footer>
</body>
</html>