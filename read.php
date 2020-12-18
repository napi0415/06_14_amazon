<?php
$str = '';
$file = fopen('data/todo.txt', 'r');
flock($file, LOCK_EX);
if ($file) {
    while ($line = fgets($file)) {
        $str .= "<tr><td>{$line}</td></tr>";
    }
}
flock($file, LOCK_UN);
fclose($file);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon account list</title>
</head>

<body>
    <fieldset>
        <legend>Amazon account list</legend>
        <a href="input2.php">入力画面</a>
        <table>
            <thead>
                <tr>
                    <th>リスト</th>
                </tr>
            </thead>
            <tbody>
                <?= $str ?>
            </tbody>
        </table>
    </fieldset>
</body>

</html>