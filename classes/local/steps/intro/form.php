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

namespace gradeexport_bannerxls\local\steps\intro;
use gradeexport_bannerxls\local\steps;

defined('MOODLE_INTERNAL') || die();

/**
 * A common ancestor for all forms in case needed.
 *
 * @package    gradeexport_bannerxls
 * @author     Eric Merrill <merrill@oakland.edu>
 * @copyright  2015 Oakland University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class form extends steps\base\form {
    /**
     * Form definition.
     */
    protected function definition() {

    }
}
