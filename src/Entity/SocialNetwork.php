<?php

namespace App\Entity;

use App\Repository\SocialNetworkRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SocialNetworkRepository::class)]
class SocialNetwork
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private string $snName;

    #[ORM\Column(type: 'string', length: 255)]
    private string $snURL;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $snLogo;

    /**
     * @return string
     */
    public function getSnName(): string
    {
        return $this->snName;
    }

    /**
     * @param string $snName
     */
    public function setSnName(string $snName): void
    {
        $this->snName = $snName;
    }

    /**
     * @return string
     */
    public function getSnURL(): string
    {
        return $this->snURL;
    }

    /**
     * @param string $snURL
     */
    public function setSnURL(string $snURL): void
    {
        $this->snURL = $snURL;
    }

    /**
     * @return string|null
     */
    public function getSnLogo(): ?string
    {
        return $this->snLogo;
    }

    /**
     * @param string|null $snLogo
     */
    public function setSnLogo(?string $snLogo): void
    {
        $this->snLogo = $snLogo;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}
