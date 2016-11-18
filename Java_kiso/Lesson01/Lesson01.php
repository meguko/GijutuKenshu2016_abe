<?php

/* 
 * Java基礎
 * Lesson01 3の倍数と3がつく値の出力
 * 1から100までの整数のうち、3の倍数と3がつく値を出力するプログラム。
 */

$min_num = 1;		// 最小値
$max_num = 100;		// 最大値
$chk_num = 3;		// チェック対象値

$delimiter = ", ";	// 区切り文字
$echo_str = "";		// 結果出力用変数

// チェック開始
for($i = $min_num; $i <= $max_num; $i++){
	
	// 出力対象の値の場合
	if($i%$chk_num == 0 || strstr(strval($i), strval($chk_num))){
		
		// 出力用変数に代入
		$echo_str .= strval($i);
		$echo_str .= $delimiter;
	}

}

// 一番後ろの区切り文字を切り捨てる
$echo_str = mb_substr($echo_str, 0, (mb_strlen($echo_str) - mb_strlen($delimiter)));

// 結果を出力
echo $min_num."から".$max_num."までの整数のうち、".$chk_num."の倍数と".$chk_num."がつく値を出力</br>";
echo $echo_str."</br>";

?>
