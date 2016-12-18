<?php

/* 
 * 社員クラス
 * 
 * 
 */
class Employee extends Person {
	
	private $section;			// 所属部署名
	
	// コンストラクタ
	public function __construct( $name, $age, $section, $telephone ) {
		
		// 親クラスのコンストラクタ呼び出し
		parent::__construct( $name, null, $age, $telephone );
		
		$this->section = $section;		// 所属部署名
	}
	
	// 所属部署名を出力
	public function printSection() {
		
		echo $this->section;
	}
	
	// 個人情報を出力
	public function printPerson() {
		
		echo "氏名：";
		parent::printName();
		echo "</br>";
		
		echo "年齢：";
		parent::printAge();
		echo "</br>";
		
		echo "所属部署名：";
		$this->printSection();
		echo "</br>";
		
		echo "電話番号：";
		parent::printTelephone();
		echo "</br>";
	}
	
	// 所属部署名のgetter
	public function getSection() {
		
		return $this->section;
	}
	
	// 所属部署名のsetter
	public function setSection($section) {
		
		$this->section = $section;
	}
}

?>
