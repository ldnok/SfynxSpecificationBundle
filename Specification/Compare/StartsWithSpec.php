<?php

namespace Sfynx\SpecificationBundle\Specification\Compare;

/**
 * This file is part of the <Trigger> project.
 * true if stripos($b, $a) === false
 *
 * @category   Trigger
 * @package    Specification
 * @subpackage Compare
 * @author     Etienne de Longeaux <etienne.delongeaux@gmail.com>
 */
class StartsWithSpec extends AbstractSpecification
{
    private $specification1;
    private $specification2;

    function __construct(InterfaceSpecification $specification1, InterfaceSpecification $specification2)
    {
        $this->specification1 = $specification1;
        $this->specification2 = $specification2;
    }

    public function isSatisfiedBy($object = null)
    {
        list($a, $b) = $this->setValues($this->specification1, $this->specification2, $object);

        return stripos($b, $a) === false;
    }
}