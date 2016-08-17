<?php
class block_didaskogrademe extends block_base{
	public function init(){
		$this->title = get_string('didaskogrademe','block_didaskogrademe');
	}
	
	public function get_content() {
		global $CFG, $PAGE;
		// null checking
		if ($this->content !== null) {
			return $this->content;
		}
	
		// inclide javascript
   		require_once($CFG->dirroot.'/blocks/grade_me/lib.php');
		$PAGE->requires->jquery();
		$PAGE->requires->js('/blocks/grade_me/javascript/grademe.js'); 
		$PAGE->requires->js('/blocks/didaskogrademe/javascript/didaskogrademe.js');
		$this->content         =  new stdClass;
		$this->content->text = '<button id="didaskoGradeMeButton" class="btn btn-mini btn-primary" type="button">Collapse/Expand All</button>';
		$this->content->text .='<dl id="didaskoGradeMePanel"></dl>';
		return $this->content;
	}
}
