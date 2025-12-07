<?php

namespace App\Form;

use App\Entity\Voiture;
use App\Entity\Modele;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VoitureForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(child: 'serie', type: TextType::class)
            ->add(child: 'dateMiseEnMarche', type: DateType::class)
            ->add(
                child: 'modele',
                type: EntityType::class,
                options: [
                    'class' => Modele::class,
                    'choice_label' => 'libelle', // affichera le libellé du modèle dans la liste
                    'placeholder' => 'Sélectionner un modèle',
                ]
            )
            ->add(child: 'prixJour', type: NumberType::class);
    }

    public function getName()
    {
        return 'voiture';
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Voiture::class,
        ]);
    }
}