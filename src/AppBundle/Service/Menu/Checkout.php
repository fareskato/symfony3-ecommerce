<?php
/**
 * Created by PhpStorm.
 * User: fkato
 * Date: 12.09.17
 * Time: 21:42
 */

namespace AppBundle\Service\Menu;


class Checkout
{

    public function getItems()
    {
        return [
            ['path' => 'cart' , 'label' => 'Cart (3)'],
            ['path' => 'checkout' , 'label' => 'Checkout'],
        ];
    }
}