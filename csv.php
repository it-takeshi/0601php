<?php

// CSVファイルに書き込み配列を定義

$data = [
  ["ID","名前","年齢"],
  ["1","太郎","21"],
  ["2","次郎","22"],
  ["3","三郎","23"],
  ["4","四郎","24"],

];

// ファイルオープン
$f =fopen("test.csv","w");
foreach($data as $line){
  fputcsv($f,$line);
}
// ファイル閉じる
fclose($f);
?>