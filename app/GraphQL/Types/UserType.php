<?php

declare(strict_types=1);

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class UserType extends GraphQLType
{
    protected $attributes = [
        'name' => 'User',
        'description' => 'Collection of users',
        //'model' => User::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'ID of user',
                'alias' => 'user_id'
            ],
            'email' => [
                'type' => Type::string()
            ],
            'username' => [
                'type' => Type::nonNull(Type::string())
            ],
            'avatar' => [
                'type' => Type::string()
            ],
            'self_introduction' => [
                'type' => Type::string()
            ],
            'created_at' => [
                'type' => Type::nonNull(Type::string())
            ],
            'status' => [
                'type' => Type::nonNull(Type::int())
            ]
        ];
    }
}
