<?php

namespace App\Form;

use App\Entity\Promo;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class AjoutPromo extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('quantity')
            ->add('description')
            ->add('price')
            ->add('reduction', null, [
                'constraints' => [
                    new Range([
                        'min' => 1,
                        'max' => 100,
                        'notInRangeMessage' => 'La réduction doit être entre {{ min }}% et {{ max }}%',
                    ]),
                ],
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
                    'Produits d\'hygiène et de beauté' => 'Produits d\'hygiène et de beauté',
                    'Entretien ménager' => 'Entretien ménager',
                    'Articles pour bébés et enfants' => 'Articles pour bébés et enfants',
                    'Produits de santé' => 'Produits de santé',
                    'Articles pour animaux de compagnie' => 'Articles pour animaux de compagnie',
                ],
                'required' => true,
            ])
            ->add('date_fin', null, [
                'widget' => 'single_text',
            ])
            ->add('date_debut', null, [
                'widget' => 'single_text',
            ])
            ->add('image', FileType::class, [
                'label' => 'Images (JPEG, PNG)',
                'mapped' => false,
                'required' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Promo::class,
        ]);
    }
}
