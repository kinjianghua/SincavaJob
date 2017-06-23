<?php


	$student01 = new Student("xiaoming",80,"A");
	$student01->test();
	$student01->eat();

	$sthdent02 = new Excellent_Sthdent("aaa",40,"C");
    $sthdent02->eat("sha");

	class Student{

		public $name;
		public $score;
		public $level;

		public function test(){
			echo  $this->name, "学生が受験している", "成績は",$this->score, "レベル",$this->level;
		}

		public function eat($something = "ライス") {
			echo $something, "食べられる";
		}


		public function __construct($name, $aaa, $bbb){
			$this->name = $name;
			$this->score = $aaa;
			$this->level = $bbb;
		}

		public function __destruct(){
			//echo "__destruct";
		}
	}

	class Excellent_Sthdent extends Student{
		public function eat($anything){
			echo  $anything, "食べられる";
		}
	}







?>