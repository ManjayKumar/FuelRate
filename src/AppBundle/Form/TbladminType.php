<?php
namespace AppBundle\Form;

use AppBundle\Entity\Tbladmin;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class TbladminType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)

    {

        $builder
            ->add('username', 'text',
                array(
                    'attr' => array(
                           'placeholder' => 'Email/Phone', 
                        ),
                    'label' => false,
                    ))
            ->add('password', 'text',
                array(
                    'attr' => array(
                           'placeholder' => 'Password', 
                        ),
                    'label' => false,
                    ));

}

public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Tbladmin::class,
        ));
    }

     public function getName()
    {
        return 'tbladmin';
    }
}