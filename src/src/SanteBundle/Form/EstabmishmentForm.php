<?php

namespace SanteBundle\Form;

use blackknight467\StarRatingBundle\Form\RatingType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class EstabmishmentForm extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')
            ->add('adress')
            ->add('icon', ChoiceType::class, array(
                'choices' => array(
                    'Health' => 'Health',
                    'Relaxation' => 'Relaxation',
                    'Sport' => 'Sport',
                )))
            ->add('telephone')
            ->add('web', HiddenType::class)
            ->add('latitude')
            ->add('longitude')
            ->add('rating', RatingType::class, [
                'label' => 'Rating'
            ])
            ->add('file')
            ->add('save',SubmitType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SanteBundle\Entity\Estabmishment'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'santebundle_estabmishment';
    }


}
