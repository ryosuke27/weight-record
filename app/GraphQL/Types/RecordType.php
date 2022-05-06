<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use App\Models\Record;

use GraphQL;
use GraphQL\GraphQL as GraphQLGraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class RecordType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Record',
        'description' => 'A type',
        'model' => Record::class
    ];

    public function types(): array
    {
        return [
            GraphQL::type('Record'),
        ];
    }

    public function fields(): array
    {
        return [
            'user_id' => [
                'type' => Type::listOf(Type::int())
            ],
            'weight' => [
                'type' => Type::listOf(Type::int())
            ],
            'created_at' => [
                'type' => Type::listOf(Type::string())
            ]
        ];
    }
}
