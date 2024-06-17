<?php

namespace App\Tests;

use ApiPlatform\Symfony\Bundle\Test\ApiTestCase;

class UserApiTest extends ApiTestCase
{
    public function testGetUser()
    {
        self::bootKernel();
        $client = static::createClient();
        $response = $client->request('GET', '/api/users/1');

        try {
            $this->assertResponseIsSuccessful();
            $this->assertResponseHeaderSame('content-type', 'application/ld+json; charset=utf-8');
            $this->assertJsonContains([
                '@id' => '/api/users/1',
                'id' => 1,
            ]);

            $data = $response->toArray();

            $this->assertArrayHasKey('id', $data);
            $this->assertArrayHasKey('name', $data);
            $this->assertEquals(1, $data['id']);
        } finally {
            restore_exception_handler();
        }
    }
}
