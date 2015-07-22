<?php
// This file is part of Moodle - http://moodle.org/
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
 * A grade exported for Ellucian Banner XE faculty grade import.
 *
 * @package    gradeexport_bannerxls
 * @author     Eric Merrill <merrill@oakland.edu>
 * @copyright  2015 Oakland University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once '../../../config.php';
require_once 'lib.php';

$id = required_param('id', PARAM_INT); // course id

$PAGE->set_url('/grade/export/bannerxls/index.php', array('id'=>$id));

if (!$course = $DB->get_record('course', array('id'=>$id))) {
    print_error('nocourseid');
}

require_login($course);
$context = context_course::instance($id);

require_capability('moodle/grade:export', $context);
require_capability('gradeexport/bannerxls:view', $context);

print_grade_page_head($COURSE->id, 'export', 'bannerxls', get_string('exportto', 'grades') . ' ' . get_string('pluginname', 'gradeexport_bannerxls'));
export_verify_grades($COURSE->id);

/*if (!empty($CFG->gradepublishing)) {
    $CFG->gradepublishing = has_capability('gradeexport/xls:publish', $context);
}*/

/*$actionurl = new moodle_url('/grade/export/xls/export.php');
$formoptions = array(
    'publishing' => false,
    'simpleui' => true,
    'multipledisplaytypes' => true
);

$mform = new grade_export_form($actionurl, $formoptions);

$groupmode    = groups_get_course_groupmode($course);   // Groups are being used
$currentgroup = groups_get_course_group($course, true);
if ($groupmode == SEPARATEGROUPS and !$currentgroup and !has_capability('moodle/site:accessallgroups', $context)) {
    echo $OUTPUT->heading(get_string("notingroup"));
    echo $OUTPUT->footer();
    die;
}

groups_print_course_menu($course, 'index.php?id='.$id);
echo '<div class="clearer"></div>';

$mform->display();*/

$renderer = $PAGE->get_renderer('gradeexport_bannerxls');

$mform = new gradeexport_bannerxls\local\forms\base();

$mform->display();


echo $OUTPUT->footer();

