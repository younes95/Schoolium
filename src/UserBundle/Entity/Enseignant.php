<?php

namespace UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table()
 * @ORM\Entity()
 */
class Enseignant extends User
{
    /**
     * @var Classe
     *
     * @ORM\OneToMany(targetEntity="SchoolBundle\Entity\Classe",mappedBy="responsable")
     */
    private $isResponsable;

    /**
     * @var EnsMat
     *
     * @ORM\OneToMany(targetEntity="SchoolBundle\Entity\EnsMat",mappedBy="enseignant")
     */
    private $matsEns;

     /**
     * @var Ecole
     *
     * @ORM\ManyToOne(targetEntity="SchoolBundle\Entity\Ecole", inversedBy="enseignants")
     *
     * @ORM\JoinColumn(nullable=true)
     */
    private $ecole;

    /**
     * @var string $type
     *
     * @ORM\Column(name="typeUser", type="string", length=255, nullable=true)
     */
    private $typeUser="Enseignant";
    
     /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=255)
     */
    private $genre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDeNaissance", type="date")
     */
    private $dateDeNaissance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDEntree", type="date")
     */
    private $dateDEntree;


    /**
     * @var string
     *
     * @ORM\Column(name="lieuDeNaissance", type="string", length=255)
     */
    private $lieuDeNaissance;

    /**
     * @var int
     *
     * @ORM\Column(name="CIN", type="integer")
     */
    private $cIN;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="text")
     */
    private $adresse;

    /**
     * @var int
     *
     * @ORM\Column(name="codePostal", type="integer")
     */
    private $codePostal;

    /**
     * @var int
     *
     * @ORM\Column(name="telephone", type="integer")
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="typeContrat", type="string", length=255)
     */
    private $typeContrat;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text")
     */
    private $commentaire;


    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Enseignant
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Enseignant
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Enseignant
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set genre
     *
     * @param string $genre
     *
     * @return Enseignant
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set typeContrat
     *
     * @param string $typeContrat
     *
     * @return Enseignant
     */
    public function setTypeContrat($typeContrat)
    {
        $this->typeContrat = $typeContrat;

        return $this;
    }

    /**
     * Get typeContrat
     *
     * @return string
     */
    public function getTypeContrat()
    {
        return $this->typeContrat;
    }

    /**
     * Set dateDeNaissance
     *
     * @param \DateTime $dateDeNaissance
     *
     * @return Enseignant
     */
    public function setDateDeNaissance($dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }

    /**
     * Get dateDeNaissance
     *
     * @return \DateTime
     */
    public function getDateDeNaissance()
    {
        return $this->dateDeNaissance;
    }
    /**
     * Set dateDEntree
     *
     * @param \DateTime $dateDEntree
     *
     * @return Enseignant
     */
    public function setDateDEntree($dateDEntree)
    {
        $this->dateDEntree = $dateDEntree;

        return $this;
    }

    /**
     * Get dateDEntree
     *
     * @return \DateTime
     */
    public function getDateDEntree()
    {
        return $this->dateDEntree;
    }

    /**
     * Set lieuDeNaissance
     *
     * @param string $lieuDeNaissance
     *
     * @return Enseignant
     */
    public function setLieuDeNaissance($lieuDeNaissance)
    {
        $this->lieuDeNaissance = $lieuDeNaissance;

        return $this;
    }

    /**
     * Get lieuDeNaissance
     *
     * @return string
     */
    public function getLieuDeNaissance()
    {
        return $this->lieuDeNaissance;
    }

    /**
     * Set cIN
     *
     * @param integer $cIN
     *
     * @return Enseignant
     */
    public function setCIN($cIN)
    {
        $this->cIN = $cIN;

        return $this;
    }

    /**
     * Get cIN
     *
     * @return int
     */
    public function getCIN()
    {
        return $this->cIN;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Enseignant
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set codePostal
     *
     * @param integer $codePostal
     *
     * @return Enseignant
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return int
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     *
     * @return Enseignant
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return int
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Enseignant
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set typeUser
     *
     * @param string $typeUser
     *
     * @return Enseignant
     */
    public function setTypeUser($typeUser)
    {
        $this->typeUser = $typeUser;

        return $this;
    }

    /**
     * Get typeUser
     *
     * @return string
     */
    public function getTypeUser()
    {
        return $this->typeUser;
    }

    /**
     * Set ecole
     *
     * @param \SchoolBundle\Entity\Ecole $ecole
     *
     * @return Enseignant
     */
    public function setEcole(\SchoolBundle\Entity\Ecole $ecole = null)
    {
        $this->ecole = $ecole;

        return $this;
    }

    /**
     * Get ecole
     *
     * @return \SchoolBundle\Entity\Ecole
     */
    public function getEcole()
    {
        return $this->ecole;
    }

    /**
     * Add isResponsable
     *
     * @param \SchoolBundle\Entity\Classe $isResponsable
     *
     * @return Enseignant
     */
    public function addIsResponsable(\SchoolBundle\Entity\Classe $isResponsable)
    {
        $this->isResponsable[] = $isResponsable;

        return $this;
    }

    /**
     * Remove isResponsable
     *
     * @param \SchoolBundle\Entity\Classe $isResponsable
     */
    public function removeIsResponsable(\SchoolBundle\Entity\Classe $isResponsable)
    {
        $this->isResponsable->removeElement($isResponsable);
    }

    /**
     * Get isResponsable
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIsResponsable()
    {
        return $this->isResponsable;
    }

    /**
     * Add class
     *
     * @param \SchoolBundle\Entity\Classe $class
     *
     * @return Enseignant
     */
    public function addClass(\SchoolBundle\Entity\Classe $class)
    {
        $this->classes[] = $class;

        return $this;
    }

    /**
     * Remove class
     *
     * @param \SchoolBundle\Entity\Classe $class
     */
    public function removeClass(\SchoolBundle\Entity\Classe $class)
    {
        $this->classes->removeElement($class);
    }

    /**
     * Get classes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClasses()
    {
        return $this->classes;
    }

    /**
     * Add matsEn
     *
     * @param \SchoolBundle\Entity\EnsMat $matsEn
     *
     * @return Enseignant
     */
    public function addMatsEn(\SchoolBundle\Entity\EnsMat $matsEn)
    {
        $this->matsEns[] = $matsEn;

        return $this;
    }

    /**
     * Remove matsEn
     *
     * @param \SchoolBundle\Entity\EnsMat $matsEn
     */
    public function removeMatsEn(\SchoolBundle\Entity\EnsMat $matsEn)
    {
        $this->matsEns->removeElement($matsEn);
    }

    /**
     * Get matsEns
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMatsEns()
    {
        return $this->matsEns;
    }
}
