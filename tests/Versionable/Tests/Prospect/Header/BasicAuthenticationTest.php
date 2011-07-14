<?php

namespace Versionable\Tests\Prospect\Header;

use Versionable\Prospect\Header\BasicAuthentication;

/**
 * Test class for BasicAuthentication.
 * Generated by PHPUnit on 2011-04-08 at 08:43:05.
 */
class BasicAuthenticationTest extends HeaderTest
{

  /**
   * @var BasicAuthentication
   */
  protected $object;

  /**
   * Sets up the fixture, for example, opens a network connection.
   * This method is called before a test is executed.
   */
  protected function setUp()
  {
    $this->object = new BasicAuthentication('username', 'password');
  }

  /**
   * Tears down the fixture, for example, closes a network connection.
   * This method is called after a test is executed.
   */
  protected function tearDown()
  {
    
  }

  public function testToString()
  {
    $name = $this->readAttribute($this->object, 'name');
    $value = $this->readAttribute($this->object, 'value');
    
    $string = sprintf('%s: Basic %s', $name, $value);
    
    $this->assertEquals($string, $this->object->toString());
  }

  public function test__toString()
  {
    $name = $this->readAttribute($this->object, 'name');
    $value = $this->readAttribute($this->object, 'value');
    
    $string = sprintf('%s: Basic %s', $name, $value);
    
    $this->assertEquals($string, (string)$this->object);
  }

}