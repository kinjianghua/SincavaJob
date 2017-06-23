<?php


	$student01 = new Student("xiaoming",80,"A");
	$student01->test();


	class Student{

		public $name;
		public $score;
		public $level;

		public function test(){
			echo  $this->name, "学生が受験している", "成績は",$this->score, "レベル",$this->level;
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








?>