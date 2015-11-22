# id, catename, path,
function likecate(){
	$sql = "select id, catename, path, concat(path, ',', id) as fullpath from like cate order by fullpath asc";
	$res = mysql_query($sql);
	$result = array();
	while($row = mysql_fetch_assoc($res)){
		$deep = count(explode(',', $row['fullpath']));
		$row['catename'] = str_repeat('&nbsp;&nbsp;'.$deep).'|--'.$row['catename'];
		$result[] = $row;
	}
	return $result;
}

$res = likecate();
print_r($res);

function getPathCate($cateid){
	$sql = "select * from likecate where id='{$cateid}'";
	$res = mysql_query($sql);
	$row = mysql_fetch_assoc($res);
	$ids = $row['fullpath'];
	$sql = "select * from likecate where id in ($ids) order by id asc";
	$res = mysql_query($sql);
	$result = array();
	while($row=mysql_fetch_assoc($res)){
		$result[] = $row;
	}
	return $result;
}

function displayCatePath($cateid, $link="cate.php?cid="){
	$res = getPathCate(4);
	$str = '';
	foreach($res as $k => $v){
		//str.= "<a href=">{$v['catename']}</a>>";
		str.= "<a href='{$link}{$v['id']}'>{$v['catename']}</a>>";
	}
	return str;
}
echo displayCatePath(4)