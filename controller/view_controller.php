<?php 

	require('../lib/php_excel/php-excel-reader/excel_reader2.php');
	require('../lib/php_excel/SpreadsheetReader.php');

	function get_excel_data($path){
		$Reader = new SpreadsheetReader($path);
		foreach ($Reader as $Row)
		{
			print_r($Row);
			echo(count($Row));
			foreach ($Row as $key => $value) {
				
			}
		}
	}