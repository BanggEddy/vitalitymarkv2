<?php

namespace App\Test\Controller;

use App\Entity\Promo;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PromoControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private EntityRepository $repository;
    private string $path = '/promo/admin/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $this->repository = $this->manager->getRepository(Promo::class);

        foreach ($this->repository->findAll() as $object) {
            $this->manager->remove($object);
        }

        $this->manager->flush();
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Promo index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'promo[reduction]' => 'Testing',
            'promo[date_fin]' => 'Testing',
            'promo[date_debut]' => 'Testing',
            'promo[description]' => 'Testing',
            'promo[idproduct]' => 'Testing',
        ]);

        self::assertResponseRedirects($this->path);

        self::assertSame(1, $this->repository->count([]));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Promo();
        $fixture->setReduction('My Title');
        $fixture->setDate_fin('My Title');
        $fixture->setDate_debut('My Title');
        $fixture->setDescription('My Title');
        $fixture->setIdproduct('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Promo');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Promo();
        $fixture->setReduction('Value');
        $fixture->setDate_fin('Value');
        $fixture->setDate_debut('Value');
        $fixture->setDescription('Value');
        $fixture->setIdproduct('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'promo[reduction]' => 'Something New',
            'promo[date_fin]' => 'Something New',
            'promo[date_debut]' => 'Something New',
            'promo[description]' => 'Something New',
            'promo[idproduct]' => 'Something New',
        ]);

        self::assertResponseRedirects('/promo/admin/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getReduction());
        self::assertSame('Something New', $fixture[0]->getDate_fin());
        self::assertSame('Something New', $fixture[0]->getDate_debut());
        self::assertSame('Something New', $fixture[0]->getDescription());
        self::assertSame('Something New', $fixture[0]->getIdproduct());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();
        $fixture = new Promo();
        $fixture->setReduction('Value');
        $fixture->setDate_fin('Value');
        $fixture->setDate_debut('Value');
        $fixture->setDescription('Value');
        $fixture->setIdproduct('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects('/promo/admin/');
        self::assertSame(0, $this->repository->count([]));
    }
}
