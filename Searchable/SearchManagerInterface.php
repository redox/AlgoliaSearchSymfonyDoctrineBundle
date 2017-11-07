<?php

namespace Algolia\SearchBundle\Searchable;


use Doctrine\Common\Persistence\ObjectManager;

interface SearchManagerInterface
{
    public function isSearchable($className);

    public function search($query, $className, ObjectManager $objectManager, $page = 0, $nbResults = 20, array $parameters = []);

    public function rawSearch($query, $className, $page = 0, $nbResults = 20, array $parameters = []);

    public function count($query, $className, array $parameters = []);
}