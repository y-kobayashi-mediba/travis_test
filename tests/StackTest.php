<?php
/**
 * StackTest.php
 *
 * PHP version 5.5
 *
 * @category Test
 * @package  TravisTest
 * @author   YUki Kobayashi <y-kobayashi@mediba.jp>
 * @license  mediba inc. http://www.mediba.jp
 * @link     none
 */

/**
 * Stackテスト
 *
 * class StackTest
 *
 * @category Test
 * @package  TravisTest
 * @author   YUki Kobayashi <y-kobayashi@mediba.jp>
 * @license  mediba inc. http://www.mediba.jp
 * @link     none
 */
class StackTest extends PHPUnit_Framework_TestCase
{

    /**
     * testPushAndPop
     *
     * @return void
     */
    public function testPushAndPop()
    {
        $stack = array();
        $this->assertEquals(0, count($stack));

        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertEquals(1, count($stack));

        $this->assertEquals('foo', array_pop($stack));
        $this->assertEquals(0, count($stack));
    }
}
?>