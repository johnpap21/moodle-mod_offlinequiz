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
 * The mod_offlinequiz instance list viewed event.
 *
 * @package    mod_offlinequiz
 * @author  2014 Juergen Zimmer <zimmerj7@univie.ac.at>
 * @copyright 2014 Academic Moodle Cooperation {@link http://www.academic-moodle-cooperation.org}
 * @since Moodle 2.7
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace mod_offlinequiz\event;

defined('MOODLE_INTERNAL') || die();

/**
 * The mod_offlinequiz instance list viewed event class.
 *
 * @package    mod_offlinequiz
 * @since      Moodle 2.7
 * @copyright  2014 Juergen Zimmer <zimmerj7@univie.ac.at>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class course_module_instance_list_viewed extends \core\event\course_module_instance_list_viewed {
    // No code required here as the parent class handles it all.
}
