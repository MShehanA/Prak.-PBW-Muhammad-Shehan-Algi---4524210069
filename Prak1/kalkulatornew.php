```php
<?php
$hasil = null;
$pesan = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = (float) ($_POST['a'] ?? 0);
    $b = (float) ($_POST['b'] ?? 0);
    $c = (float) ($_POST['c'] ?? 0);

    $operator1 = $_POST['operator1'] ?? '+';
    $operator2 = $_POST['operator2'] ?? '+';

    // Fungsi untuk menghitung dua angka
    function hitung($x, $y, $operator)
    {
        switch ($operator) {
            case '+':
                return $x + $y;

            case '-':
                return $x - $y;

            case '*':
                return $x * $y;

            case '/':
                if ($y == 0) {
                    return null;
                }
                return $x / $y;

            case '^':
                return $x ** $y;

            default:
                return null;
        }
    }

    // Hitung a operator1 b
    $hasilPertama = hitung($a, $b, $operator1);

    if ($hasilPertama === null) {
        $pesan = 'Pembagian dengan nol tidak diperbolehkan atau operator tidak valid.';
    } else {
        // Hitung hasil pertama operator2 c
        $hasil = hitung($hasilPertama, $c, $operator2);

        if ($hasil === null) {
            $pesan = 'Pembagian dengan nol tidak diperbolehkan atau operator tidak valid.';
        }
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

        <!-- Angka A -->
        <input
            type="number"
            step="any"
            name="a"
            value="<?= htmlspecialchars($_POST['a'] ?? '') ?>"
            required
        >

        <!-- Operator 1 -->
        <select name="operator1">
            <option value="+" <?= (($_POST['operator1'] ?? '') === '+') ? 'selected' : '' ?>>+</option>
            <option value="-" <?= (($_POST['operator1'] ?? '') === '-') ? 'selected' : '' ?>>-</option>
            <option value="*" <?= (($_POST['operator1'] ?? '') === '*') ? 'selected' : '' ?>>*</option>
            <option value="/" <?= (($_POST['operator1'] ?? '') === '/') ? 'selected' : '' ?>>/</option>
            <option value="^" <?= (($_POST['operator1'] ?? '') === '^') ? 'selected' : '' ?>>^</option>
        </select>

        <!-- Angka B -->
        <input
            type="number"
            step="any"
            name="b"
            value="<?= htmlspecialchars($_POST['b'] ?? '') ?>"
            required
        >

        <!-- Operator 2 -->
        <select name="operator2">
            <option value="+" <?= (($_POST['operator2'] ?? '') === '+') ? 'selected' : '' ?>>+</option>
            <option value="-" <?= (($_POST['operator2'] ?? '') === '-') ? 'selected' : '' ?>>-</option>
            <option value="*" <?= (($_POST['operator2'] ?? '') === '*') ? 'selected' : '' ?>>*</option>
            <option value="/" <?= (($_POST['operator2'] ?? '') === '/') ? 'selected' : '' ?>>/</option>
            <option value="^" <?= (($_POST['operator2'] ?? '') === '^') ? 'selected' : '' ?>>^</option>
        </select>

        <!-- Angka C -->
        <input
            type="number"
            step="any"
            name="c"
            value="<?= htmlspecialchars($_POST['c'] ?? '') ?>"
            required
        >

        <button type="submit">Hitung</button>

    </form>

    <?php if ($pesan): ?>

        <p style="color: red;">
            <?= htmlspecialchars($pesan) ?>
        </p>

    <?php elseif ($hasil !== null): ?>

        <p>
            <strong>Hasil:</strong>
            <?= htmlspecialchars((string) $hasil) ?>
        </p>

    <?php endif; ?>

</body>

</html>
```
