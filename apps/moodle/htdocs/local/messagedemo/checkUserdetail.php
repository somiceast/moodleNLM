<?php
/**
 * function select from database
 *
 */

//session_start();
require_once(__DIR__ . "/../../config.php");
require_once(__DIR__ . '/api/PHP-DialogFlow-Webhooks-Fulfillment-API/src/Webhook_v1.php');
require_once('../../local/messagedemo/connectSQL.php');

global $DB, $USER, $studentID;

//new webhook.php
$wh = new Webhook('newagent-dcry');
$intent = $wh->get_intent();
$input = $wh->get_query();
$wh->respondv1();

//if (isloggedin() || isguestuser()) {
if(!isloggedin()){
    echo isloggedin()."result";
    $wh->build_button("µã»÷µÇÂ¼","https://moodlenlm.xyz/moodle/login/index.php");
}else{
    $wh->respondv1("你需要登陆本系统");
    //new connSQL
    $connSQL = new connectSQL();
    $conn = $connSQL->buildsqlconnect();

// check the sessionid existed
//if (isset($_SESSION['dialogflwoID'])) {
    $studentID = $USER->id;
    // echo $result;
    switch ($intent) {
        case "getStudentName":
            // TODO
            $result = $connSQL->select($conn, 'mdl_user', 'username', 'username', $input);
            $_SESSION['userid'] = $result['id'];
            if ($result) {
                $result_insert = $connSQL->insert($conn, 'mdl_local_messagedemo', $input, 1, $result['id']);
                $wh->respondv1("你好, " . $input);
            } else {
                $wh->respondv1("username not found");

            }
        // TODO 推最近的成绩与当前的课程
        case "welcome":
            // TODO
        case "getStudentGrade":
            // TODO
            if (!$studentID) {
                $grade = $connSQL->select($conn, 'mdl_quiz_grades', 'grade', 'id', $studentID);
                $connSQL->recentgrade = $grade;
            }
        default:
            // echo $_SESSION['dialogflwoID'];
//		$wh->respondContext('请输入帮助来获得指引', 'help', $result);
            echo 'hi';
    }

}