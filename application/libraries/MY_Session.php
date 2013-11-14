<?php
class MY_Session extends CI_Session
{
	function sees_update()
	{
		// Listen to HTTP_X_REQUESTED_WITH (to check for ajax)
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH']  !== 'XMLHttpRequest') {
			parent::sees_update();
		}
	}
}