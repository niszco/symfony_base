<?php
// src/Entity/Burger.php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BurgerRepository::class)]
class Burger
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type:"integer")]
    
    private $id;

    #[ORM\Column(type:"string")]
    private ?Burger $nomBurger;

    #[ORM\ManyToOne(targetEntity:"Pain")]
    private ?Pain $pain;

    
    #[ORM\ManyToOne(targetEntity:"Oignon")]
    private ?Oignon $oignons;

    
    #[ORM\ManyToOne(targetEntity:"Sauce")]
    private ?Sauce $sauces;


    #[ORM\OneToOne(targetEntity:"Image")]
    private ?Image $image;


    #[ORM\OneToOne(targetEntity:"Commentaire")]
    private ?Commentaire $commentaires;


    public function __construct(Commentaire $commentaire)
    {
        $this->commentaires = $commentaire;
    }

    public function getNom(): ?string
    {
        return $this->nomBurger;
    }

    public function getPain(): ?string
    {
        return $this->pain;
    }

    public function setPain(?string $pain): void
    {
        $this->pain = $pain;
    }

    public function getOignons(): ?string
    {
        return $this->oignons;
    }

    public function setOignons(?string $oignons): void
    {
        $this->oignons = $oignons;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): void
    {
        $this->image = $image;
    }

    public function getCommentaires(): ?string
    {
        return $this->commentaires;
    }

    public function setCommentaires(?string $commentaires): void
    {
        $this->commentaires = $commentaires;
    }
}

?>