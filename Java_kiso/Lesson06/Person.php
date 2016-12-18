<?php

/* 
 * 個人クラス
 * 
 * 
 */
class Person {
	
	private $name;			// 氏名
	private $address;		// 住所
	private $age;			// 年齢
	private $telephone;		// 電話番号
	
	// コンストラクタ
	public function __construct( $name, $address, $age, $telephone ) {
		
		$this->name = $name;			// 氏名
		$this->address = $address;		// 住所
		$this->age = $age;				// 年齢
		$this->telephone = $telephone;	// 電話番号
	}
	
	// 氏名を出力
	public function printName() {
		
		echo $this->name;
	}
	
	// 住所を出力
	public function printAddress() {
		
		echo $this->address;
	}
	
	// 年齢を出力
	public function printAge() {
		
		echo $this->age;
	}
	
	// 電話番号を出力
	public function printTelephone() {
		
		echo $this->telephone;
	}
	
	// 個人情報を出力
	public function printPerson() {
		
		echo "氏名：";
		$this->printName();
		echo "</br>";
		
		echo "住所：";
		$this->printAddress();
		echo "</br>";
		
		echo "年齢：";
		$this->printAge();
		echo "</br>";
		
		echo "電話番号：";
		$this->printTelephone();
		echo "</br>";
	}
	
	// 氏名のgetter
	public function getName() {
		
		return $this->name;
	}
	
	// 住所のgetter
	public function getAddress() {
		
		return $this->address;
	}
	
	// 年齢のgetter
	public function getAge() {
		
		return $this->age;
	}
	
	// 電話番号のgetter
	public function getTelephone() {
		
		return $this->telephone;
	}
	
	// 氏名のsetter
	public function setName($name) {
		
		$this->name = $name;
	}
	
	// 住所のsetter
	public function setAddress($address) {
		
		$this->address = $address;
	}
	
	// 年齢のsetter
	public function setAge($age) {
		
		$this->age = $age;
	}
	
	// 電話番号のsetter
	public function setTelephone($telephone) {
		
		$this->telephone = $telephone;
	}
}

?>
