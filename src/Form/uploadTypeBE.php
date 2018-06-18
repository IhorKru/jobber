<?php
/**
 * Created by PhpStorm.
 * User: ihorkruchynenko
 * Date: 19/05/2018
 * Time: 14:41
 */
namespace App\Form;

use App\Entity\beupload;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class uploadTypeBE extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('file', FileType::class, [
                'label' => 'Select BE file...',
                'label_attr' => [
                    'class' => 'custom-file-label',
                    'for' => 'validatedCustomFile'
                ],
                'attr' => [
                    'type' => 'file',
                    'class' => 'custom-file-input',
                    'id' => 'validatedCustomFile'
                ]])
            ->add('submit', SubmitType::class, [
                'label' => 'Upload File',
                'attr' => array(
                    'class' => 'btn btn-primary',
                    'style' => 'margin-left: 5%'
                )])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => beupload::class,
        ));
    }
}