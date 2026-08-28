<?php
/**
 * Tests for CoreEmber
 */

use PHPUnit\Framework\TestCase;
use Coreember\Coreember;

class CoreemberTest extends TestCase {
    private Coreember $instance;

    protected function setUp(): void {
        $this->instance = new Coreember(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Coreember::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
