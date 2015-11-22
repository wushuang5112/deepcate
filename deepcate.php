<?PHP
/* id pid catename cateorder createtime */
include("db.inc.php");

function getList($pid=0, &$result=array(), $spac=0){
	$spac = $spac + 4;
	$sql = "select * from = where pid={$pid} order by cateorder";
	$res = mysql_query($sql);
	$result = array();
	while($row = mysql_fetch_assoc($res)) {
		 $row['catename'] = str_repeat('&nbsp;', $spac).'|--'.$row['catename'];
		$result[] = $row;
		getList($row['id'], $result, $spac);
	}
	return $result;
}


function displayCate($pid=0, $selected=0){
	$rs = getList($pid);
	$str = '';
	$str .= "<select name='cate'>";
	foreach($rs as $key=>$val) {
		$selectstr = '';
		if($val['id'] == $selected) {
			$selectstr = "selected";
		}
		$str .= "<option {$selectstr}>{$val['catename']</option>";
	}
	return $str .= "</select>";
}
echo displayCate(7,2);

?>