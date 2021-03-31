<?php

require_once '../dbconnection.php';
require_once '../functions.php';

use PHPUnit\Framework\TestCase;

class Functions extends TestCase
{
    public function testSuccessDisplayWine()
    {
        //expected result of the test
        $expected = '<div class="item">';
        $expected .= '<div class="header-wrap"><h1>NAME</h1></div>';
        $expected .= '<img class="bottle" src="blah.com" alt="wine bottle">';
        $expected .= '<div class="stats-wrap">';
        $expected .= '<h2>Origin </h2><p>HELLO</p><br>';
        $expected .= '<h2>Grape </h2><p>GRAPE</p><br>';
        $expected .= '<h2>Style </h2><p>STYLE</p><br>';
        $expected .= '<h2>Farming </h2><p>FARMING</p><br>';
        $expected .= '<h2>ABV </h2><p>11.0%</p><br>';
        $expected .= '</div>';
        $expected .= '</div>';

        //inputs to get the expected result
        $wine =
            ['wine-name' => 'NAME',
                'origin' => 'HELLO',
                'grape' => 'GRAPE',
                'style' => 'STYLE',
                'farming' => 'FARMING',
                'abv' => '11.0',
                'image-url' => 'blah.com'];

        //run the real function and pass in the input
        $case = displayWine($wine);

        //compare the expected result to the actual result
        $this->assertEquals($expected, $case);
    }

    public function testMalformedDisplayWine()
    {
        $wines = 'string';
        $this->expectException(TypeError::class);
        $case = displayWine($wine);
    }

    public function testSuccessValidateWine()
    {
        //expected result of the test
        $expected = true;

        //Inputs to get the expected result
        $wine = ['wine-name' => 'NAME',
            'origin' => 'HELLO',
            'grape' => 'GRAPE',
            'style' => 'STYLE',
            'farming' => 'FARMING',
            'abv' => '11.0',
            'image-url' => 'blah.com'];

        //run the real function and pass in the inputs
        $case = validateWine($wine);

        //compare the expected result to the actual result
        $this->assertEquals($expected, $case);
    }

    public function testFailureValidateWine()
    {
        $expected = false;
        $wine = ['wine-fruit' => 'apple'];
        $case = validateWine($wine);
        $this->assertEquals($expected, $case);
    }

    public function testMalformedValidateWine()
    {
        $wine = 3;
        $this->expectException(TypeError::class);
        $case = validateWine($wine);
    }

    }