<?php

namespace patisserieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RecetteIngredient
 *
 * @ORM\Table(name="recette_ingredient", indexes={@ORM\Index(name="id_recette", columns={"id_recette"}), @ORM\Index(name="id_ingredient", columns={"id_ingredient"})})
 * @ORM\Entity
 */
class RecetteIngredient
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_recette_ingredient", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRecetteIngredient;

    /**
     * @var float
     *
     * @ORM\Column(name="quantite", type="float", precision=10, scale=0, nullable=true)
     */
    private $quantite;

    /**
     * @var \Recette
     *
     * @ORM\ManyToOne(targetEntity="Recette")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_recette", referencedColumnName="id_recette")
     * })
     */
    private $idRecette;

    /**
     * @var \Ingredient
     *
     * @ORM\ManyToOne(targetEntity="Ingredient")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ingredient", referencedColumnName="id_ingredient")
     * })
     */
    private $idIngredient;


}

