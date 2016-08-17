<?php

defined('MOODLE_INTERNAL') || die();

function getContentFromGradeMe(){
	global $CFG, $DB, $COURSE;
	require_login($COURSE);
	$instance = context_course::instance($COURSE->id);
	$gradeMeBlock = block_instance( 'grade_me', $instance );
	echo $gradeMeBlock->get_content()->text;
}
