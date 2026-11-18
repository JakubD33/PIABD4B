<?php
$komunikat = "";
$rekordy = [];

// Obsługa kliknięcia przycisku
if (isset($_POST['uruchom_skrypt'])) {
    // Przykładowy skrypt PHP - utworzenie listy rekordów
    $rekordy = [
        ['id' => 1, 'imie' => 'Jan Kowalski', 'rola' => 'Programista'],
        ['id' => 2, 'imie' => 'Anna Nowak', 'rola' => 'Tester'],
        ['id' => 3, 'imie' => 'Kuba', 'rola' => 'Autor projektu']
    ];

    $komunikat = "Skrypt PHP został poprawnie uruchomiony!";
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Moja Strona PHP</title>
</head>
<body>

    <header>
        <h1>Nagłówek mojej strony</h1>
    </header>

    <main>
        <p>Autor strony: <strong>Twoje Imię i Nazwisko</strong></p>

        <form method="POST">
            <button type="submit" name="uruchom_skrypt">Uruchom skrypt PHP</button>
        </form>

        <?php if ($komunikat != ""): ?>
            <p><strong><?php echo $komunikat; ?></strong></p>
            
            <ul>
                <?php foreach ($rekordy as $wiersz): ?>
                    <li>ID: <?php echo $wiersz['id']; ?> - <?php echo $wiersz['imie']; ?> (<?php echo $wiersz['rola']; ?>)</li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </main>

    <footer>
        <hr>
        <p>Stopka strony &copy; 2026 Twoje Imię i Nazwisko</p>
    </footer>

</body>
</html>