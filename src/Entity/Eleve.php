<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass="App\Repository\EleveRepository")
 */
class Eleve
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     *  * @Assert\Image(
     *     minWidth = 800,
     *     maxWidth = 800,
     *      minWidthMessage ="La largeur doit etre egale a 800px",
     *      maxWidthMessage ="La largeur doit etre egale a 800px"
     * )
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=255)
     * * @Assert\Length(
     *      min = 2,
     *      minMessage = "Your first name must be at least {{ limit }} characters long"
     * )
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    public function getId()
    {
        return $this->id;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }
}
