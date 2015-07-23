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

if ($ADMIN->fulltree) {
    require_once($CFG->dirroot.'/grade/export/bannerxls/lib.php');

    // ID Sources.
    $settings->add(new admin_setting_heading('gradeexport_bannerxls_idsources',
                                             get_string('idsources', 'gradeexport_bannerxls'), ''));

    // CRN - source.
    $options = array();
    $options[GRADEEXPORT_BANNERXLS_CRN_MANUAL] = get_string('manual', 'gradeexport_bannerxls');
    $options[GRADEEXPORT_BANNERXLS_CRN_LMB] = get_string('lmb', 'gradeexport_bannerxls');
    $options[GRADEEXPORT_BANNERXLS_CRN_IDNUMBER] = get_string('courseidnumber', 'gradeexport_bannerxls');
    $options[GRADEEXPORT_BANNERXLS_CRN_FULLNAME] = get_string('coursefullname', 'gradeexport_bannerxls');
    $options[GRADEEXPORT_BANNERXLS_CRN_SHORTNAME] = get_string('courseshortname', 'gradeexport_bannerxls');

    $settings->add(new admin_setting_configselect('gradeexport_bannerxls/crnsource',
                                                  get_string('crnsource', 'gradeexport_bannerxls'),
                                                  get_string('crnsourcehelp', 'gradeexport_bannerxls'),
                   GRADEEXPORT_BANNERXLS_CRN_LMB,
                   $options));

    // CRN - regex.
    $settings->add(new admin_setting_configtext('gradeexport_bannerxls/crnregex',
                                                get_string('crnregex', 'gradeexport_bannerxls'),
                                                get_string('crnregexhelp', 'gradeexport_bannerxls'), ''));

    // Term - source.
    $options = array();
    $options[GRADEEXPORT_BANNERXLS_TERM_MANUAL] = get_string('manual', 'gradeexport_bannerxls');
    $options[GRADEEXPORT_BANNERXLS_TERM_LMB] = get_string('lmb', 'gradeexport_bannerxls');
    $options[GRADEEXPORT_BANNERXLS_TERM_IDNUMBER] = get_string('courseidnumber', 'gradeexport_bannerxls');
    $options[GRADEEXPORT_BANNERXLS_TERM_FULLNAME] = get_string('coursefullname', 'gradeexport_bannerxls');
    $options[GRADEEXPORT_BANNERXLS_TERM_SHORTNAME] = get_string('courseshortname', 'gradeexport_bannerxls');
    $options[GRADEEXPORT_BANNERXLS_TERM_PARENT_CAT_NAME] = get_string('catname', 'gradeexport_bannerxls');
    $options[GRADEEXPORT_BANNERXLS_TERM_PARENT_CAT_IDNUMBER] = get_string('catidnumber', 'gradeexport_bannerxls');
    $options[GRADEEXPORT_BANNERXLS_TERM_GRAND_PARENT_CAT_NAME] = get_string('grandcatname', 'gradeexport_bannerxls');
    $options[GRADEEXPORT_BANNERXLS_TERM_GRAND_PARENT_CAT_NAME] = get_string('grandcatidnumber', 'gradeexport_bannerxls');

    $settings->add(new admin_setting_configselect('gradeexport_bannerxls/termsource',
                                                  get_string('termsource', 'gradeexport_bannerxls'),
                                                  get_string('termsourcehelp', 'gradeexport_bannerxls'),
                   GRADEEXPORT_BANNERXLS_TERM_LMB,
                   $options));

    // Term - regex.
    $settings->add(new admin_setting_configtext('gradeexport_bannerxls/termregex',
                                                get_string('termregex', 'gradeexport_bannerxls'),
                                                get_string('termregexhelp', 'gradeexport_bannerxls'), ''));

    // User - source.
    $options = array();
    $options[GRADEEXPORT_BANNERXLS_USER_MANUAL] = get_string('manual', 'gradeexport_bannerxls');
    $options[GRADEEXPORT_BANNERXLS_USER_LMB] = get_string('lmb', 'gradeexport_bannerxls');
    $options[GRADEEXPORT_BANNERXLS_USER_IDNUMBER] = get_string('useridnumber', 'gradeexport_bannerxls');
    $options[GRADEEXPORT_BANNERXLS_USER_CUSTOM] = get_string('usercustomfield', 'gradeexport_bannerxls');

    $settings->add(new admin_setting_configselect('gradeexport_bannerxls/usersource',
                                                  get_string('usersource', 'gradeexport_bannerxls'),
                                                  get_string('usersourcehelp', 'gradeexport_bannerxls'),
                   GRADEEXPORT_BANNERXLS_USER_LMB,
                   $options));

    // User - custom field.
    $settings->add(new admin_setting_configtext('gradeexport_bannerxls/usercustomfieldid',
                                                get_string('usercustomfieldid', 'gradeexport_bannerxls'),
                                                get_string('usercustomfieldidhelp', 'gradeexport_bannerxls'), ''));

    // Grade setup.
    $settings->add(new admin_setting_heading('gradeexport_bannerxls_gradesetup',
                                             get_string('gradesetup', 'gradeexport_bannerxls'), ''));

    // TODO

    // Special Columns.
    $settings->add(new admin_setting_heading('gradeexport_bannerxls_specialcolumns',
                                             get_string('specialcolumns', 'gradeexport_bannerxls'), ''));

    // Req last date

    // Req hours

    // Req extension date

    // Req incomplete final grade

    // Ext date limit

    // Never attended


    // Misc.
    $settings->add(new admin_setting_heading('gradeexport_bannerxls_miscsettings',
                                             get_string('_miscsettings', 'gradeexport_bannerxls'), ''));

    // Limit to specific enrol plugin

    // Include disabled enrolments

    // Allow teacher enter user ID
    //   Save teacher entered ID

}
