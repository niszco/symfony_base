<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SauceRepository::class)]
class Sauce {

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type:"integer")]
    private $id;

    #[ORM\Column(type:"string")]
    private $nomSauce;

    #[ORM\Column(type:"string")]
    private $typeSauce;

    public function getNomSauce(): ?string {
        return $this->nomSauce;
    }

    public function setNomSauce(?string $nomSauce): ?string {
        $this->nomSauce = $nomSauce;
    }

    public function getTypeSauce(): ?string {
        return $this->typeSauce;
    }

    public function setTypeSauce(?string $typeSauce): ?string {
        $this->typeSauce = $typeSauce;
    }

}
?>