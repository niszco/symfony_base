<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentaireRepository::class)]
class Commentaire {

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type:"integer")]
    private $id;

    #[ORM\Column(type:"string")]
    private $titreCommentaire;

    #[ORM\Column(type:"string")]
    private $commentaire;

    public function getTitreCommentaire(): ?string {
        return $this->titreCommentaire;
    }

    public function setTitreCommentaire(?string $titreCommentaire): ?string {
        $this->titreCommentaire = $titreCommentaire;
    }

    public function getCommentaire(): ?string {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): ?string {
        $this->commentaire = $commentaire;
    }
}
?>