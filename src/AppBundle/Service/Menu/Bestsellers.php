<?php
/**
 * Created by PhpStorm.
 * User: fkato
 * Date: 12.09.17
 * Time: 21:34
 */

namespace AppBundle\Service\Menu;


class Bestsellers
{
    public function getItems()
    {
        return [
            [
                'path' => 'iphone',
                'name' => 'Iphone',
                'img' => '/img/missing-image.png',
                'price' => '49.99',
                'add_to_cart_url' => '#',
            ],
            [
                'path' => 'lg',
                'name' => 'LG',
                'img' => '/img/missing-image.png',
                'price' => '39.95',
                'add_to_cart_url' => '#',
            ],
            [
                'path' => 'samsung',
                'name' => 'Samsung',
                'img' => '/img/missing-image.png',
                'price' => '55.95',
                'add_to_cart_url' => '#',
            ],
            [
                'path' => 'lumia',
                'name' => 'Lumia',
                'img' => '/img/missing-image.png',
                'price' => '66.23',
                'add_to_cart_url' => '#',
            ],
            [
                'path' => 'edge',
                'name' => 'Edge',
                'img' => '/img/missing-image.png',
                'price' => '24.23',
                'add_to_cart_url' => '#',
            ],
        ];
    }


}