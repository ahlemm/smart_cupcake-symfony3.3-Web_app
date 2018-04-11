<?php

namespace patisserieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ingredient
 *
 * @ORM\Table(name="ingredient", indexes={@ORM\Index(name="prix_ingredient", columns={"prix_ingredient"}), @ORM\Index(name="id_user", columns={"id_user"}), @ORM\Index(name="id_ingredient", columns={"id_ingredient"})})
 * @ORM\Entity
 */
class Ingredient
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_ingredient", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idIngredient;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_ingredient", type="string", length=255, nullable=false)
     */
    private $nomIngredient;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_ingredient", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixIngredient;

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

