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

require_once $CFG->dirroot.'/grade/export/lib.php';
require_once 'grade_export_bannerxls.php';


define('GRADEEXPORT_BANNERXLS_CRN_MANUAL', 0);
define('GRADEEXPORT_BANNERXLS_CRN_LMB', 1);
define('GRADEEXPORT_BANNERXLS_CRN_IDNUMBER', 2);
define('GRADEEXPORT_BANNERXLS_CRN_FULLNAME', 3);
define('GRADEEXPORT_BANNERXLS_CRN_SHORTNAME', 4);

define('GRADEEXPORT_BANNERXLS_TERM_MANUAL', 0);
define('GRADEEXPORT_BANNERXLS_TERM_LMB', 1);
define('GRADEEXPORT_BANNERXLS_TERM_IDNUMBER', 2);
define('GRADEEXPORT_BANNERXLS_TERM_FULLNAME', 3);
define('GRADEEXPORT_BANNERXLS_TERM_SHORTNAME', 4);
define('GRADEEXPORT_BANNERXLS_TERM_PARENT_CAT_NAME', 5);
define('GRADEEXPORT_BANNERXLS_TERM_PARENT_CAT_IDNUMBER', 6);
define('GRADEEXPORT_BANNERXLS_TERM_GRAND_PARENT_CAT_NAME', 7);
define('GRADEEXPORT_BANNERXLS_TERM_GRAND_PARENT_CAT_IDNUMBER', 8);

define('GRADEEXPORT_BANNERXLS_USER_MANUAL', 0);
define('GRADEEXPORT_BANNERXLS_USER_LMB', 1);
define('GRADEEXPORT_BANNERXLS_USER_IDNUMBER', 2);
define('GRADEEXPORT_BANNERXLS_USER_CUSTOM', 3);
