<?php

namespace patisserieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="idUser", columns={"idUser"}), @ORM\Index(name="idPatisserie", columns={"idPatisserie"}), @ORM\Index(name="idPatisserie_2", columns={"idPatisserie"}), @ORM\Index(name="idPatisserie_3", columns={"idPatisserie"}), @ORM\Index(name="idProduit", columns={"idProduit"})})
 * @ORM\Entity
 */
class Reclamation
{
    /**
     * @var string
     *
     * @ORM\Column(name="info", type="string", length=255, nullable=false)
     */
    private $info;

    /**
     * @var integer
     *
     * @ORM\Column(name="tel", type="integer", nullable=false)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="idReclamation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreclamation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateReclamation", type="date", nullable=true)
     */
    private $datereclamation;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUser", referencedColumnName="id_user")
     * })
     */
    private $iduser;

    /**
     * @var \Patisserie
     *
     * @ORM\ManyToOne(targetEntity="Patisserie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPatisserie", referencedColumnName="id_patisserie")
     * })
     */
    private $idpatisserie;

    /**
     * @var \Produit
     *
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProduit", referencedColumnName="id_produit")
     * })
     */
    private $idproduit;


}

