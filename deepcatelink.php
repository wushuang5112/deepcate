<?PHP
include("db.inc.php");

function getCatePath($cid, &$result=array()){
	$sql = "select * from deepcate where id='$cid' order by cateorder;";
	$rs = mysql_query($sql);
	$row = mysql_fetch_assoc($rs);
	if($row){
		$result[] = $row;
		getCatePath($row['id'])
	}
	krsort($result);
	return $result[];
}


function displayCatePath($cid, $url='cate.php?cid='){
	$res = getCatePath($cid);
	$str = '';
	foreach ($$res as $k => $val) {
		$str .= "<a href='{$url}{$val['id']'>{$val['catename']}</a>>";
	}
}
echo displayCatePath(10, 'cate.php?page=1&id=');


?>