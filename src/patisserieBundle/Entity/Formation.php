<?php

namespace patisserieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table(name="formation", indexes={@ORM\Index(name="id_user", columns={"id_user"})})
 * @ORM\Entity
 */
class Formation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_formation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFormation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date", nullable=false)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date", nullable=false)
     */
    private $dateFin;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_participant", type="integer", nullable=false)
     */
    private $nbrParticipant;

    /**
     * @var string
     *
     * @ORM\Column(name="info_formation", type="string", length=255, nullable=false)
     */
    private $infoFormation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin_inscri", type="date", nullable=false)
     */
    private $dateFinInscri;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_h", type="integer", nullable=false)
     */
    private $nbrH;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;


}

