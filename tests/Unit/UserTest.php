<?php

namespace App\Tests\Unit;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class UserTest extends KernelTestCase
{
    public function getEntity(): User
    {
        return (new User())->setAdresse('adresse')
            ->setName('davidphpunit')
            ->setCivilite('homme')
            ->setDateCreate(new \DateTimeImmutable())
            ->setExpiredAt(new \DateTimeImmutable())
            ->setDeletedAt(null);
    }

    public function testUserIsMDPPasValide(): void
    {
        self::bootKernel();
        $container = static::getContainer();
        $user = $this->getEntity();
        $user->setEmail('usertest@gmail.com')
            ->setPassword('rooooooooooooooooot');

        try {
            $errors = $container->get('validator')->validate($user);
            $this->assertCount(1, $errors);
        } finally {
            restore_exception_handler();
        }
    }

    public function testUserIsValide(): void
    {
        self::bootKernel();
        $container = static::getContainer();
        $user = $this->getEntity();
        $user->setEmail('usertest@gmail.com')
            ->setPassword('Roooooooot123@');

        try {
            $errors = $container->get('validator')->validate($user);
            $this->assertCount(0, $errors);
        } finally {
            restore_exception_handler();
        }
    }

    public function testUserIfPasswordIsMissing(): void
    {
        self::bootKernel();
        $container = static::getContainer();
        $user = $this->getEntity();
        $user->setEmail('usertest@gmail.com');

        try {
            $errors = $container->get('validator')->validate($user);
            $this->assertCount(0, $errors);
        } finally {
            restore_exception_handler();
        }
    }

    public function testGetContact()
    {
        try {
            $user = $this->createMock(User::class);

            $user->method('getContacts')
                ->willReturn(new \Doctrine\Common\Collections\ArrayCollection());

            $contacts = $user->getContacts();

            $this->assertInstanceOf(\Doctrine\Common\Collections\ArrayCollection::class, $contacts);
            $this->assertEmpty($contacts);
        } finally {
            restore_exception_handler();
        }
    }
}
