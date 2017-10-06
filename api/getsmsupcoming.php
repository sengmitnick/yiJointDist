<?php
$obj = array(
	'title' => '工联单审批',
    'content' => '乙方合同负责人【敖博】工联单【碧景悦府拆除黄色标识护架工程】需要您审批，请尽快处理！'
);
$list = array($obj);
for ($i=0; $i < 10 ; $i++) { 
	array_push($list, $obj);
}
echo json_encode($list);