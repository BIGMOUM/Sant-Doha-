<?php
/**
 * Created by PhpStorm.
 * UserController: SKANDER
 * Date: 2/16/2018
 * Time: 9:07 AM
 */

namespace SanteBundle\Form;

use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class rechercheProduitForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

    public function getBlockPrefix()
    {
        return 'esprit_esprit_parc_bundlerecherche_voiture_form';
    }
}

