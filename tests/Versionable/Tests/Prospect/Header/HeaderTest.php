<?php

namespace Versionable\Tests\Prospect\Header;

/**
 * Test class for Header.
 * Generated by PHPUnit on 2011-04-08 at 08:43:04.
 */
class HeaderTest extends \PHPUnit_Framework_TestCase
{

  /**
   * @var Header
   */
  protected $object;

  /**
   * Sets up the fixture, for example, opens a network connection.
   * This method is called before a test is executed.
   */
  protected function setUp()
  {
    $this->object = $this->getMockForAbstractClass('Versionable\Prospect\Header\Header');
  }

  /**
   * Tears down the fixture, for example, closes a network connection.
   * This method is called after a test is executed.
   */
  protected function tearDown()
  {
    
  }

  /**
   * @todo Implement testGetName().
   */
  public function testGetName()
  {
    $this->assertEquals($this->readAttribute($this->object, 'name'), $this->object->getName());
  }

  /**
   * @todo Implement testSetName().
   */
  public function testSetName()
  {
    $name = __CLASS__ . '-Name';
    $this->object->setName($name);
    
    $this->assertEquals($name, $this->readAttribute($this->object, 'name'));
  }

  /**
   * @todo Implement testGetValue().
   */
  public function testGetValue()
  {
    $this->assertEquals($this->readAttribute($this->object, 'value'), $this->object->getValue());
  }

  /**
   * @todo Implement testSetValue().
   */
  public function testSetValue()
  {
    $value = __CLASS__ . '-Value';
    $this->object->setValue($value);
    
    $this->assertEquals($value, $this->readAttribute($this->object, 'value'));
  }

  public function testToString()
  {
    $name = $this->readAttribute($this->object, 'name');
    $value = $this->readAttribute($this->object, 'value');
    
    $string = sprintf('%s: %s', $name, $value);
    
    $this->assertEquals($string, $this->object->toString());
  }

  public function test__toString()
  {
    $name = $this->readAttribute($this->object, 'name');
    $value = $this->readAttribute($this->object, 'value');
    
    $string = sprintf('%s: %s', $name, $value);
    
    $this->assertEquals($string, (string)$this->object);
  }
  
}
