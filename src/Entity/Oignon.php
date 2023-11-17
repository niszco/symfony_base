<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OignonRepository::class)]
class Oignon {

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type:"integer")]
    private $id;

    #[ORM\Column(type:"string")]
    private $nomOignon;

    public function getNomOignon(): ?string {
        return $this->nomOignon;
    }

    public function setNomOignon(?string $nomOignon): ?string {
        $this->nomOignon = $nomOignon;
    }
}
?>