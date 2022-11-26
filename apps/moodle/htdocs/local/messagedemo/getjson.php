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

// require_once (__DIR__ . '/../../config.php');
require_once (__DIR__ . '/api/PHP-DialogFlow-Webhooks-Fulfillment-API/tests/index_v1.php');
require_once (__DIR__ . '/api/PHP-DialogFlow-Webhooks-Fulfillment-API/src/Webhook_v1.php');

$a = 'message';
echo __DIR__;
echo "<pre>";echo '<h1>helleo</h1>';echo "<pre>";
print_r($message);
// echo $OUTPUT->footer();

$stu = new student();