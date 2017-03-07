<?php

namespace Plank\Metable\DataType;

use Serializable;

/**
 * Handle serialization of Serializable objects.
 *
 * @author Sean Fraser <sean@plankdesign.com>
 */
class SerializableHandler implements HandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function getDataType()
    {
        return 'serializable';
    }

    /**
     * {@inheritdoc}
     */
    public function canHandleValue($value)
    {
        return $value instanceof Serializable;
    }

    /**
     * {@inheritdoc}
     */
    public function serializeValue($value)
    {
        return serialize($value);
    }

    /**
     * {@inheritdoc}
     */
    public function unserializeValue($value)
    {
        return unserialize($value);
    }
}
