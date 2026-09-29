<?php
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
            break;

        case '-':
            $hasil = $a - $b - $c;
            break;

        case '*':
            $hasil = $a * $b * $c;
            break;

        case '/':
            // Cek pembagian dengan nol untuk $b maupun $c
            if ($b == 0 || $c == 0) {
                $pesan = 'Pembagian dengan nol tidak diperbolehkan.';
            } else {
                $hasil = $a / $b / $c;
            }
            break;

        case '^':
            // Menghitung pangkat (a dipangkatkan b, lalu hasilnya dipangkatkan c)
            $hasil = ($a ** $b) ** $c; 
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
        <input type="number" step="any" name="a" value="<?= htmlspecialchars($_POST['a'] ?? '') ?>" required>

        <select name="operator">
            <option value="+" <?= (($_POST['operator'] ?? '') === '+') ? 'selected' : '' ?>>+</option>
            <option value="-" <?= (($_POST['operator'] ?? '') === '-') ? 'selected' : '' ?>>-</option>
            <option value="*" <?= (($_POST['operator'] ?? '') === '*') ? 'selected' : '' ?>>*</option>
            <option value="/" <?= (($_POST['operator'] ?? '') === '/') ? 'selected' : '' ?>>/</option>
            <option value="^" <?= (($_POST['operator'] ?? '') === '^') ? 'selected' : '' ?>>^</option>
        </select>

        <input type="number" step="any" name="b" value="<?= htmlspecialchars($_POST['b'] ?? '') ?>" required>
        
        <select name="operator">
            <option value="+" <?= (($_POST['operator'] ?? '') === '+') ? 'selected' : '' ?>>+</option>
            <option value="-" <?= (($_POST['operator'] ?? '') === '-') ? 'selected' : '' ?>>-</option>
            <option value="*" <?= (($_POST['operator'] ?? '') === '*') ? 'selected' : '' ?>>*</option>
            <option value="/" <?= (($_POST['operator'] ?? '') === '/') ? 'selected' : '' ?>>/</option>
            <option value="^" <?= (($_POST['operator'] ?? '') === '^') ? 'selected' : '' ?>>^ </option>
        </select>
   
        <span><?= htmlspecialchars($_POST['operator'] ?? '+') ?></span>

        <input type="number" step="any" name="c" value="<?= htmlspecialchars($_POST['c'] ?? '') ?>" required>

        <button type="submit">Hitung</button>
    </form>

    <?php if ($pesan): ?>
        <p style="color: red;"><?= htmlspecialchars($pesan) ?></p>
    <?php elseif ($hasil !== null): ?>
        <p><strong>Hasil:</strong> <?= htmlspecialchars((string)$hasil) ?></p>
    <?php endif; ?>
</body>

</html>