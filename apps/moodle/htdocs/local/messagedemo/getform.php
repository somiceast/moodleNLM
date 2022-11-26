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

// require(__DIR__ . '/api/PHP-DialogFlow-Webhooks-Fulfillment-API/src/Webhook_v1.php');

$PAGE->set_url(new moodle_url('/local/messagedemo/getform.php'));
$PAGE->set_context(\context_system::instance());
$PAGE->set_title('测试title');


echo $OUTPUT->header();


echo "<h1>go get a form</h1>";

echo $OUTPUT->footer();
