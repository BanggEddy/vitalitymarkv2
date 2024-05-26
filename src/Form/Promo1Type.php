<?php

namespace App\Form;

use App\Entity\Products;
use App\Entity\Promo;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;


class Promo1Type extends AbstractType
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('reduction')
            ->add('date_fin', null, [
                'widget' => 'single_text',
            ])
            ->add('date_debut', null, [
                'widget' => 'single_text',
            ])
            ->add('description')
            ->add('idproduct', EntityType::class, [
                'class' => Products::class,
                'choice_label' => 'name',
                'label' => 'Nom du produit que vous voulez mettre en promo',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Promo::class,
        ]);
    }
}
