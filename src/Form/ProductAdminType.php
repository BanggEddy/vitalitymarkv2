<?php

namespace App\Form;

use App\Entity\Products;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ProductAdminType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom du produit',
                'required' => true,
            ])
            ->add('category', ChoiceType::class, [
                'label' => false,
                'choices' => [
                    'Sélectionner une catégorie' => '',
                    'Produits frais' => 'Produits frais',
                    'Épicerie' => 'Épicerie',
                    'Boulangerie' => 'Boulangerie',
                    'Surgelés' => 'Surgelés',
                    'Boissons' => 'Boissons',
                    'Boucherie' => 'Boucherie',
                    'Produits d\'hygiène et de beauté' => 'Produits d\'hygiène et de beauté',
                    'Entretien ménager' => 'Entretien ménager',
                    'Articles pour bébés et enfants' => 'Articles pour bébés et enfants',
                    'Produits de santé' => 'Produits de santé',
                    'Articles pour animaux de compagnie' => 'Articles pour animaux de compagnie',
                ],
                'required' => true,
            ])
            ->add('quantity', null, [
                'label' => 'Quantité',
                'required' => true,
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => true,
            ])
            ->add('images', FileType::class, [
                'label' => 'Images',
                'required' => false,
                'mapped' => false,
            ])
            ->add('price', null, [
                'label' => 'Prix',
                'required' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Products::class,
        ]);
    }
}
