<?php

/* 
 * Java基礎
 * Lesson06 継承
 * Lesson04、Lesson05で作成したプログラムを修正して、社員クラス、技術者クラスを追加し
 * Listを使用して登録、printメソッドで全て表示するプログラム
 */

// クラス読み込み
require_once('Person.php');
require_once('Employee.php');
require_once('Engineer.php');

// インスタンス化
$person_satou = new Person( "佐藤太郎", "東京都", 20, "030123456" );
$person_yamada = new Person( "山田花子", "青森県", 80, "0170123456" );
$person_kimura = new Person( "木村次郎", "京都府", 38, "0750123456" );
$employee_satou = new Employee( "佐藤太郎(社員)", 21, "a", "030123456" );
$employee_yamada = new Employee( "山田花子(社員)", 81, "b", "0170123456" );
$employee_kimura = new Employee( "木村次郎(社員)", 31, "c", "0750123456" );
$engineer_satou = new Engineer( "佐藤太郎(技術者)", "東京都", 20, "a", "030123456" );
$engineer_yamada = new Engineer( "山田花子(技術者)", "青森県", 80, "a", "0170123456" );
$engineer_kimura = new Engineer( "木村次郎(技術者)", "京都府", 38, "a", "0750123456" );

// Listに登録
$arrayPerson = array();
array_push($arrayPerson, $person_satou, $person_yamada, $person_kimura);
array_push($arrayPerson, $employee_satou, $employee_yamada, $employee_kimura);
array_push($arrayPerson, $person_satou, $person_yamada, $person_kimura);

// 個人情報を出力
foreach($arrayPerson as $person){
	
	$person -> printPerson();
	echo "</br>";
}

?>
