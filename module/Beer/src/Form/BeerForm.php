<?php
namespace Beer\Form;

use Laminas\Form\Form;

class BeerForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('beers');
        
        $this->add([
            'name' => 'id',
            'type' => 'number',
            'options' => [
                'label' => 'Id',
            ],
        ]);
        $this->add([
            'name' => 'brewery_id',
            'type' => 'number',
            'options' => [
                'label' => 'Brewery Id',
            ],
        ]);

        $this->add([
            'name' => 'name',
            'type' => 'text',
            'options' => [
                'label' => 'Name',
            ],
        ]);

        $this->add([
            'name' => 'cat_id',
            'type' => 'number',
            'options' => [
                'label' => 'Cat Id',
            ],
        ]);
        $this->add([
            'name' => 'style_id',
            'type' => 'number',
            'options' => [
                'label' => 'Style Id',
            ],
        ]);
        $this->add([
            'name' => 'abv',
            'type' => 'number',
            'options' => [
                'label' => 'Abv',
            ],
        ]);
        $this->add([
            'name' => 'ibu',
            'type' => 'number',
            'options' => [
                'label' => 'Ibu',
            ],
        ]);
        $this->add([
            'name' => 'srm',
            'type' => 'number',
            'options' => [
                'label' => 'Srm',
            ],
        ]);
        $this->add([
            'name' => 'upc',
            'type' => 'number',
            'options' => [
                'label' => 'Upc',
            ],
        ]);
        $this->add([
            'name' => 'filepath',
            'type' => 'text',
            'options' => [
                'label' => 'File Path',
            ],
        ]);
        $this->add([
            'name' => 'descript',
            'type' => 'text',
            'options' => [
                'label' => 'Descript',
            ],
        ]);
        $this->add([
            'name' => 'add_user',
            'type' => 'number',
            'options' => [
                'label' => 'Add User',
            ],
        ]);
        $this->add([
            'name' => 'submit',
            'type' => 'submit',
            'attributes' => [
                'value' => 'Submit',
                'id'    => 'submitbutton',
            ],
        ]);
    }
}
