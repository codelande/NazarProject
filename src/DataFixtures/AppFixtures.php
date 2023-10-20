<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;
use App\Entity\Book;


class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setUsername('user');
        $user->setPassword('password');
        $manager->persist($user);

        for ($i = 0; $i < 20; $i++) {
            $book = new Book();
            $book->setTitle('book '.$i);
            $book->setAuthor('author '.$i);
            $book->setPublicationDate(new \DateTime());
            $book->setAdditionDate(new \DateTime());
            $book->setModificationDate(new \DateTime());

            $manager->persist($book);
        }

        $manager->flush();
    }
}
