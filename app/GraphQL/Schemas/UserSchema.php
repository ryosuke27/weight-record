<?php

namespace App\GraphQL\Schemas;

use Rebing\GraphQL\Support\Contracts\ConfigConvertible;

class UserSchema implements ConfigConvertible
{
    public function toConfig(): array
    {
        return [
            'query' => [
                App\GraphQL\Queries\UserQuery::class,
            ],

            'mutation' => [
                // ExampleMutation::class,
            ],

            'types' => [
                App\GraphQL\Types\UserType::class,
            ],
        ];
    }
}
