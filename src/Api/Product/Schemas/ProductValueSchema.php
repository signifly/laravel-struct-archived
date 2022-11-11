<?php

declare(strict_types=1);

namespace Signifly\LaravelStruct\Api\Product\Schemas;

/**
 * Class ProductSchema
 * @package Signifly\LaravelStruct\Api\Product\Schemas
 */
class ProductValueSchema
{
    /**
     * ### Product Value Schema
     * This method creates a schema for the product value.
     *
     * @param  string $name         name of the product
     * @param  array $description   description of the product
     * @param  int $primaryImage    id of the primary image
     * @param  array $extraImage    ids of the extra images
     * @return array
     */
    public static function make(
        string $name,
        array $description,
        string $primaryImage,
        array $extraImage,
    ): array {
        // Return the response
        return [
            'Name' => $name,
            'Description' => $description,
            'PrimaryImage' => $primaryImage,
            'ExtraImage' => $extraImage,
        ];
    }
}
