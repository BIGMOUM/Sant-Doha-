<?php

namespace SanteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class produitType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('categorie',ChoiceType::class, array(
                'choices' => array(

                    'Soin corp' => 'Soin corp',
                    'Bio' => 'Bio',
                    'Protéine' => 'Protéine',
                    'Huile et hydrolats' => 'Huile et hydrolats',
                    'vitamins' => 'vitamins',
                )))



            ->add('prix')

            ->add('description',TextareaType::class, array(
                'attr' => array('class' => 'tinymce')))

            ->add('qteStock')
            ->add('file', FileType::class, array(
                    'multiple'    => false,

                    'attr' => array(
                        'accept' => 'image/*',
                        'required'   => false,
                    )
                )
            );

           // ->add('image', FileType::class, array('label' => 'Image(JPG)'));

    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SanteBundle\Entity\produit'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'santebundle_produit';
    }


}
