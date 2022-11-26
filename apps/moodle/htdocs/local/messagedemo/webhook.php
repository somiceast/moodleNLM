<?php
//define('CLI_SCRIPT', true);
//require_once(__DIR__ . '/../../config.php');
require_once(__DIR__ . '/api/PHP-DialogFlow-Webhooks-Fulfillment-API/src/Webhook_v1.php');
require_once(__DIR__ . '/api/pinyin/Pinyin.php');
require_once('../../local/messagedemo/connectSQL.php');

global  $USER, $studentID, $connSQL, $conn, $wh;
$connSQL = new connectSQL();
$conn = $connSQL->buildsqlconnect();

$wh = new Webhook('newagent-dcry');
$output = $wh->decodedWebhook->queryResult;
$wh->respondv1($output);



//$wh = new Webhook('newagent-igqu');
//$wh = new Webhook('newagent-mllk');
$intent = $wh->get_intent();
$input = $wh->get_query();
$sessionId = $wh->get_sessionId();
//temp test
//$intent  = 'getStudentName';
//$input = '东芳荷';

//input intent check
//if ($intent) {
if ($intent) {
    switch ($intent) {
        // 查询数据库中是否有该用户
        case "test":
            $wh->respondv1('测试');
        case "help":
            $wh->respondv1('帮助？');
        case "getStudentName":
            $result = $connSQL->select($conn, 'mdl_user', 'username', 'username', Pinyin::getPinyin($input));
            if($result){
                $result_insertmsg = $connSQL->insertmsg($conn, 'mdl_local_messagedemo', $input, 1, $result['id']);
                $result_insertsession = $connSQL->insertsession($conn, $sessionId, $result['id']);
                $wh->respondContext("你好,".$wh->get_query().", 请查看个人首页了解学习计划",'userExist',array(
                    'userid'=>$result['id'],
                ));
            }else{
                $wh->respondContext("当前用户不存在，请重新输入姓名","getUserdetail",'');
            }
        //查询当前用户能力
        case "getCompetency":
            $contexts = $wh->get_outputContexts();
            $wh->respondv1($contexts);
//            $userid = $connSQL->select($conn, 'mdl_local_messagedemo', 'sessionid', 'sessionid', $wh->get_sessionId());
        case "getScore":
            // TODO
            $wh->respondv1('$userid');
            $userid = $connSQL->select($conn, 'mdl_local_messagedemo_sessionid', 'userid','sessionid', $sessionId);
            if ($userid) {
                // TODO
            }else{
                // TODO
            }
        default:
            $wh->respondContext("请输入帮助", 'help', "");
    }
} else {
    $wh->respondContext('请输入帮助', 'help', '');
}
