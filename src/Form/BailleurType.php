<?php

namespace App\Form;

use App\Entity\Bailleurs;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BailleurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('secteurIntervation')
            ->add('typeFinancement')
            ->add('partFinancer')
            ->add('maturite')
            ->add('periodeGrace')
            ->add('tauxInteret')
            ->add('differencielInteret')
            ->add('fraisGestion')
            ->add('commissionEngagement')
            ->add('commissionService')
            ->add('commissionInitiale')
            ->add('commissionArragement')
            ->add('fraisExposition')
            ->add('commissionAgent')
            ->add('maturiteLettreCredit')
            ->add('fraisLiesMepLettreCredit')
            ->add('fraisRefLettreCredit')
            ->add('fraisRebours')
            ->add('primeAssuranceFraisGarantie')
            ->add('primeAttenuationRisqueCredit');
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Bailleurs::class,
        ]);
    }
}