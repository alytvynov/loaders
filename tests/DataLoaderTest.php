<?php

use PHPUnit\Framework\TestCase;

class DataLoaderTest extends TestCase
{
    public function testLoadData()
    {
        require_once 'User.php';
        $user = new User();

        $data = ['name' => 'Anton', 'age' => 19,];
        $user->loadData($data);

        $this->assertEquals('Anton', $user->getName());

        $data = ['name' => 'New name',];
        $user->loadData($data);
        $this->assertEquals('New name', $user->getName());
    }
}
