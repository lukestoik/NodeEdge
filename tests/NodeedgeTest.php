<?php
/**
 * Tests for NodeEdge
 */

use PHPUnit\Framework\TestCase;
use Nodeedge\Nodeedge;

class NodeedgeTest extends TestCase {
    private Nodeedge $instance;

    protected function setUp(): void {
        $this->instance = new Nodeedge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nodeedge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
