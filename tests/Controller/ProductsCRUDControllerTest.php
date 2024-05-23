<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class ProductsCRUDControllerTest extends WebTestCase
{
    public function testAjoutProduct(): void
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/product/create');
        $this->assertResponseIsSuccessful();

        $form = $crawler->selectButton('Ajouter')->form([
            'product_admin[name]' => 'Nom du produit',
            'product_admin[category]' => 'Produits frais',
            'product_admin[quantity]' => 10,
            'product_admin[description]' => 'Description du produit',
            'product_admin[price]' => 10.99,
        ]);

        $client->submit($form);

        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
    }


    public function testEditProduct(): void
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


        $crawler = $client->request('GET', '/adminformedit/3');

        $form = $crawler->filter('form[name="product_admin"]')->form([
            'product_admin[name]' => 'Produit edit',
            'product_admin[category]' => 'Produits frais',
            'product_admin[quantity]' => 20,
            'product_admin[description]' => 'Nouvelle description du produit',
            'product_admin[price]' => 15.99,
        ]);

        # OU
        // $form = $crawler->selectButton('Enregistrer')->form([
        //     'product_admin[name]' => 'Produit edit',
        //     'product_admin[category]' => 'Produits frais',
        //     'product_admin[quantity]' => 20,
        //     'product_admin[description]' => 'Nouvelle description du produit',
        //     'product_admin[price]' => 15.99,
        // ]);

        $client->submit($form);

        $this->assertResponseRedirects('/admin/products/list');
    }



    #Elle marche, il faut juste que dans le bdd test mettre un produit

    // public function testDeleteProduct(): void
    // {
    //     $client = static::createClient();

    // #S'il demande de se connecter, parce qu'il faut la session admin
    // // $crawler = $client->request('GET', '/login');
    // // $this->assertSelectorTextContains('h3', 'Connectez vous');
    // // $form = $crawler->selectButton('Se connecter')->form([
    // //     'email' => 'admin@gmail.com',
    // //     'password' => 'Roooooooot123@',
    // // ]);
    // // $client->submit($form);
    // // $this->assertResponseRedirects('/adminproducts');
    // // $client->followRedirect();
    // // $this->assertResponseStatusCodeSame(Response::HTTP_OK);

    //     $client->request('GET', '/deleteproduct/2');

    //     $this->assertResponseRedirects('/admindeleteproducts');

    //     $client->followRedirect();
    //     $this->assertResponseIsSuccessful();

    //     $this->assertSelectorNotExists('.product-item[data-product-id="1"]');
    // }

    public function testProductsAreDisplayed(): void
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


        $client->request('GET', '/adminproducts');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());


        $this->assertSelectorExists('.product');
    }
}
