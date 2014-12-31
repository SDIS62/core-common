<?php

namespace SDIS62\Core\Common\Entity;

use SDIS62\Core\User as Core;
use PHPUnit_Framework_TestCase;

class IdentityTraitTest extends PHPUnit_Framework_TestCase
{
    protected static $object;

    public function setUp()
    {
        self::$object = $this->getObjectForTrait('SDIS62\Core\Common\Entity\IdentityTrait');
    }

    public function test_if_it_have_an_mixed_id()
    {
        self::$object->setId(10);

        $this->assertEquals(10, self::$object->getId());

        self::$object->setId('string');

        $this->assertEquals('string', self::$object->getId());

        self::$object->setId(array(10, 10));

        $this->assertEquals(array(10, 10), self::$object->getId());
    }
}
