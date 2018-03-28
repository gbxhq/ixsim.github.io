<?php
/*
 * @copyright   Leyun internet Technology(Shanghai)Co.,Ltd
 * @license     http://www.dzzoffice.com/licenses/license.txt
 * @package     DzzOffice
 * @link        http://www.dzzoffice.com
 * @author      zyx(zyx@dzz.cc)
 */

if(!defined('IN_DZZ')) {
	exit('Access Denied');
}

class table_market_developer extends dzz_table
{
	public function __construct() {

		$this->_table = 'market_developer';
		$this->_pk    = 'devid';

		parent::__construct();
	}
}

?>
