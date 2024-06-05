<?php

namespace App\Form;

use App\Entity\Products;
use App\Entity\Promo;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\PercentType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class PromoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('reduction', PercentType::class, [
                'label' => 'Réduction (%)',
                'constraints' => [
                    new Range([
                        'min' => 1,
                        'max' => 100,
                    ]),
                ],
            ])
            ->add('date_debut', DateType::class, [
                'label' => 'Date de début',
                'widget' => 'single_text',
            ])
            ->add('date_fin', DateType::class, [
                'label' => 'Date de fin',
                'widget' => 'single_text',
            ])
            ->add('quantity', IntegerType::class, [
                'label' => 'Quantité',
            ])
            ->add('idproduct', EntityType::class, [
                'class' => Products::class,
                'choice_label' => 'name',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Promo::class,
        ]);
    }
}
