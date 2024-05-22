<?php

namespace App\Tests\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SecurityControllerTest extends WebTestCase
{
    public function testUserVuePageSansSeConnecter()
    {
        $client = static::createClient();

        $client->request('GET', '/uservue');
        $this->assertResponseStatusCodeSame(Response::HTTP_FOUND);
        $this->assertResponseRedirects('/login');

        $client->getContainer()->get('test.client')->getKernel()->shutdown();
    }

    public function testVueText()
    {
        $client = static::createClient();

        $client->request('GET', '/');
        $this->assertSelectorTextContains('h1', 'Bienvenue :)');
    }

    public function testUserVuePagePanierUnautorized()
    {
        $client = static::createClient();

        $client->request('GET', '/user/profile');
        $this->assertResponseStatusCodeSame(Response::HTTP_FOUND);
        $this->assertResponseRedirects('/login');

        $client->getContainer()->get('test.client')->getKernel()->shutdown();
    }

    public function testAdminUnautorized()
    {
        $client = static::createClient();

        $client->request('GET', '/adminproducts');
        $this->assertResponseStatusCodeSame(Response::HTTP_FOUND);
        $this->assertResponseRedirects('/login');

        $client->getContainer()->get('test.client')->getKernel()->shutdown();
    }

    public function testAffichageConnection()
    {
        $client = static::createClient();

        $client->request('GET', '/login');
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
        $this->assertSelectorTextContains('h3', 'Connectez vous');

        $client->getContainer()->get('test.client')->getKernel()->shutdown();
    }

    #Connection USER
    public function testLoginFormFindUserValide()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/login');
        $this->assertSelectorTextContains('h3', 'Connectez vous');
        $form = $crawler->selectButton('Se connecter')->form([
            'email' => 'david2@gmail.com',
            'password' => 'Roooooooot123@',
        ]);
        $client->submit($form);
        $this->assertResponseRedirects('/uservue');
        $client->followRedirect();
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);

        $client->getContainer()->get('test.client')->getKernel()->shutdown();
    }

    public function testLoginFormAuthPasValide()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/login');
        $this->assertSelectorTextContains('h3', 'Connectez vous');
        $form = $crawler->selectButton('Se connecter')->form([
            'email' => 'tessst',
            'password' => 'tesstt',
        ]);
        $client->submit($form);
        $this->assertResponseRedirects('/login');
        $client->followRedirect();
        $this->assertSelectorNotExists('.alert alert-danger', 'Invalid credentials.');

        $client->getContainer()->get('test.client')->getKernel()->shutdown();
    }

    #Connection Admin
    public function testLoginFormFindAdminValide()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/login');
        $this->assertSelectorTextContains('h3', 'Connectez vous');
        $form = $crawler->selectButton('Se connecter')->form([
            'email' => 'admin@gmail.com',
            'password' => 'Roooooooot123@',
        ]);
        $client->submit($form);
        $this->assertResponseRedirects('/adminproducts');
        $client->followRedirect();
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);

        $client->getContainer()->get('test.client')->getKernel()->shutdown();
    }
}
