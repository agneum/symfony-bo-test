<?php

namespace AdminBundle\Admin;

use AppBundle\Form\Type\PositiveType;
use AppBundle\Form\Type\VichImageCommonType;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ProductAdmin extends AbstractAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('name')
            ->add('price')
            ->add('weight')
            ->add('tags', null, array(), null, array('expanded' => false, 'multiple' => true));
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('imageFile', null, array(
                    'label' => 'Picture',
                    'template' => 'AdminBundle:Admin:list_image_preview.html.twig')
            )
            ->add('name')
            ->add('description')
            ->add('tags')
            ->add('price', null, array('label' => 'Price (Euro)'))
            ->add('weight', null, array('label' => 'Weight (kg)'))
            ->add('createdAt')
            ->add('updatedAt')
            ->add('_action', null, array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ));
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name')
            ->add('description')
            ->add('price', PositiveType::class, array('label' => 'Price (Euro)'))
            ->add('weight', PositiveType::class, array('label' => 'Weight (kg)'))
            ->add('picture', null, array('read_only' => true))
            ->add('imageFile', VichImageCommonType::class, array('label' => false))
            ->add('tags');
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('name')
            ->add('description')
            ->add('price', null, array('label' => 'Price (Euro)'))
            ->add('weight', null, array('label' => 'Weight (kg)'))
            ->add('picture', null, array(
                'label' => 'Picture',
                'template' => 'AdminBundle:Admin:show_image_preview.html.twig'
            ))
            ->add('tags', null, array(
                'label' => 'Category attached'
            ))
            ->add('createdAt')
            ->add('updatedAt');
    }
}
