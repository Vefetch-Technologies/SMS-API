<?php 
		

	function delete($table_name, $condition,$conn){
		$table_name = sanitize($table_name, $conn);
		$sql = get_delete_query($table_name, $condition, $conn);
		return execute_query($sql, $conn);
	}

	function get_delete_query($table_name, $condition, $conn){
		$sql = "DELETE FROM ";
		if(!empty($table_name)){
			$sql = $sql.'`'.$table_name."` WHERE ";
		}
		foreach ($condition as $column_name => $value) {
			$column_name = sanitize($column_name, $conn);
			$value = sanitize($value, $conn);
			$sql = $sql."`".$column_name."` = ".'"'.$value.'"';
		}
		return $sql;
	}