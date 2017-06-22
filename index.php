<?php

	/* multi line comment */

	// echo "Hello, Jianghua";

	// $do = 1;
	// $b = "foo bar";
	// $c = array(1, 2, 3);


    // var_dump 1) 変数のタイプ　２）変数の長さ　３）変数の中身
	// var_dump($do);     // int(1)
	// var_dump($b);     // string(7) "foo bar
	// var_dump($c);     // array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) }



	// error_reporting(E_ALL | E_STRICT);
	// ini_set('display_errors', 'On');

    // $var = 1;
    // $var_name = 'var';
    // echo $$var_name, PHP_EOL;

    // $array = array(1, 2, 3, 4, 7);

    // foreach ($array as $i) {
    // 	echo $i, PHP_EOL;   // 1 ...


    // }

    // echo "Last:", $i, PHP_EOL;

	// $foo = 1;      // グローバル
	// $bar = 3;
 //    $mama = 100; 


	// function some_function() {
	// 	$foo = 10; // ローカル
	// 	$bar = 20; //
	// 	global $mama; 
	// 	echo "内部 : ", $foo, PHP_EOL;
	// 	echo "内部 : ", $bar, PHP_EOL;
	// 	echo "内部 : ", $mama, PHP_EOL;

	// }

	// echo $foo, PHP_EOL;
	// echo $bar, PHP_EOL;
	// echo $mama, PHP_EOL;

	// // echo ">>> >>> ", $argc;

	// some_function();


	$kk = new MyClass();
	$kk->work();
    $kk->eat();
    $kk->sing();

	//var_dump($_SERVER)

	class MyClass{

		public function work() {
			echo '書類を整理しています', PHP_EOL;
		}

		public function eat() {
			echo 'ピザを食べている',PHP_EOL;
		}

		public function sing(){
			echo '石石石ーーーー',PHP_EOL;
		}

	}
?> 