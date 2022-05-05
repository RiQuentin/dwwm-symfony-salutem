<?php

namespace App\DataFixtures;

use App\Entity\SocialNetwork;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SocialNetworkFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $linkedin = new SocialNetwork();
        $linkedin->setSnName("LinkedIn");
        $linkedin->setSnURL("https://www.linkedin.com/");
        $linkedin->setSnLogo("fa-linkedin");
        $manager->persist($linkedin);

        $twitter = new SocialNetwork();
        $twitter->setSnName("Twitter");
        $twitter->setSnURL("https://twitter.com/");
        $twitter->setSnLogo("fa-twitter");
        $manager->persist($twitter);

        $facebook = new SocialNetwork();
        $facebook->setSnName("Facebook");
        $facebook->setSnURL("https://fr-fr.facebook.com");
        $facebook->setSnLogo("fa-facebook");
        $manager->persist($facebook);

        $youtube = new SocialNetwork();
        $youtube->setSnName("Youtube");
        $youtube->setSnURL("https://www.youtube.com/");
        $youtube->setSnLogo("fa-youtube");
        $manager->persist($youtube);

        $twitch = new SocialNetwork();
        $twitch->setSnName("Twitch");
        $twitch->setSnURL("https://www.twitch.tv/");
        $twitch->setSnLogo("fa-twitch");
        $manager->persist($twitch);

        $manager->flush();
    }
}
