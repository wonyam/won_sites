<?php

header("Access-Control-Allow-Origin: *"); // 이것만 있으면 됨

header('Content-type: application/json; charset=utf-8');

if($_GET['val']=='1'){

	$array = array(

				'status' => 1, 

				'count' => 10, 

				'data'	=> array(

					'code' => '0000', 

					'list' => array(

						'test' => '111', 

						'test2' => '1112', 

						'test3' => '1113', 

						'test4' => '1114', 

						'test5' => '1115', 

						'test6' => '1116', 

						'test7' => '1117', 

						'test8' => '1118', 

						'test9' => '1119', 

						'test10' => '11110', 

					)

				)

			);

}else{

	$array = array(

				'status' => 0,

				'data' => array()

			);

}

echo $_GET['callback']."(".json_encode($array).")";

?>