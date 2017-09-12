<?php
/**
 * Created by PhpStorm.
 * User: fkato
 * Date: 12.09.17
 * Time: 21:44
 */

namespace AppBundle\Service\Menu;


class Customer
{
    public function getItems()
    {
        return [
            ['path' =>'account', 'label' =>'John Doe'],
            ['path' =>'logout', 'label' =>'Logout'],
        ];
    }

}