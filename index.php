<?php


	$child = new Employee();
	$child->name = "haohao";

	$child->sing();

	class Employee
	{

		public $name;

		public function work() {
			echo '書類を整理しています', PHP_EOL;
		}

		public function eat() {
			echo 'ピザを食べている', PHP_EOL;
		}

		public function sing(){
			echo $this->name, ' is singing...', PHP_EOL;
		}

	}
?> 