<?php

/* 
 * Java基礎
 * Lesson03 隣接交換法
 * 配列dataを隣接交換法で昇順にソートして結果を出力するプログラム。
 */

// ★ ここから----------

/* ソート対象となるデータ */
$data = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

/*配列データをランダムに並び替える */
for ($loop = 0; $loop < count($data); $loop ++) {
	
	/*変数leftとrightには、配列dataのいずれかの要素番号がランダムに代入される */
	$left  = rand(0, count($data)-1);
	$right = rand(0, count($data)-1);
	
	$swap    = $data[$left];
	$data[$left]  = $data[$right];
	$data[$right] = $swap;
}

// ★ ----------ここまでの部分は変更しないでください。



$echo_array = "";	// 配列データ出力用変数
$delimiter = ", ";	// 区切り文字
$swap_data;			//データ入れ替え用変数

// データ出力（ソート前）
echo "データ出力（ソート前）：";

for ($loop_bef = 0; $loop_bef < count($data); $loop_bef++) {
	
	$echo_array .= $data[$loop_bef];
	$echo_array .= $delimiter;
}

// 一番後ろの区切り文字を切り捨てる
$echo_array = mb_substr($echo_array, 0, (mb_strlen($echo_array) - mb_strlen($delimiter)));

// 配列データを出力
echo $echo_array."</br>";

// ソート実行（隣接交換法）

// 未ソート部分の値を取得
for($i = count($data) - 1; $i > 0; $i--){
	
	// 基準となる値を取得
	for($j = 0; $j < $i; $j++){
		
		// 隣接した値と比較し、基準値の方が値が大きい場合
		if($data[$j] > $data[$j+1]){
			
			// データの入れ替えを行う
			$swap_data = $data[$j];
			$data[$j] = $data[$j+1];
			$data[$j+1] = $swap_data;
		}
	}
}

// データ出力（ソート後）
echo "データ出力（ソート後）：";

// 出力用変数を初期化
$echo_array = "";

for ($loop_aft = 0; $loop_aft < count($data); $loop_aft++) {
	
	$echo_array .= $data[$loop_aft];
	$echo_array .= $delimiter;
}

// 一番後ろの区切り文字を切り捨てる
$echo_array = mb_substr($echo_array, 0, (mb_strlen($echo_array) - mb_strlen($delimiter)));

// 配列データを出力
echo $echo_array."</br>";

?>
