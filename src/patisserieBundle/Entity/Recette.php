<?php

namespace patisserieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recette
 *
 * @ORM\Table(name="recette", indexes={@ORM\Index(name="id_user", columns={"id_user"})})
 * @ORM\Entity
 */
class Recette
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_recette", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRecette;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_recette", type="string", length=255, nullable=false)
     */
    private $nomRecette;

    /**
     * @var string
     *
     * @ORM\Column(name="info_recette", type="string", length=255, nullable=false)
     */
    private $infoRecette;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_recette", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixRecette;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="blob", nullable=true)
     */
    private $image;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;


}

