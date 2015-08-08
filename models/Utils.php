<?php
class ReplyKeyboardMarkup{
	public $keyboard;
	public $resize_keyboard;
	public $one_time_keyboard;
	public $selective;
	
	function __construct($resize_keyboard=FALSE, $one_time_keyboard = FALSE, $selective=FALSE){
		$this->keyboard=array();
		$this->keyboard[0]=array();
		$this->resize_keyboard=$resize_keyboard;
		$this->one_time_keyboard=$one_time_keyboard;
		$this->selective=$selective;
	}
	public function add_option($option){
		$this->keyboard = $option;
	}
}
class ReplyKeyboardHide{
	public $hide_keyboard;
	public $selective;
	
	function __construct($hide_keyboard=TRUE, $selective = FALSE){
		$this->hide_keyboard=$hide_keyboard;
		$this->selective=$selective;
	}
}
class ForceReply{
	public $force_reply;
	public $selective;
	
	function __construct($force_reply=TRUE, $selective = FALSE){
		$this->force_reply=$force_reply;
		$this->selective=$selective;
	}
}
