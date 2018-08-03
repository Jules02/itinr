<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="App\Repository\PathRepository")
 */
class Path
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Assert\NotNull()
     * @ORM\Column(type="text")
     */
    private $path;

    /**
     * @Assert\NotNull()
     * @ORM\Column(type="text")
     */
    private $placeId;

    /**
     * @Assert\NotNull()
     * @ORM\Column(type="text")
     */
    private $pathLocation;

    /**
     * @Assert\NotNull(message="Vous êtes obligé de remplir au moins ce champ")
     * @ORM\Column(name="titre", type="string")
     */
    private $titre;

    /**
     * @ORM\Column(name="typeSport", type="string", nullable=true)
     */
    private $typeSport;

    /**
     * @ORM\Column(name="description", type="string", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(name="image", type="string", nullable=true)
     *
     * @Assert\File(mimeTypes={ "image/png", "image/jpeg", "image/jpg" }, mimeTypesMessage="Ce format ( {{type}} ) n'est pas supporté. Merci d'entrer une image au format PNG, JPEG ou JPG", maxSize="5M", maxSizeMessage="Le poids de votre image est trop important ({{ size }} {{ suffix }}). Elle peut avoir un poids de {{ limit }} {{ suffix }} au maximum", disallowEmptyMessage="L'image est vide ??", uploadErrorMessage="Erreur lors du téléchargement de votre image, réessayez")
     */
    private $image;

    /**
     * @ORM\Column(name="autre_filtre", type="json_array", nullable=true)
     */
    private $autre_filtre;

    /**
     * @ORM\Column(name="distance", type="integer", nullable=true)
     */
    private $distance;

    /**
     * @ORM\Column(name="auteur", type="string")
     */
    private $auteur;






    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre): void
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getTypeSport()
    {
        return $this->typeSport;
    }

    /**
     * @param mixed $typeSport
     */
    public function setTypeSport($typeSport): void
    {
        $this->typeSport = $typeSport;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return mixed
     */

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param mixed $path
     */
    public function setPath($path): void
    {
        $this->path = $path;
    }

    /**
     * @return mixed
     */
    public function getPlaceId()
    {
        return $this->placeId;
    }

    /**
     * @param mixed $placeId
     */
    public function setPlaceId($placeId): void
    {
        $this->placeId = $placeId;
    }

    /**
     * @return mixed
     */
    public function getPathLocation()
    {
        return $this->pathLocation;
    }

    /**
     * @param mixed $pathLocation
     */
    public function setPathLocation($pathLocation): void
    {
        $this->pathLocation = $pathLocation;
    }

    /**
     * @return mixed
     */
    public function getAutreFiltre()
    {
        return $this->autre_filtre;
    }

    /**
     * @param mixed $autre_filtre
     */
    public function setAutreFiltre($autre_filtre): void
    {
        $this->autre_filtre = $autre_filtre;
    }

    /**
     * @return mixed
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * @param mixed $distance
     */
    public function setDistance($distance): void
    {
        $this->distance = $distance;
    }

    /**
     * @return mixed
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * @param mixed $auteur
     */
    public function setAuteur($auteur): void
    {
        $this->auteur = $auteur;
    }



}
