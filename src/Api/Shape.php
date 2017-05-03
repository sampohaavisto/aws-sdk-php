<?php
namespace Aws3\Api;

/**
 * Base class representing a modeled shape.
 */
class Shape extends AbstractModel
{
    /**
     * Get a concrete shape for the given definition.
     *
     * @param array    $definition
     * @param ShapeMap $shapeMap
     *
     * @return mixed
     * @throws \RuntimeException if the type is invalid
     */
    public static function create(array $definition, ShapeMap $shapeMap)
    {
        static $map = [
            'structure' => 'Aws3\Api\StructureShape',
            'map'       => 'Aws3\Api\MapShape',
            'list'      => 'Aws3\Api\ListShape',
            'timestamp' => 'Aws3\Api\TimestampShape',
            'integer'   => 'Aws3\Api\Shape',
            'double'    => 'Aws3\Api\Shape',
            'float'     => 'Aws3\Api\Shape',
            'long'      => 'Aws3\Api\Shape',
            'string'    => 'Aws3\Api\Shape',
            'byte'      => 'Aws3\Api\Shape',
            'character' => 'Aws3\Api\Shape',
            'blob'      => 'Aws3\Api\Shape',
            'boolean'   => 'Aws3\Api\Shape'
        ];

        if (isset($definition['shape'])) {
            return $shapeMap->resolve($definition);
        }

        if (!isset($map[$definition['type']])) {
            throw new \RuntimeException('Invalid type: '
                . print_r($definition, true));
        }

        $type = $map[$definition['type']];

        return new $type($definition, $shapeMap);
    }

    /**
     * Get the type of the shape
     *
     * @return string
     */
    public function getType()
    {
        return $this->definition['type'];
    }

    /**
     * Get the name of the shape
     *
     * @return string
     */
    public function getName()
    {
        return $this->definition['name'];
    }
}
