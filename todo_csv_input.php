<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CSVデータ</title>
  <style>
  body{
    background: url(img/2person.png);
    background-repeat: no-repeat; 
  }
  </style>
</head>
<body>

<form action="todo_csv_create.php" method="POST">
    <!-- <fieldset> -->
      <legend>health check input</legend>
      <a href="todo_csv_read.php">一覧画面</a>
      <div>
        deadline: <input type="date" name="deadline">
      </div>
      <div>
        身長:<input type="text" name="height">cm
      </div>
      <div>
        体重:<input type="text" name="weight">kg
      </div>
      <div>
        内脂肪レベル:<input type="text" name="fat">
      </div>
      <div>
        体内年齢:<input type="text" name="age">歳
      </div>
      <div>
        <button>submit</button>
      </div>
    <!-- </fieldset> -->
  </form>


  
</body>
</html>
