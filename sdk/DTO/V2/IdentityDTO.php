<?php


namespace Mindbox\DTO\V2;

/**
 * Trait IdentityDTO
 *
 * @package Mindbox\DTO\V2
 */
trait IdentityDTO
{
    /**
     * @param string $name
     *
     * @return string|null
     */
    public function getId($name)
    {
        $ids = $this->getIds();
        return !empty($ids[$name]) ? $ids[$name] : null;
    }

    /**
     * @return mixed
     */
    public function getIds()
    {
        return $this->getField('ids');
    }
}
