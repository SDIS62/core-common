<?php

namespace SDIS62\Core\Common\Entity;

trait IdentityTrait
{
    /**
     * Identifiant
     *
     * @var mixed
     */
    protected $id;

    /**
     * Get the value of Identifiant
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Identifiant
     *
     * @param mixed id
     *
     * @return self
     */
    public function setId($value)
    {
        $this->id = $value;

        return $this;
    }
}
