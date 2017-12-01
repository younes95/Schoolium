<?php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use UserBundle\Repository\EleveRepository;
use SchoolBundle\Repository\ClasseRepository;


class AbsenceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $idClasse= $options['idClasse'];
        
        $builder
        ->add('date', DateType::class,[
            'attr' => ['class' => 'dp-3 form-control'],
            'widget' => 'single_text',
            'html5' => false
            ])
        ->add('type', ChoiceType::class,array(
            'choices' => array(
                'absence.title' => 'absence',
                'retard.title' => 'retard'
                )
            ))
        ->add('eleve', EntityType::class, array(
                'class' => 'UserBundle:Eleve',
                'choice_label' => 'nom',
                'query_builder' => function(EleveRepository $er) use ($idClasse){
                   return $er->findById($idClasse);
                },
                'required' => TRUE,
            ))
        ->add('commentaire',TextareaType::class,array(
            'attr'=> ['class' => 'form-control'],
            'required' => false

            ))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UserBundle\Entity\Absence',
            'idClasse' => ''
        ));

         $resolver->setRequired(['idClasse']);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'UserBundle_absence';
    }

     
}
