<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class RecordType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Record',
        'description' => 'A type'
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'ID of user',
                'alias' => 'id'
            ],
            'user_id' => [
                'type' => Type::int()
            ],
            'weight' => [
                'type' => Type::int()
            ],
            'created_at' => [
                'type' => Type::string()
            ]
        ];
    }
}
