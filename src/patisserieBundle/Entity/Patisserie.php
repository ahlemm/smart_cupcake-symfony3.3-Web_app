<?php

namespace patisserieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Patisserie
 *
 * @ORM\Table(name="patisserie", indexes={@ORM\Index(name="id_user", columns={"id_user"})})
 * @ORM\Entity(repositoryClass="patisserieBundle\Repository\patisserieRepository")
 */
class Patisserie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_patisserie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPatisserie;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_patisserie", type="string", length=255, nullable=false)
     */
    private $nomPatisserie;

    /**
     * @var string
     *
     * @ORM\Column(name="activite", type="string", length=255, nullable=false)
     */
    private $activite;

    /**
     * @var string
     *
     * @ORM\Column(name="info_patisserie", type="string", length=255, nullable=false)
     */
    private $infoPatisserie;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float", precision=10, scale=0, nullable=false)
     */
    private $longitude;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float", precision=10, scale=0, nullable=false)
     */
    public $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_patisserie", type="string", length=255, nullable=false)
     */
    private $adressePatisserie;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat_patisserie", type="integer", nullable=false)
     */
    private $etatPatisserie = '1';






    private $photoPatisserie;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;



    /**
     * Set nomPatisserie
     *
     * @param string $nomPatisserie
     *
     * @return Patisserie
     */
    public function setNomPatisserie($nomPatisserie)
    {
        $this->nomPatisserie = $nomPatisserie;

        return $this;
    }

    /**
     * Get nomPatisserie
     *
     * @return string
     */
    public function getNomPatisserie()
    {
        return $this->nomPatisserie;
    }

    /**
     * Set activite
     *
     * @param string $activite
     *
     * @return Patisserie
     */
    public function setActivite($activite)
    {
        $this->activite = $activite;

        return $this;
    }

    /**
     * Get activite
     *
     * @return string
     */
    public function getActivite()
    {
        return $this->activite;
    }

    /**
     * Set infoPatisserie
     *
     * @param string $infoPatisserie
     *
     * @return Patisserie
     */
    public function setInfoPatisserie($infoPatisserie)
    {
        $this->infoPatisserie = $infoPatisserie;

        return $this;
    }

    /**
     * Get infoPatisserie
     *
     * @return string
     */
    public function getInfoPatisserie()
    {
        return $this->infoPatisserie;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     *
     * @return Patisserie
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     *
     * @return Patisserie
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set adressePatisserie
     *
     * @param string $adressePatisserie
     *
     * @return Patisserie
     */
    public function setAdressePatisserie($adressePatisserie)
    {
        $this->adressePatisserie = $adressePatisserie;

        return $this;
    }

    /**
     * Get adressePatisserie
     *
     * @return string
     */
    public function getAdressePatisserie()
    {
        return $this->adressePatisserie;
    }

    /**
     * Set etatPatisserie
     *
     * @param integer $etatPatisserie
     *
     * @return Patisserie
     */
    public function setEtatPatisserie($etatPatisserie)
    {
        $this->etatPatisserie = $etatPatisserie;

        return $this;
    }

    /**
     * Get etatPatisserie
     *
     * @return integer
     */
    public function getEtatPatisserie()
    {
        return $this->etatPatisserie;
    }

    /**
     * Set photoPatisserie
     *
     * @param string $photoPatisserie
     *
     * @return Patisserie
     */
    public function setPhotoPatisserie($photoPatisserie)
    {
        $this->photoPatisserie = $photoPatisserie;

        return $this;
    }

    /**
     * Get photoPatisserie
     *
     * @return string
     */
    public function getPhotoPatisserie()
    {
        return $this->photoPatisserie;
    }

    /**
     * Get idPatisserie
     *
     * @return integer
     */
    public function getIdPatisserie()
    {
        return $this->idPatisserie;
    }

    /**
     * Set idUser
     *
     * @param \patisserieBundle\Entity\User $idUser
     *
     * @return Patisserie
     */
    public function setIdUser(\patisserieBundle\Entity\User $idUser = null)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \patisserieBundle\Entity\User
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
}
