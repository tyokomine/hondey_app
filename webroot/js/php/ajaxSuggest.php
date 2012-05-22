<?php
//Setting language for multi byte
mb_language('Japanese');
ini_set('mbstring.detect_order', 'auto');
ini_set('mbstring.http_input'  , 'auto');
ini_set('mbstring.http_output' , 'pass');
ini_set('mbstring.internal_encoding', 'UTF-8');
ini_set('mbstring.script_encoding'  , 'UTF-8');
ini_set('mbstring.substitute_character', 'none');
mb_regex_encoding('UTF-8');

//****************************************************************
//Setting for connecting database
$db_settings = array(
	array('table'=>'prefectures', 'field'=>'name', 'order'=>'id', 'sub'=>'id'),
	array('table'=>'users_ja',    'field'=>'name', 'order'=>'id', 'sub'=>'id'),
	array('table'=>'nations',     'field'=>'name', 'order'=>'id', 'sub'=>'id'),
	array('table'=>'users_en',    'field'=>'name', 'order'=>'id', 'sub'=>'id')
);
//****************************************************************
/* ----example SQL----
SELECT alias1 FROM (
	SELECT name AS alias1, id AS alias2 FROM nations
		UNION
	SELECT name AS alias1, id AS alias2 FROM users_en
) as alias3
WHERE
	alias1 LIKE '%foo%'
		OR
	alias1 LIKE '%bar%'
ORDER BY (
	CASE
		WHEN alias1 LIKE 'foo%' THEN 0
		WHEN alias1 LIKE 'bar%' THEN 1
		ELSE 2
	END
), alias2 ASC
LIMIT 20;
*/



//----------------------------------------------------
// 渡された値を整える
//----------------------------------------------------
$and_or   = sqlite_escape_string($_GET['and_or']); 
$limit    = sqlite_escape_string($_GET['limit']);
$order_by = sqlite_escape_string($_GET['order_by']);
$q_word   = sqlite_escape_string($_GET['q_word']);
$q_word   = trim(mb_convert_kana($q_word, 's'));
$q_word   = preg_split('/[ \t\n\r]+/u', $q_word);
$q_cnt    = count($q_word);
$sub_info = ($_GET['sub_info'] == 'false') ? false : $db_settings[$_GET['sub_info']];
$dbset    = preg_split('/[^0-9]+/u', $_GET['database']);


$database = array();
foreach($dbset as $key => $value){
	if(is_numeric($value)) $database[$key] = $db_settings[$value];
}

//----------------------------------------------------
// データベースに接続
//----------------------------------------------------
$db = sqlite_open('../SQLite2/test.sqlite','0600');

//----------------------------------------------------
// クエリを作成
//----------------------------------------------------
if($sub_info){
	$query = "SELECT alias1, alias3 FROM (";
	foreach($database as $key=>$val){
		//複数のテーブル・フィールドを結合する
		if($key > 0) $query .= " UNION ";
		$query .= "
			SELECT   {$val['field']} as alias1, {$val['order']} as alias2, {$val['sub']} as alias3
			FROM     {$val['table']}
		";
	}
}else{
	$query = "SELECT alias1 FROM (";
	foreach($database as $key=>$val){
		//複数のテーブル・フィールドを結合する
		if($key > 0) $query .= " UNION ";
		$query .= "
			SELECT   {$val['field']} as alias1, {$val['order']} as alias2
			FROM     {$val['table']}
		";
	}
}
$query .= "
) as alias4
";

//*******************
//WHERE句
//*******************
$query .= "
WHERE
";
for($i=0; $i<$q_cnt; $i++){
	//複数の単語を検索条件にする
	//AND検索か、OR検索か?
	if($i > 0) $query .= " $and_or ";
	$query .= " alias1 LIKE '%{$q_word[$i]}%' ";
}


//*******************
//ORDER BY句
//*******************
$query .= "
ORDER BY (
	CASE
";

for($i=0; $i<$q_cnt; $i++){
	//複数の単語を並べかえ条件にする
	$query .= " WHEN alias1 LIKE '{$q_word[$i]}'  THEN 0  ";
	$query .= " WHEN alias1 LIKE '{$q_word[$i]}%' THEN ".($i+1)." ";
}
$query .= " ELSE ".($q_cnt+1);
$query .= "
	END
), alias2 $order_by
LIMIT $limit
";

//----------------------------------------------------
// データベースに問い合わせる
//----------------------------------------------------
$rows  = sqlite_query($db,$query);
$data = array();
for($i=0; $row = sqlite_fetch_array($rows,SQLITE_NUM); $i++){
	foreach($row as $key=>$value){
		$data[$i][] = $value;
	}
}
echo json_encode($data);

//----------------------------------------------------
// 終了
//----------------------------------------------------
sqlite_close($db);
?>
