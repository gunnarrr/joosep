<?php
/**
 * Created by JetBrains PhpStorm.
 * User: lubuntu
 * Date: 1/12/13
 * Time: 12:45 PM
 * To change this template use File | Settings | File Templates.
 */
class Controller_Welcome extends Controller_Auth {

	public function action_index()
	{
		$this->response->body('hello, world!');
	}

}