<?php

	function lang ($phrase) {

			static $lang = array(

				"hello" => 'welcome ',
				"admin" => 'Adminstrator'

				);

			return $lang[$phrase];
	}

?>