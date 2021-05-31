<?php

// var_dump($_POST);
// exit();
// 
$todo = $_POST["todo"];
$deadline = $_POST["deadline"];

$write_data = "{$deadline} {$todo}\n";
$file = fopen('data/todo.txt', 'a');
flock($file, LOCK_EX);
fwrite($file, $write_data);
flock($file, LOCK_UN);
fclose($file);

header("Location:todo_txt_input.php");

?>

<!DOCTYPE html>
<html lang="en">
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
          <td><?= $todo ?></td>
          <td><?= $deadline  ?></td>
        </tr>
      </tbody>
    </table>
  </fieldset>
  
</body>
</html>


