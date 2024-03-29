<?php

require_once 'Dase/DBO.php';

/*
 * DO NOT EDIT THIS FILE
 * it is auto-generated by the
 * script 'bin/class_gen.php
 * 
 */

class Dase_DBO_Autogen_TagItem extends Dase_DBO 
{
	public function __construct($db,$assoc = false) 
	{
		parent::__construct($db,'tag_item', array('sort_order','item_id','tag_id','updated','p_collection_ascii_id','p_serial_number','size','annotation'));
		if ($assoc) {
			foreach ( $assoc as $key => $value) {
				$this->$key = $value;
			}
		}
	}
}