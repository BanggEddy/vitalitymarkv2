<?php

// src/Form/CouponType.php
namespace App\Form;

use App\Entity\Coupon;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class CouponAllType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Normale' => 'normal',
                    'Étudiante' => 'etudiante',
                    'Premium' => 'premium',
                ],
                'label' => 'Type de carte',
            ])
            ->add('description', TextType::class)
            ->add('start_date', null, [
                'widget' => 'single_text',
                'label' => 'Date de début',
            ])
            ->add('end_date', null, [
                'widget' => 'single_text',
                'label' => 'Date de fin',
            ])
            ->add('qty', null, [
                'label' => 'Quantité',
            ])
            ->add('reduction', null, [
                'label' => 'Réduction',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Coupon::class,
        ]);
    }
}
