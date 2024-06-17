<?php

namespace App\Tests;

use Symfony\Component\Panther\PantherTestCase;

class UserPantherTest extends PantherTestCase
{
    public function testPanthLoginFormFindUserValide()
    {
        $_SERVER['PANTHER_WEB_SERVER_PORT'] = 9081;

        $client = static::createPantherClient();

        $crawler = $client->request('GET', '/login');
        $this->assertSelectorTextContains('h3', 'Connectez vous');

        $form = $crawler->selectButton('Se connecter')->form([
            'email' => 'comptepassupp@gmail.com',
            'password' => 'Roooooooot123@',
        ]);
        $client->submit($form);

        $this->assertSame('http://127.0.0.1:9081/uservue', $client->getCurrentURL());

        $this->assertSame(200, $client->getInternalResponse()->getStatusCode());

        $client->quit();
    }
}
