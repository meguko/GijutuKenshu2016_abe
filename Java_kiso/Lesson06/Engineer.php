<?php

/* 
 * 技術者クラス
 * 
 * 
 */
class Engineer extends Person {
	
	private $name;			// 氏名
	private $address;		// 住所
	private $age;			// 年齢
	private $skill;			// 保有技術
	private $telephone;		// 電話番号
	
	// コンストラクタ
	public function __construct( $name, $address, $age, $skill, $telephone ) {
		
		// 親クラスのコンストラクタ呼び出し
		parent::__construct( $name, $address, $age, $telephone );
		
		$this->skill = $skill;			// 保有技術
	}
	
	// 保有技術を出力
	public function printSkill() {
		
		echo $this->skill;
	}
	
	// 個人情報を出力
	public function printPerson() {
		
		echo "氏名：";
		parent::printName();
		echo "</br>";
		
		echo "住所：";
		parent::printAddress();
		echo "</br>";
		
		echo "年齢：";
		parent::printAge();
		echo "</br>";
		
		echo "保有技術：";
		$this->printSkill();
		echo "</br>";
		
		echo "電話番号：";
		parent::printTelephone();
		echo "</br>";
	}
	
	// 保有技術のgetter
	public function getSkill() {
		
		return $this->skill;
	}
	
	// 保有技術のsetter
	public function setSkill($skill) {
		
		$this->name = $skill;
	}
}

?>
