<?php
include_once('./_common.php');

$mode = $_POST['mode'];
$bo = $_POST['bo_table'];
$boname = $g5['write_prefix'].$bo;
$wr_id = $_POST['wr_id'];
if($mode == 'qa'){
	$sql = "UPDATE {$boname} SET wr_1 = '1' where wr_id = '$wr_id'";
	sql_query($sql);
}
if($mode == 'qa_cancle'){
	$sql = "UPDATE {$boname} SET wr_1 = '' where wr_id = '$wr_id'";
	sql_query($sql);
}
?>