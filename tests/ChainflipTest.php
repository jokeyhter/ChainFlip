<?php
/**
 * Tests for ChainFlip
 */

use PHPUnit\Framework\TestCase;
use Chainflip\Chainflip;

class ChainflipTest extends TestCase {
    private Chainflip $instance;

    protected function setUp(): void {
        $this->instance = new Chainflip(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chainflip::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
