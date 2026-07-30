<?php
/**
 * Tests for NFTMesh
 */

use PHPUnit\Framework\TestCase;
use Nftmesh\Nftmesh;

class NftmeshTest extends TestCase {
    private Nftmesh $instance;

    protected function setUp(): void {
        $this->instance = new Nftmesh(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nftmesh::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
