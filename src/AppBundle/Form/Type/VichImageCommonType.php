<?php


namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class VichImageCommonType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'required' => false,
            'allow_delete' => true,
            'download_link' => false,
            "attr" => array(
                "accept" => "image/*",
            )
        ));
    }

    public function getParent()
    {
        return VichImageType::class;
    }
}