<?php

namespace Versionable\Tests\Prospect\File;

use Versionable\Prospect\File\File;

/**
 * Test class for File.
 * Generated by PHPUnit on 2011-04-06 at 10:47:23.
 */
class FileTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var File
     */
    protected $object;
    
    protected $filename;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
      $this->filename = tempnam(sys_get_temp_dir(), 'Prospect');
      file_put_contents($this->filename, "This is a test file");
      $this->object = new File('picture',$this->filename,'text/plain');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
      unlink($this->filename);
    }

    /**
     * @todo Implement testGetName().
     */
    public function testGetName()
    {
      $this->assertEquals($this->readAttribute($this->object, 'name'), $this->object->getName());
    }

    public function testSetName()
    {
      $name = 'profile-image';
      $this->object->setName($name);
      $this->assertEquals($name, $this->readAttribute($this->object, 'name'));

    }

    public function testGetValue()
    {
      $this->assertEquals($this->readAttribute($this->object, 'value'), $this->object->getValue());
    }

    public function testSetValue()
    {
      $value = '/foo/fi.txt';
      $this->object->setValue($value);
      $this->assertEquals($value, $this->readAttribute($this->object, 'value'));
    }

    public function testGetContent()
    {
      $this->assertEquals(file_get_contents($this->filename), $this->object->getContent());
    }

    public function testGetType()
    {
      $this->assertEquals($this->readAttribute($this->object, 'type'), $this->object->getType());
    }

    public function testSetType()
    {
      $type = 'text/html';
      $this->object->setType($type);
      $this->assertEquals($type, $this->readAttribute($this->object, 'type'));
    }
}