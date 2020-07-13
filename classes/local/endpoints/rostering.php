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
 * One Roster Enrolment Client.
 *
 * @package    enrol_oneroster
 * @copyright  Andrew Nicols <andrew@nicols.co.uk>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace enrol_oneroster\local\endpoints;

use enrol_oneroster\client_helper;
use enrol_oneroster\local\endpoint;
use enrol_oneroster\local\interfaces\rostering_endpoint as rostering_endpoint_interface;

/**
 * One Roster Endpoint for the v1p1 client.
 *
 * @package    enrol_oneroster
 * @copyright  Andrew Nicols <andrew@nicols.co.uk>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class rostering extends endpoint implements rostering_endpoint_interface {
    const getAllAcademicSessions = 'getAllAcademicSessions';
    const getAcademicSession = 'getAcademicSession';
    const getAllClasses = 'getAllClasses';
    const getClass = 'getClass';
    const getAllCourses = 'getAllCourses';
    const getCourse = 'getCourse';
    const getAllGradingPeriods = 'getAllGradingPeriods';
    const getGradingPeriod = 'getGradingPeriod';
    const getAllDemographics = 'getAllDemographics';
    const getDemographics = 'getDemographics';
    const getAllEnrollments = 'getAllEnrollments';
    const getEnrollment = 'getEnrollment';
    const getAllOrgs = 'getAllOrgs';
    const getOrg = 'getOrg';
    const getAllSchools = 'getAllSchools';
    const getSchool = 'getSchool';
    const getAllStudents = 'getAllStudents';
    const getStudent = 'getStudent';
    const getAllTeachers = 'getAllTeachers';
    const getTeacher = 'getTeacher';
    const getAllTerms = 'getAllTerms';
    const getTerm = 'getTerm';
    const getAllUsers = 'getAllUsers';
    const getUser = 'getUser';
    const getCoursesForSchool = 'getCoursesForSchool';
    const getEnrollmentsForClassInSchool = 'getEnrollmentsForClassInSchool';
    const getStudentsForClassInSchool = 'getStudentsForClassInSchool';
    const getTeachersForClassInSchool = 'getTeachersForClassInSchool';
    const getEnrollmentsForSchool = 'getEnrollmentsForSchool';
    const getStudentsForSchool = 'getStudentsForSchool';
    const getTeachersForSchool = 'getTeachersForSchool';
    const getTermsForSchool = 'getTermsForSchool';
    const getClassesForTerm = 'getClassesForTerm';
    const getGradingPeriodsForTerm = 'getGradingPeriodsForTerm';
    const getClassesForCourse = 'getClassesForCourse';
    const getClassesForStudent = 'getClassesForStudent';
    const getClassesForTeacher = 'getClassesForTeacher';
    const getClassesForSchool = 'getClassesForSchool';
    const getStudentsForClass = 'getStudentsForClass';
    const getTeachersForClass = 'getTeachersForClass';

    /** @var array List of commands and their configuration */
    protected static $commands = [
        self::getAllAcademicSessions => [
            'url' => '/academicSessions',
            'method' => client_helper::GET,
            'description' => 'Return collection of all academic sessions.',
            'collection' => [
                'academicSessions',
            ],
        ],

        self::getAcademicSession => [
            'url' => '/academicSessions/:id',
            'method' => client_helper::GET,
            'description' => 'Return specific Academic Session.',
        ],

        self::getAllClasses => [
            'url' => '/classes',
            'method' => client_helper::GET,
            'description' => 'Return collection of classes.',
            'collection' => [
                'classes',
            ],
        ],

        self::getClass => [
            'url' => '/classes/:id',
            'method' => client_helper::GET,
            'description' => 'Return specific class.',
        ],

        self::getAllCourses => [
            'url' => '/courses',
            'method' => client_helper::GET,
            'description' => 'Return collection of courses.',
            'collection' => [
                'courses',
            ],
        ],

        self::getCourse => [
            'url' => '/courses/:id',
            'method' => client_helper::GET,
            'description' => 'Return specific course.',
        ],

        self::getAllGradingPeriods => [
            'url' => '/gradingPeriods',
            'method' => client_helper::GET,
            'description' => 'Return collection of grading periods. A Grading Period is an instance of an AcademicSession.',
            'collection' => [
                'academicSessions',
            ],
        ],

        self::getGradingPeriod => [
            'url' => '/gradingPeriods/:id',
            'method' => client_helper::GET,
            'description' => 'Return specific Grading Period. A Grading Period is an instance of an AcademicSession.',
        ],

        self::getAllDemographics => [
            'url' => '/demographics',
            'method' => client_helper::GET,
            'description' => 'Return collection of demographics.',
            'collection' => [
                'demographics',
            ],
        ],

        self::getDemographics => [
            'url' => '/demographics/:id',
            'method' => client_helper::GET,
            'description' => 'Return specific demographics.',
        ],

        self::getAllEnrollments => [
            'url' => '/enrollments',
            'method' => client_helper::GET,
            'description' => 'Return collection of all enrollments.',
            'collection' => [
                'enrollments',
            ],
        ],

        self::getEnrollment => [
            'url' => '/enrollments/:id',
            'method' => client_helper::GET,
            'description' => 'Return specific enrollment.',
        ],

        self::getAllOrgs => [
            'url' => '/orgs',
            'method' => client_helper::GET,
            'description' => 'Return collection of Orgs.',
            'collection' => [
                'orgs',
            ],
        ],

        self::getOrg => [
            'url' => '/orgs/:id',
            'method' => client_helper::GET,
            'description' => 'Return Specific Org.',
        ],

        self::getAllSchools => [
            'url' => '/schools',
            'method' => client_helper::GET,
            'description' => 'Return collection of schools. A School is an instance of an Org.',
            'collection' => [
                'orgs',
            ],
        ],

        self::getSchool => [
            'url' => '/schools/:id',
            'method' => client_helper::GET,
            'description' => 'Return specific school. A School is an instance of an Org.',
        ],

        self::getAllStudents => [
            'url' => '/students',
            'method' => client_helper::GET,
            'description' => 'Return collection of students. A Student is an instance of a User.',
            'collection' => [
                'users',
                'students',
            ],
            'defaultsort' => 'familyName',
        ],

        self::getStudent => [
            'url' => '/students/:id',
            'method' => client_helper::GET,
            'description' => 'Return specific student. A Student is an instance of a User.',
        ],

        self::getAllTeachers => [
            'url' => '/teachers',
            'method' => client_helper::GET,
            'description' => 'Return collection of teachers. A Teacher is an instance of a User.',
            'collection' => [
                'users',
                'teachers',
            ],
            'defaultsort' => 'familyName',
        ],

        self::getTeacher => [
            'url' => '/teachers/:id',
            'method' => client_helper::GET,
            'description' => 'Return specific teacher.',
        ],

        self::getAllTerms => [
            'url' => '/terms',
            'method' => client_helper::GET,
            'description' => 'Return collection of terms. A Term is an instance of an AcademicSession.',
            'collection' => [
                'academicSessions',
                'terms',
            ],
        ],

        self::getTerm => [
            'url' => '/terms/:id',
            'method' => client_helper::GET,
            'description' => 'Return specific term.',
        ],

        self::getAllUsers => [
            'url' => '/users',
            'method' => client_helper::GET,
            'description' => 'Return collection of users',
            'collection' => [
                'users',
            ],
            'defaultsort' => 'familyName',
        ],

        self::getUser => [
            'url' => '/users/:id',
            'method' => client_helper::GET,
            'description' => 'Return specific user',
            'collection' => [
                'users',
            ],
        ],

        self::getCoursesForSchool => [
            'url' => '/schools/:id/courses',
            'method' => client_helper::GET,
            'description' => 'Return the collection of courses taught by this school.',
            'collection' => [
                'courses',
            ],
        ],

        self::getEnrollmentsForClassInSchool => [
            'url' => '/schools/:school_id/classes/:class_id/enrollments',
            'method' => client_helper::GET,
            'description' => 'Return the collection of all enrollments into this class.',
            'collection' => [
                'enrollments',
            ],
        ],

        self::getStudentsForClassInSchool => [
            'url' => '/schools/:school_id/classes/:class_id/students',
            'method' => client_helper::GET,
            'description' => 'Return the collection of students taking this class in this school.',
            'collection' => [
                'users',
            ],
        ],

        self::getTeachersForClassInSchool => [
            'url' => '/schools/:school_id/classes/:class_id/teachers',
            'method' => client_helper::GET,
            'description' => 'Return the collection of teachers taking this class in this school.',
            'collection' => [
                'users',
            ],
        ],

        self::getEnrollmentsForSchool => [
            'url' => '/schools/:school_id/enrollments',
            'method' => client_helper::GET,
            'description' => 'Return the collection of all enrollments for this school.',
            'collection' => [
                'enrollments',
            ],
        ],

        self::getStudentsForSchool => [
            'url' => '/schools/:school_id/students',
            'method' => client_helper::GET,
            'description' => 'Return the collection of students attending this school.',
            'collection' => [
                'users',
                'students',
            ],
        ],

        self::getTeachersForSchool => [
            'url' => '/schools/:school_id/teachers',
            'method' => client_helper::GET,
            'description' => 'Return the collection of teachers teaching at this school.',
            'collection' => [
                'users',
                'teachers',
            ],
        ],

        self::getTermsForSchool => [
            'url' => '/schools/:school_id/terms',
            'method' => client_helper::GET,
            'description' => 'Return the collection of terms that are used by this school.',
            'collection' => [
                'academicSessions',
                'terms',
            ],
        ],

        self::getClassesForTerm => [
            'url' => '/terms/:term_id/classes',
            'method' => client_helper::GET,
            'description' => 'Return the collection of classes that are taught in this term.',
            'collection' => [
                'classes',
            ],
        ],

        self::getGradingPeriodsForTerm => [
            'url' => '/terms/:term_id/gradingPeriods',
            'method' => client_helper::GET,
            'description' => 'Return the collection of Grading Periods that are part of this term.',
            'collection' => [
                'academicSessions',
            ],
        ],

        self::getClassesForCourse => [
            'url' => '/courses/:course_id/classes',
            'method' => client_helper::GET,
            'description' => 'Return the collection of classes that are teaching this course.',
            'collection' => [
                'classes',
            ],
        ],

        self::getClassesForStudent => [
            'url' => '/students/:student_id/classes',
            'method' => client_helper::GET,
            'description' => 'Return the collection of classes that this student is taking.',
            'collection' => [
                'classes',
            ],
        ],

        self::getClassesForTeacher => [
            'url' => '/teachers/:teacher_id/classes',
            'method' => client_helper::GET,
            'description' => 'Return the collection of classes that this teacher is teaching.',
            'collection' => [
                'classes',
            ],
        ],

        self::getClassesForSchool => [
            'url' => '/schools/:school_id/classes',
            'method' => client_helper::GET,
            'description' => 'Return the collection of classes taught by this school.',
            'collection' => [
                'classes',
            ],
        ],

        self::getStudentsForClass => [
            'url' => '/classes/:class_id/students',
            'method' => client_helper::GET,
            'description' => 'Return the collection of students that are taking this class.',
            'collection' => [
                'users',
            ],
        ],

        self::getTeachersForClass => [
            'url' => '/classes/:class_id/teachers',
            'method' => client_helper::GET,
            'description' => 'Return the collection of teachers that are teaching this class.',
            'collection' => [
                'users',
            ],
        ],
    ];

    /**
     * Get the command data for the specified command.
     *
     * @param   string $command
     * @return  array
     */
    protected static function get_command_data(string $command): array {
        if (array_key_exists($command, self::$commands)) {
            return self::$commands[$command];
        }

        return parent::get_command_data($command);
    }

    /**
     * Get the list of all commands.
     *
     * @return  array
     */
    public static function get_all_commands(): array {
        return array_merge(
            parent::get_all_commands(),
            self::$commands
        );
    }
}
