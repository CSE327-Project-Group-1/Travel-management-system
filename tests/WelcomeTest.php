<?php

class WelcomeTest extends \PHPUnit\Framework\TestCase{

    public function testWelcome(){
        $RegisterController = new RegisterController();

        $RegisterController-> create('get', '/users', ['Users', 'index']);

        $expected = [
            'get' => [
                '/users' => ['Users'. 'index'],
            ],
        ];

        $this->assertEquals($expected, $RegisterController->create());
    }
}