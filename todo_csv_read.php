<?php  


$str = '';
$file = fopen('data/health.csv', 'r'); 
flock($file, LOCK_EX);
if ($file) {
  while ($line = fgets($file)) {
    $str .="<tr><td>{$line}</td></tr>";
  }
}
flock($file, LOCK_UN);
fclose($file);

?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  body{
    background: url(img/nature.jpg );
    background-repeat: no-repeat; 
    background-position:right top; 
    background-size:800px 400px;
  
    
  } 

  </style>
  </style>
</head>
<body>

<!-- <fieldset> -->
    <legend> health check input</legend>
    <a href="todo_txt_input.php"></a>
    <table>
      <thead>
        <tr class='tr';>
          <th>日時      体重 内脂肪率 体内年齢   </th>
          
        </tr>
      </thead>
      <tbody>
      <tr>
          <td><?= $str ?></td>
      
        </tr>
      </tbody>
    </table>
  <!-- </fieldset> -->

  <canvas id="health" width="300px" height="70px"></canvas>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <!-- jquery-csv -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-csv/1.0.11/jquery.csv.min.js"></script>
  

<script>
  (function(){
    var ctx = document.getElementById("health");
    
    var data = {
        labels: ["6月", "7月", "8月", "9月", "10月","11月","1月","2月","3月","4月","5月","6月"],
        datasets: [{
            label: '体内年齢',
            data: [42, 44, 42, 41, 39,36,43,42,38,40,41,40], //配列でデータをセット
            borderColor: 'rgba(255, 0, 0, 1)', //ボーダーの色
        }]
    };
    
    var options = {};
    var ex_chart = new Chart(ctx, {
        type: 'line', //折れ線グラフ
        data: data, //上記設定のデータ
        options: options
    });
}());

</script>

</body>
</html>