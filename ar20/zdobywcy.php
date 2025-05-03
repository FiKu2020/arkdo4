<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>ZDOBYWCY GÓR</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Klub zdobywców gór polskich</h1>
    </header>

    <nav>
        <a href="kw1.png">kwerenda1</a>
        <a href="kw2.png">kwerenda2</a>
        <a href="kw3.png">kwerenda3</a>
        <a href="kw4.png">kwerenda4</a>
    </nav>

    <main>
        <section id="left">
            <img src="logo.png" alt="logo zdobywcy">
            <h3>razem z nami:</h3>
            <ul>
                <li>wyjazdy</li>
                <li>szkolenia</li>
                <li>rekreacja</li>
                <li>wypoczynek</li>
                <li>wyzwania</li>
            </ul>
        </section>

        <section id="right">
            <h2>Dołącz do naszego zespołu!</h2>
            <p>Wpisz swoje dane do formularza:</p>
            <form method="post" action="#">
                <input type="text" name="nazwisko">
                <label for="nazwisko">Nazwisko:</label>
                <label>Imię: <input type="text" name="imie"></label><br>
                <label>Funkcja:
                    <select name="funkcja">
                        <option>uczestnik</option>
                        <option>przewodnik</option>
                        <option>zaopatrzeniowiec</option>
                        <option>organizator</option>
                        <option>ratownik</option>
                    </select>
                </label><br>
                 <input type="email" name="email"><label for="email">Email:</label><br>
                <button type="submit">Dodaj</button>
            </form>

            <table>
                <tr>
                    <th>Nazwisko</th>
                    <th>Imię</th>
                    <th>Funkcja</th>
                    <th>Email</th>
                </tr>
                <?php
                $db = mysqli_connect("localhost","root","","zdobywcy");
                if (
                    isset($_POST['nazwisko']) &&
                    isset($_POST['imie']) &&
                    isset($_POST['funkcja']) &&
                    isset($_POST['email'])
                ) {
                    $nazwisko = $_POST['nazwisko'];
                    $imie = $_POST['imie'];
                    $funkcja = $_POST['funkcja'];
                    $email = $_POST['email'];
                    $kw1 = mysqli_query($db,"INSERT INTO osoby (nazwisko, imie, funkcja, email) VALUES ('$nazwisko', '$imie', '$funkcja', '$email')");
                }?>
            </table>
        </section>
    </main>

    <footer>
        <p>Stronę wykonał: 06272500572</p>
    </footer>
</body>
</html>
