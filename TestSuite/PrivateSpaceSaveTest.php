<?php
/**
 * PrivateSpaceSaveTest TestCase
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

//@codeCoverageIgnoreStart;
App::uses('NetCommonsSaveTest', 'NetCommons.TestSuite');
//@codeCoverageIgnoreEnd;

/**
 * PrivateSpaceSaveTest TestCase
 *
 * @author Shohei Nakajima <nakajimashouhei@gmail.com>
 * @package NetCommons\PrivateSpace\TestSuite
 * @codeCoverageIgnore
 */
class PrivateSpaceSaveTest extends NetCommonsSaveTest {

/**
 * Fixtures
 *
 * @var array
 */
	private $__fixtures = array();

/**
 * Plugin name
 *
 * @var string
 */
	public $plugin = 'private_space';

/**
 * Fixtures load
 *
 * @param string $name The name parameter on PHPUnit_Framework_TestCase::__construct()
 * @param array  $data The data parameter on PHPUnit_Framework_TestCase::__construct()
 * @param string $dataName The dataName parameter on PHPUnit_Framework_TestCase::__construct()
 * @return void
 */
	public function __construct($name = null, array $data = array(), $dataName = '') {
		if (! isset($this->fixtures)) {
			$this->fixtures = array();
		}
		$this->fixtures = array_merge($this->__fixtures, $this->fixtures);
		parent::__construct($name, $data, $dataName);
	}

}