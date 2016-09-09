<?php

namespace Application\Form;

use Zend\Form\Element;
use Zend\Form\Form;

class Beer extends Form
{
    public function __construct()
    {
        parent::__construct();

        $this->add(array(
            'name' => 'id',
            'attributes' => array(
                'type' => 'hidden',
            ),
        ));

        $this->add([
            'name' => 'name',
            'options' => [
                'label' => 'Beer name',
                'label_attributes' => [
                    'class' => 'col-sm-8',
                ]
            ],
            'attributes' => [
                'type'  => 'Text',
                'class' => 'form-control',
                'placeholder' => 'Name of beer',
            ]
        ]);
        $this->add([
            'name' => 'style',
            'options' => [
                'label' => 'Beer style',
                'label_attributes' => [
                    'class' => 'col-sm-8',
                ]
            ],
            'attributes' => [
                'type'  => 'Text',
                'class' => 'form-control',
                'placeholder' => 'Style of beer',
            ]
        ]);

         $this->add([
            'name' => 'img',
            'options' => [
                'label' => 'Beer image',
                'label_attributes' => [
                    'class' => 'col-sm-8',
                ]
            ],
            'attributes' => [
                'type'  => 'Text',
                'class' => 'form-control',
                'placeholder' => 'Image of beer',
            ]
        ]);

        $this->add([
            'name' => 'send',
            'type'  => 'Submit',
            'attributes' => [
                'value' => 'Submit',
                'class' => 'btn btn-success pull-right',
            ],
        ]);

        $this->setAttribute('action', '/save');
        $this->setAttribute('method', 'post');
    }
}
