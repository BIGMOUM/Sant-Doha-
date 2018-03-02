<?php
/**
 * Created by PhpStorm.
 * User: MBM info
 * Date: 28/02/2018
 * Time: 07:28
 */

namespace SanteBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Doctrine\ORM\EntityRepository;
use SanteBundle\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DemandeForm extends  AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder



            ->add('date',DateType::class ,array(
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',

            ))
            ->add('heure',ChoiceType::class,array(
                'choices' => array(
                    '09:00 - 10:00 h' => '09:00 - 10:00 h',
                    '10:00 - 11:00 h' => '10:00 - 11:00 h',
                    '11:00 - 12:00 h' => '11:00 - 12:00 h',
                    '14:00 - 15:00 h' => '14:00 - 15:00 h',
                    '15:00 - 16:00 h' => '15:00 - 16:00 h',
                    '16:00 - 17:00 h' => '16:00 - 17:00 h',

                )))
            ->add('user',EntityType::class,array(
                'class'=>'SanteBundle\Entity\User',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')->where("u.roles=:role")->setParameter('role','a:1:{i:0;s:11:"ROLE_DOCTOR";}')
                        ->orderBy('u.username', 'ASC');
                },
                'choice_label'=>'username',
                'multiple'=>false
            ))
            ->add('Enregistrer', SubmitType::class)
        ;
    }
}
/*
 * ->add('user', EntityType::class, array(
                'class' => User::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')->where("u.roles=:role")->setParameter('role','a:1:{i:0;s:11:"ROLE_DOCTOR";}')
                        ->orderBy('u.username', 'ASC');
                },
                'choice_label' => 'username',
                'multiple'=>true,

            ))
 */