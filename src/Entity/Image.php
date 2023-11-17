<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImageRepository::class)]
class Image {

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type:"integer")]
    private $id;

    #[ORM\Column(type:"string")]
    private $nomImage;

    #[ORM\Column(type:"string")]
    private $typeImage;

    public function getNomImage(): ?string {
        return $this->nomImage;
    }

    public function setNomImage(?string $nomImage): ?string {
        $this->nomImage = $nomImage;
    }

    public function getTypeImage(): ?string {
        return $this->typeImage;
    }

    public function setTypeImage(?string $typeImage): ?string {
        $this->typeImage = $typeImage;
    }
}
?>