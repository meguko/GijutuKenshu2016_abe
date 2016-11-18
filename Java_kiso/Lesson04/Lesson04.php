<?php

/* 
 * Java基礎
 * Lesson03 クラスとは
 * 下に示した個人クラス(Person)を作成し、
 * Personに登録した情報をPersonクラスのprintメソッドで出力するプログラム。
 */

// 個人クラス読み込み
require_once('Person.php');

// インスタンス化
$person_satou = new Person( "佐藤太郎", "東京都", 20, "030123456" );
$person_yamada = new Person( "山田花子", "青森県", 80, "0170123456" );
$person_kimura = new Person( "木村次郎", "京都府", 38, "0750123456" );

// 個人情報を出力
$person_satou -> printPerson();
echo "</br>";
$person_yamada -> printPerson();
echo "</br>";
$person_kimura -> printPerson();
echo "</br>";

?>
