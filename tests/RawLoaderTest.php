<?php

use PHPUnit\Framework\TestCase;

class RawLoaderTest extends TestCase
{
    public function testToArray()
    {
        require_once 'User.php';
        $user = (new User())->setName('Anton');
        $data = $user->toArray();

        $this->assertEquals('Anton', $user->getName());
        $this->assertIsArray($data);
        $this->assertArrayHasKey('name', $data);
        $this->assertArrayNotHasKey('age', $data);
        $this->assertEquals(['name' => 'Anton'], $data);
    }
}
