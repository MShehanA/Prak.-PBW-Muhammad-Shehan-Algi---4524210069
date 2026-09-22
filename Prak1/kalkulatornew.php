<?php
// kalkulator.php
$hasil = null;
$pesan = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = (float) ($_POST['a'] ?? 0);
    $b = (float) ($_POST['b'] ?? 0);
    $c = (float) ($_POST['c'] ?? 0);
    $operator = $_POST['operator'] ?? '+';

    switch ($operator) {
        case '+':
            $hasil = $a + $b + $c;
            $hasil = $a + ($b * $c) ;
            $hasil = ($a * $b) + $c;
            $hasil = $a + ($b / $c) ;
            $hasil = ($a / $b) + $c;
            break;

        case '-':
            $hasil = $a - $b - $c;
            $hasil = ($a / $b) - $c;
            $hasil = $a - ($b / $c) ;
            $hasil = $a - ($b * $c);
            $hasil = ($a * $b) - $c;
            break;

        case '*':
            $hasil = $a * $b * $c;
            break;

        case '/':
            if ($b == 0) {
                $pesan = 'Pembagian dengan nol tidak diperbolehkan.';
            } else {
                $hasil = $a / $b / $c;

            }
            break;

        default:
            $pesan = 'Operator tidak valid.';
    }
}
?>

<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Kalkulator</title>
</head>

<body>
    <h1>Kalkulator Sederhana</h1>

    <form method="post">
        <input type="number" step="any" name="a" required>

        <select name="operator">
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
        </select>

        <input type="number" step="any" name="b" required>

        <select name="operator">
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
        </select>

        <input type="number" step="any" name="c" required>

        <button type="submit">Hitung</button>
    </form>

    <?php if ($pesan): ?>
        <p><?= htmlspecialchars($pesan) ?></p>
    <?php elseif ($hasil !== null): ?>
        <p>Hasil: <?= htmlspecialchars((string)$hasil) ?></p>
    <?php endif; ?>
</body>

</html>
