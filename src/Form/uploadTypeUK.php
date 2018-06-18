<?php
/**
 * Created by PhpStorm.
 * User: ihorkruchynenko
 * Date: 19/05/2018
 * Time: 14:41
 */
namespace App\Form;

use App\Entity\upload;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class uploadTypeUK extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('file', FileType::class, [
                'label' => 'Select UK file...',
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
                    'class' => 'btn btn-primary'
                )])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => upload::class,
        ));
    }
}