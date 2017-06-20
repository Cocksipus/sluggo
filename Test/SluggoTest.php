<?php
use slugging\Sluggo;

class SluggoTest extends PHPUnit_Framework_TestCase {

    private $_pattern = '/[a-zA-Z0-9]+(?:[-_][a-zA-Z0-9]+)*/i';

    public function testWithDefaultGlue () {
        $this->assertRegExp($this->_pattern, Sluggo::toSlug('hello world'));
    }

    public function testWithSpecialCharacter(){
        $this->assertRegExp($this->_pattern, Sluggo::toSlug('@ hello [ ] world % &'));
    }

    public function testWithDefinedGlue () {
        $this->assertRegExp($this->_pattern, Sluggo::toSlug('Hello world', '_'));
    }

    public function testWithSpecialCharacterAndDefinedGlue(){
        $this->assertRegExp($this->_pattern, Sluggo::toSlug('---- @ hello [ ] world % &----', '_'));
    }
}