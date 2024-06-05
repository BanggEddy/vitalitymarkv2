<?php

namespace App\Form;

use App\Entity\Promo;
use Doctrine\DBAL\Types\IntegerType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class AjoutPromo extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom',
            ])
            ->add('quantity', IntegerType::class, [
                'label' => 'Quantité',
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
            ])
            ->add('price', MoneyType::class, [
                'label' => 'Prix',
            ])
            ->add('reduction', MoneyType::class, [
                'label' => 'Réduction (%)',
                'currency' => null,
                'constraints' => [
                    new Range([
                        'min' => 1,
                        'max' => 100,
                    ]),
                ],
            ])
            ->add('category', ChoiceType::class, [
                'label' => 'Catégorie',
                'choices' => [
                    'Sélectionner une catégorie' => '',
                    'Produits frais' => 'Produits frais',
                    'Épicerie' => 'Épicerie',
                    'Boulangerie' => 'Boulangerie',
                    'Surgelés' => 'Surgelés',
                    'Boissons' => 'Boissons',
                    'Produits d\'hygiène et de beauté' => 'Produits d\'hygiène et de beauté',
                    'Entretien ménager' => 'Entretien ménager',
                    'Articles pour bébés et enfants' => 'Articles pour bébés et enfants',
                    'Produits de santé' => 'Produits de santé',
                    'Articles pour animaux de compagnie' => 'Articles pour animaux de compagnie',
                ],
                'required' => true,
            ])
            ->add('date_fin', DateType::class, [
                'label' => 'Date de fin',
                'widget' => 'single_text',
            ])
            ->add('date_debut', DateType::class, [
                'label' => 'Date de début',
                'widget' => 'single_text',
            ])
            ->add('image', FileType::class, [
                'label' => 'Images (JPEG, PNG)',
                'mapped' => false,
                'required' => true,
                'multiple' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Promo::class,
        ]);
    }
}
