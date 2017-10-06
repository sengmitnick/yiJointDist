<?php
$obj = array(
	'title' => '工联单现场确认通过',
    'content' => '您发起的工联单【碧景悦府拆除黄色标识护架工程】现场确认通过，已转入地产内部审批，请关注！'
);
$list = array($obj);
for ($i=0; $i < 10 ; $i++) { 
	array_push($list, $obj);
}
echo json_encode($list);