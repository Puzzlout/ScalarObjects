<?php

/**
 * 
 * @since Test Suite v1.2.0
 */

namespace Puzzlout\Objects\Tests\Types;

use Puzzlout\Objects\Types\String;

class StringTest extends \PHPUnit_Framework_TestCase {

    /**
     * Initialize the app object.
     */
    protected function setUp() {
        
    }

    /**
     * This method is generated.
     */
    public function testInstanceIsCorrect() {
        $result = new String();
        $this->assertInstanceOf('Puzzlout\Objects\Types\String', $result);
        $result2 = String::Init();
        $this->assertInstanceOf('Puzzlout\Objects\Types\String', $result);
        $result3 = String::InitWith("test");
        $this->assertInstanceOf('Puzzlout\Objects\Types\String', $result);
    }

    //Write the next tests below...
    public function testIsValidMethodGivenNullImplicitReturnsException() {
        try {
            $obj = new String();
            $result = $obj->IsValid();
        } catch (\Exception $ex) {
            $this->assertInstanceOf('\InvalidArgumentException', $ex);
        }
    }

    public function testIsValidMethodGivenNullExplicitReturnsException() {
        try {
            $obj = String::InitWith(null);
            $result = $obj->IsValid();
        } catch (\Exception $ex) {
            $this->assertInstanceOf('\InvalidArgumentException', $ex);
        }
    }

    public function testIsValidMethodGivenArrayReturnsException() {
        try {
            $obj = String::InitWith([]);
            $result = $obj->IsValid();
        } catch (\Exception $ex) {
            $this->assertInstanceOf('\InvalidArgumentException', $ex);
        }
    }

    public function testIsValidMethodGivenIntegerReturnsException() {
        try {
            $obj = String::InitWith(0);
            $result = $obj->IsValid();
        } catch (\Exception $ex) {
            $this->assertInstanceOf('\InvalidArgumentException', $ex);
        }
    }

    public function testIsValidMethodGivenFloatReturnsException() {
        try {
            $obj = String::InitWith(0.0);
            $result = $obj->IsValid();
        } catch (\Exception $ex) {
            $this->assertInstanceOf('\InvalidArgumentException', $ex);
        }
    }

    public function testGetTypeReturnsObject() {
        $result = new String();
        $type = $result->GetType();
        $this->assertEquals("object", $type);
    }

    public function testGetClassReturn() {
        $result = new String();
        $class = $result->GetClass();
        $this->assertEquals("Puzzlout\Objects\Types\Object", $class);
    }

    public function testToStringMethodReturnEmptyValue() {
        $result = new String();
        $value = $result->ToString();
        $this->assertEmpty($value);
    }

    public function testInitMethodWithNoInput() {
        $result = String::Init();
        $value = $result->ToString();
        $this->assertEmpty($value);
    }

    public function testInitMethodWithInput() {
        $result = String::InitWith("test");
        $value = $result->ToString();
        $this->assertNotEmpty($value);
        $this->assertEquals("test", $value);
    }

    public function testGetMethodWithNoInput() {
        $result = String::Init();
        $value = $result->Get();
        $this->assertEmpty($value);
    }

    public function testGetMethodWithInput() {
        $result = String::InitWith("test");
        $value = $result->Get();
        $this->assertNotEmpty($value);
        $this->assertEquals("test", $value);
    }

    public function testSetMethodWithNoInput() {
        $result = String::Init();
        $result->Set("test");
        $value = $result->Get();
        $this->assertNotEmpty($value);
        $this->assertEquals("test", $value);
    }

    public function testSetMethodOverwriteValue() {
        $result = String::InitWith("test");
        $this->assertNotEmpty($result->Get());
        $this->assertEquals("test", $result->Get());
        $result->Set("test2");
        $this->assertNotEquals("", $result->Get());
        $this->assertEquals("test2", $result->Get());
    }

}
