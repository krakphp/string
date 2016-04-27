<?php

use Krak\String;

describe('String', function() {
    describe('#truncate', function() {
        it('truncates a string and appends a value', function() {
            assert('abc.' == string\truncate('abcde', 4, '.'));
        });
        it('will not truncate if value is short enough', function() {
            assert('abcde' == string\truncate('abcde', 5, '.'));
        });
    });
    describe('#map_join', function() {
        it('maps and joins a string', function() {
            $vals = ['a', 'b', 'c'];
            $joined = string\map_join($vals, '-', function($val) {
                return $val;
            });

            assert('a-b-c' === $joined);
        });
    });
    describe('#substr_hide', function() {
        it('hides a substr with a char', function() {
            assert('**34' == string\substr_hide('1234', '*', 0, -2));
        });
    });
});
