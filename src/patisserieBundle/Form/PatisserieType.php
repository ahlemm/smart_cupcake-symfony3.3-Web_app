<?php

namespace patisserieBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class PatisserieType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomPatisserie')->add('activite')->add('infoPatisserie')->add('longitude')->add('latitude')->add('adressePatisserie')->add('etatPatisserie')->add('photoPatisserie')
            ->add('Ajouter', SubmitType::class)
            ->setMethod('POST');

     //   ->add('photoPatisserie', FileType::class, array('label' => 'PhotoPatisserie (PDF file)'));





    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'patisserieBundle\Entity\Patisserie'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'patisseriebundle_patisserie';
    }


}
