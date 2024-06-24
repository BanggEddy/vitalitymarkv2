<?php

namespace App\Form;

use App\Entity\Coupon;
use App\Entity\LoyaltyCard;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CouponType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Réduction sur un produit' => 'réduction produit',
                    'Livraison gratuite' => 'livraison gratuit',
                    'Achat un, obtenez-en un gratuit (BOGO)' => 'un acheté, un offert',
                ],
                'label' => 'Type de coupon',
                'required' => true,
            ])
            ->add('description')
            ->add('start_date', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de début',
                'required' => true,
            ])
            ->add('end_date', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de fin',
                'required' => true,
            ])
            ->add('reduction', NumberType::class, [
                'label' => 'Réduction (%)',
                'required' => false,
            ])
            ->add('qty', IntegerType::class, [
                'label' => 'Quantité',
                'required' => true,
            ])
            ->add('idloyaltycard', EntityType::class, [
                'class' => LoyaltyCard::class,
                'choice_label' => function (LoyaltyCard $loyaltyCard) {
                    return $loyaltyCard->getIduser() ? $loyaltyCard->getIduser()->getName() : '';
                },
                'label' => "Nom de l'utilisateur :",
                'multiple' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Coupon::class,
        ]);
    }
}
