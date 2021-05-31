<?php

// var_dump($_POST);
// exit();

$deadline = $_POST["deadline"];
$height = $_POST["height"];
$height = $_POST["weight"];
$fat = $_POST["fat"];
$age = $_POST["age"];


$write_data = "{$deadline}, {$height}, {$weight}, {$fat}, {$age}, \n";
$file = fopen('data/health.csv', 'a');
flock($file, LOCK_EX);
fwrite($file, $write_data);
flock($file, LOCK_UN);
fclose($file);

header("Location:todo_csv_input.php");

?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<fieldset>
    <legend>todo表示画面（POST）</legend>
    <table>
      <thead>
        <tr>
          <th>todo</th>
          <th>deadline</th>
        </tr>
      </thead>
      <tbody>
        <tr>
        <td><?= $deadline  ?></td>
        <td><?= $height ?></td>
        <td><?= $weight ?></td>
        <td><?= $fat ?></td>
        <td><?= $age ?></td>
        
        </tr>
      </tbody>
    </table>
  </fieldset>



  
</body>
</html>

<tr>
        <td>日付</td>
        <td>身長</td>
        <td>体重</td>
        <td>標準Max</td>
        <td>標準Min</td>
      </tr>