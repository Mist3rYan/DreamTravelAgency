<?php
/**
 * WHIP libary file.
 *
 * @package Yoast\WHIP
 */

/**
 * Interface Whip_Listener.
 */
interface Whip_Listener {

	/**
	 * Method that should implement the listen functionality.
	 *
	 * @return void
	 */
	public function listen();
}
