<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Truncater;

class TruncaterTest extends TestCase
{
    public function testTruncate(): void
    {
        $title = 'Шоков Даниил Романович';

        $truncater1 = new Truncater();

        $this->assertSame($title, $truncater1->truncate($title));

        $expected = "Шоков Даниил...";
        $this->assertSame($expected, $truncater1->truncate($title, ['length' => 12]));

        $this->assertSame($title, $truncater1->truncate($title));

        $expected = "Шоков Даниил***";
        $this->assertSame($expected, $truncater1->truncate($title, ['length' => 12, 'separator' => '***']));

        $expected = "Шоков Даниил...";
        $this->assertSame($expected, $truncater1->truncate($title, ['length' => -10]));

        $truncater2 = new Truncater(['length' => 12, 'separator' => '!!!']);

        $expected = "Шоков Даниил!!!";
        $this->assertSame($expected, $truncater2->truncate($title));
    }
}
