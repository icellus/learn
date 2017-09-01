<?php

// class test
// {
	
// 	function create(array $data, callable $preSave = null)
// 	{
// 		$preSave && $preSave($data);

// 		return $this->saveRecord($data);
// 	}

// 	public function saveRecord($data) {
// 		foreach ($data as $k => $v) {
// 			echo $v;
// 			echo '<br>';
// 		}
// 	}
// }

// $test = new test();

// $test->create([],function(&$data){
// 	foreach ($data as &$v){
// 		$v = $v + 1;
// 	}
// });


// $some_state = 'initial';

// function gen() {
// 	global $some_state;

// 	echo "gen() execution start \n";
// 	echo "<br>";
// 	$some_state = "changed";

// 	yield 1;
// 	yield 2;
// }

// function peek_state() {
// 	global $some_state;
// 	echo "\$some_state = $some_state\n";
// 	echo "<br>";
// }

// echo "calling gen() ... \n";
// 	echo "<br>";
// $result = gen();
// echo "gen() was called\n";
// 	echo "<br>";

// peek_state();
// echo "iterating...\n";
// 	echo "<br>";
// foreach($result as $val) {
// 	echo "iteration: $val\n";
// 	echo "<br>";
// 	peek_state();
// }
	
// try finally
/*function gengerator(){
	$complete = false;

	try {
		while (($result =  some_function())) {
			yield $result;
		}

		$complete = true;
	} finally {
		if (!$complete) {
			echo 'goods';	
		}else {
			echo "bads";
		}
	}

	echo 'the loop has completes';
}
gengerator();*/


/*function printer() {
	while (true) {
		$string = yield;
		echo $string;	
	}
}

$printer = printer();
$printer->send("hello world");
$printer->send("hello world2");
var_dump($printer);*/


/*function testEcho(){
	echo 123;
}

$a = testEcho();
// var_dump($a);*/

// $a = (yield);

/*function test(&$data) {
	yield $data;
	echo $data;
	var_dump($data);
}

$data = '';
$test = test($data);
var_dump($data);
var_dump($test);
$test->current();
$test->next();*/