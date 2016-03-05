<?php

namespace Avi\Bundle\JobBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class CategoryType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('url')
            ->add('content')
            ->add( 'img' , FileType::class, array('label' => 'Image (Upload image)'))
            ->add('imgalt')
            ->add('parent')
            ->add('title')
            ->add('keywords')
            ->add('description')
            ->add('dateCreated')
            ->add('dateModified')
            ->add('status')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Avi\Bundle\JobBundle\Entity\Category'
        ));
    }
}
