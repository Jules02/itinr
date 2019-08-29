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
    private $pathLocation;

    /**
     * @Assert\NotNull(message="Vous êtes obligé de remplir au moins ce champ")
     * @ORM\Column(name="titre", type="string")
     */
    private $titre;

    /**
     * @ORM\Column(name="typeSportMarche", type="boolean", nullable=true)
     */
    private $typeSportMarche;

    /**
     * @ORM\Column(name="typeSportCourse", type="boolean", nullable=true)
     */
    private $typeSportCourse;

    /**
     * @ORM\Column(name="typeSportVelo", type="boolean", nullable=true)
     */
    private $typeSportVelo;

    /**
     * @ORM\Column(name="typeSportVTT", type="boolean", nullable=true)
     */
    private $typeSportVTT;

    /**
     * @ORM\Column(name="typeSportAutre", type="boolean", nullable=true)
     */
    private $typeSportAutre;

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
     * @ORM\Column(name="slug", type="string")
     */
    private $slug;






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
    public function getTypeSportMarche()
    {
        return $this->typeSportMarche;
    }

    /**
     * @param mixed $typeSportMarche
     */
    public function setTypeSportMarche($typeSportMarche): void
    {
        $this->typeSportMarche = $typeSportMarche;
    }

    /**
     * @return mixed
     */
    public function getTypeSportCourse()
    {
        return $this->typeSportCourse;
    }

    /**
     * @param mixed $typeSportCourse
     */
    public function setTypeSportCourse($typeSportCourse): void
    {
        $this->typeSportCourse = $typeSportCourse;
    }

    /**
     * @return mixed
     */
    public function getTypeSportVelo()
    {
        return $this->typeSportVelo;
    }

    /**
     * @param mixed $typeSportVelo
     */
    public function setTypeSportVelo($typeSportVelo): void
    {
        $this->typeSportVelo = $typeSportVelo;
    }

    /**
     * @return mixed
     */
    public function getTypeSportVTT()
    {
        return $this->typeSportVTT;
    }

    /**
     * @param mixed $typeSportVTT
     */
    public function setTypeSportVTT($typeSportVTT): void
    {
        $this->typeSportVTT = $typeSportVTT;
    }

    /**
     * @return mixed
     */
    public function getTypeSportAutre()
    {
        return $this->typeSportAutre;
    }

    /**
     * @param mixed $typeSportAutre
     */
    public function setTypeSportAutre($typeSportAutre): void
    {
        $this->typeSportAutre = $typeSportAutre;
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

    public function getSlug()
    {
        return $this->slug;
    }

    public function setSlug($text)
    {
        $this->slug = $this->slugify($text);
    }

    public function slugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('#[^\\pL\d]+#u', '-', $text);

        // trim
        $text = trim($text, '-');

        // transliterate
        if (function_exists('iconv'))
        {
            $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        }

        // lowercase
        $text = strtolower($text);

        // remove unwanted characters
        $text = preg_replace('#[^-\w]+#', '', $text);

        if (empty($text))
        {
            return 'n-a';
        }

        return $text;
    }

}