<?php
/**
 * Created by PhpStorm.
 * User: fkato
 * Date: 15.09.17
 * Time: 15:03
 */

namespace Fares\CatalogBundle\Service\Menu;


use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Routing\Router;

class Onsale
{
    private $em;
    private $router;

    public function __construct(EntityManager $entityManager, Router $router)
    {
        $this->em = $entityManager;
        $this->router = $router;
    }

    /**
     * Get items on sale
     */
    public function getItems()
    {
        $products = [];
        $_products = $this->em->getRepository('FaresCatalogBundle:Product')->findBy(
          ['onsale' => true],
          null,
          5
        );
        foreach ($_products as $_product){
            $products[] = [
              'path' => $this->router->generate('product_show',['id' => $_product->getId()]),
              'name' => $_product->getTitle(),
              'image' => $_product->getImage(),
              'price' => $_product->getPrice(),
              'id' => $_product->getId()
            ];
        }

        return $products;
    }

}