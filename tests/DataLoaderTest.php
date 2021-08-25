<?php

require_once 'User.php';

use PHPUnit\Framework\TestCase;

class DataLoaderTest extends TestCase
{
    public function testLoadData()
    {
        $user = new User();

        $data = ['name' => 'Anton', 'age' => 19,];
        $user->loadData($data);
        $this->assertEquals('Anton', $user->getName());

        $data = ['name' => 'New name',];
        $user->loadData($data);
        $this->assertEquals('New name', $user->getName());
    }

    public function testGetMethod()
    {
        $user = new User();
        $method = new ReflectionMethod($user, 'getMethod');
        $method->setAccessible(true);

        $result = $method->invokeArgs($user, ['name']);
        $this->assertEquals('setName', $result);
    }


    public function testConvertKeySnakeCaseToCamelCase()
    {
        $user = new User();
        $method = new ReflectionMethod($user, 'convertKeySnakeCaseToCamelCase');
        $method->setAccessible(true);

        $result = $method->invokeArgs($user, ['last_name']);
        $this->assertEquals('lastName', $result);

        $result = $method->invokeArgs($user, ['a_bb_ccc_dddd']);
        $this->assertEquals('aBbCccDddd', $result);
    }

    public function testGetKeysNeedNotLoad()
    {
        $user = new User();
        $method = new ReflectionMethod($user, 'getKeysNeedNotLoad');
        $method->setAccessible(true);

        $result = $method->invokeArgs($user, []);
        $this->assertIsArray($result);
        $this->assertEquals('createdAt', $result[0]);
        $this->assertEquals('updatedAt', $result[1]);
    }
}
