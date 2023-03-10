<?php

namespace App\Form;

use App\Entity\Ingredient;
use App\Entity\Recipe;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType as TypeTextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class IngredientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TypeTextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Nom',
                'label_attr' => [
                    'class' => 'form-label'
                ],
                'constraints' => [
                    new NotBlank()
                ]
            ])
            ->add('type', TypeTextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Type',
                'label_attr' => [
                    'class' => 'form-label'
                ],
                'constraints' => [
                    new NotBlank()
                ]
            ])
            ->add('quantity', IntegerType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Quantité',
                'label_attr' => [
                    'class' => 'form-label'
                ],
                'constraints' => [
                    new NotBlank()
                ]
            ])
            ->add('submit', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-success mt-4'
                ],
                'label' => 'Ajouter un ingrédient'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Ingredient::class,
        ]);
    }
}
