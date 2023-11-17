<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PainRepository::class)]
class Pain {

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type:"integer")]
    private $id;

    #[ORM\Column(type:"string")]
    private $nomPain;

    public function getNomPain(): ?string {
        return $this->nomPain;
    }

    public function setNomPain(?string $nomPain): ?string {
        $this->nomPain = $nomPain;
    }
}
?>