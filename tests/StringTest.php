<?php

namespace Krak\String\Tests;

use Krak\String;

class StringTest extends \PHPUnit_Framework_TestCase
{
    public function testNoTruncate()
    {
        $this->assertEquals(
            'abc',
            string\truncate('abc', 3, '.')
        );
    }

    public function testTruncate()
    {
        $this->assertEquals(
            'abc..',
            string\truncate('abcdef', 5, '..')
        );
    }

    public function testMapJoin()
    {
        $vals = ['a', 'b', 'c'];
        $joined = string\map_join($vals, '-', function($val) {
            return $val;
        });

        $this->assertEquals('a-b-c', $joined);
    }
}
