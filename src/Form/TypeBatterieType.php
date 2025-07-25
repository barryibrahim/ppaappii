<?php

namespace App\Form;

use App\Entity\TypeBatterie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class TypeBatterieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('reference', TextType::class, ['attr' => ['class'=> 'form-control'], 'label_attr' => ['class'=>
            'fw-bold']])            
            ->add('capacite',NumberType::class,[
                'attr' => ['class' => 'form-control col-md-4'], 
                'label_attr' => ['class' => 'fw-bold'],
                'label' => 'Stock disponible',
            ])
            ->add('pays', TextType::class, ['attr' => ['class'=> 'form-control'], 'label_attr' => ['class'=>
            'fw-bold']])
            ->add('envoyer', SubmitType::class, ['attr' => ['class'=> 'btn bg-primary text-white m-4' ],
'row_attr' => ['class' => 'text-center'],])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => TypeBatterie::class,
        ]);
    }
}
