<?php

namespace App\Form;

use App\Entity\Coupon;
use App\Entity\LoyaltyCard;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use App\Entity\User;

class CouponType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Réduction en pourcentage' => 'percentage',
                    'Réduction en valeur fixe' => 'fixed_value',
                    'Livraison gratuite' => 'free_shipping',
                    'Achat un, obtenez-en un gratuit (BOGO)' => 'bogo',
                ],
                'label' => 'Type de coupon',
                'required' => true,
            ])
            ->add('description')
            ->add('start_date', null, [
                'widget' => 'single_text',
                'label' => 'Date de début',
            ])
            ->add('end_date', null, [
                'widget' => 'single_text',
                'label' => 'Date de fin',
            ])
            ->add('reduction', null, [
                'label' => 'Réduction',
            ])
            ->add('qty', null, [
                'label' => 'Quantité',
            ])
            ->add('idloyaltycard', EntityType::class, [
                'class' => LoyaltyCard::class,
                'choice_label' => function ($loyaltyCard) {
                    return $loyaltyCard->getIduser()->getName();
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
