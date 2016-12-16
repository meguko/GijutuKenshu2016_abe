<?php

/* 
 * Java基礎
 * Lesson05 標準API
 * 下に示した個人クラス(Person)を作成し、
 * Lesson04で作成したPersonクラスをListを使用して複数登録し、
 * 登録したデータを全て出力するプログラム。
 */

// クラス読み込み
require_once('Person.php');

// インスタンス化
$person_satou = new Person( "佐藤太郎", "東京都", 20, "030123456" );
$person_yamada = new Person( "山田花子", "青森県", 80, "0170123456" );
$person_kimura = new Person( "木村次郎", "京都府", 38, "0750123456" );

// Listに登録
$arrayPerson = array();
array_push($arrayPerson, $person_satou, $person_yamada, $person_kimura);

// 個人情報を出力
foreach($arrayPerson as $person){
	
	$person -> printPerson();
	echo "</br>";
}

?>
