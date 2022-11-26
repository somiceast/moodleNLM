<?php

// This file is part of the Local Chatbot Dialogflow plugin
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * This plugin verify group user ldap and create
 * cohort same name specified settings
 *
 * @package    local
 * @subpackage local_messagedemo
 * @copyright  2022 Fanghe, somiceast@gmail.com
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once (__DIR__ . '/../../config.php');
global $DB, $USER;

$PAGE->set_url(new moodle_url('/local/messagedemo/manage.php'));
$PAGE->set_context(\context_system::instance());
$PAGE->set_title('测试title');

$sql = "SELECT lm.msgtext, lm.userid, lm.msgtype, user.username, user.id, lm.timecreated
            FROM {local_messagedemo} lm
            left outer join {user} user
            ON lm.userid = user.id";
$params = [
    'userid' => $USER->id,
];
//$msgs = array_values($DB->get_records_sql($sql));


// testsql
$sql = "SELECT qr.submitted,qr.id,qrb.choice_id,qq.name,qr.userid,qq.question_competency
                        FROM {questionnaire_response_bool} qrb
                            JOIN {questionnaire_response} qr ON qr.id = qrb.response_id
                            JOIN {questionnaire} q ON q.id = qr.questionnaireid
                            JOIN {questionnaire_question} qq ON qq.id = qrb.question_id
                        WHERE qr.complete = 'y'
                        AND qq.question_competency = :compid
                        AND qr.userid = :userid
                        ORDER BY qr.submitted DESC limit 1
                        ";
$sql1 = 'SELECT qrb.choice_id FROM {questionnaire_response_bool} qrb';
$params = [
    'userid' => $USER->id,
    'compid' => 186,
];
try{$quesionaire_response = $DB->get_records_sql($sql, $params);
}catch(Exception $e) {
    print_r($e);
}
print_r($quesionaire_response);
$choice_id = current($quesionaire_response)->choice_id;
if($choice_id == 'y'){
    print_r($quesionaire_response);
}elseif ($choice_id =='n'){
    print_r('no');
}else{
    print_r('not yet');
}

echo $OUTPUT->header();

$description = '<span>测试描述</span>';
foreach ($msgs as $msg){
    $msg->timecreated = date("Y-m-d H:i:s",$msg->timecreated);
}

$templatecontext = (object)[
    'messagetodisplay' => '显示',
    'username' => '王而',
    'grade' => '90',
    'description' => format_text($description, FORMAT_HTML),
    'notdisplay' => '不显示本条',
    'messages' => array(
        array(
            'username' => 'anna',
            'msg' => 'hi',
            ),
        array(
            'username' => 'bios',
            'msg' => 'bye',
        ),
    ),
    'msgs'=>$msgs,
];
/**
 * Templates are saved in templates/*.mustache files within core components and plugins folders.
 * When loading them, templates are identified by their full component name followed by slash and
 * the filename without the file extension.
 */
echo $OUTPUT->render_from_template('local_messagedemo/manage', $templatecontext);
echo $quesionaire_response;
echo date("Y-m-d H:i:s",'1666061793');
echo $OUTPUT->footer();

