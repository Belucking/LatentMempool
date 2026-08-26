<?php
/**
 * Tests for LatentMempool
 */

use PHPUnit\Framework\TestCase;
use Latentmempool\Latentmempool;

class LatentmempoolTest extends TestCase {
    private Latentmempool $instance;

    protected function setUp(): void {
        $this->instance = new Latentmempool(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Latentmempool::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
