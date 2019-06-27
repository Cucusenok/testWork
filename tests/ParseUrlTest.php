<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

include_once 'test2/index.php';

final class UrlParse extends TestCase
{
    public function testParseWithThird(): void
    {
        $url = "https://www.somehost.com/test/index.html?param1=4&param2=3&param3=2&param4=1&param5=3";
        $resUrl =  paramClearAndSort($url, 3);
        $testUrl = "https://www.somehost.com/?param4=1&param3=2&param1=4&url=/test/index.html";

        $this->assertEquals($resUrl, $testUrl);
    }

}



