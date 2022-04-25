<?php

use PHPUnit\Framework\TestCase;

final class ControllerTest extends TestCase
{
    public function testIndex()
    {
        $controller = new App\Controllers\Controller();

        $this->assertSame('Hello World', $controller->index());
    }
}
