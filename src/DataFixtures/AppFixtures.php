<?php

namespace App\DataFixtures;

use App\Entity\Link;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $link = new Link();
        $link->setTitre('Google');
        $link->setUrl('https://www.google.com');
        $link->setDescription('Search engine');
        $link->setTags('open source');
        $manager->persist($link);

        $link = new Link();
        $link->setTitre('Facebook');
        $link->setUrl('https://www.facebook.com');
        $link->setDescription('Social network');
        $link->setTags('social media');
        $manager->persist($link);
        
        $manager->flush();
    }
}
