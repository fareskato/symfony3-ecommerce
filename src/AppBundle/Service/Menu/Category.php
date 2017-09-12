<?php
/**
 * Created by PhpStorm.
 * User: fkato
 * Date: 12.09.17
 * Time: 21:40
 */

namespace AppBundle\Service\Menu;


class Category
{

    public function getItems()
    {
        return [
            ['path' => 'women', 'label' => 'Women'],
            ['path' => 'men', 'label' => 'Men'],
            ['path' => 'sport', 'label' => 'Sport'],
        ];
    }
}