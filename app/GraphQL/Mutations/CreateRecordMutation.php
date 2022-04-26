<?php

declare(strict_types=1);

namespace App\GraphQL\Mutations;

use App\Models\Record;

use Closure;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;
use Rebing\GraphQL\Support\SelectFields;
use Rebing\GraphQL\Support\Facades\GraphQL;

class CreateRecordMutation extends Mutation
{
    protected $attributes = [
        'name' => 'createRecord',
        'description' => 'A mutation'
    ];

    public function type(): Type
    {
        return GraphQL::type('Record');
    }

    public function args(): array
    {
        return [
            'user_id' => [
                'name' => 'user_id', 
                'type' => Type::nonNull(Type::int()),
            ],
            'weight' => [
                'name' => 'weight', 
                'type' => Type::nonNull(Type::int()),
            ]
        ];
    }

    public function resolve($root, array $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        $record = new Record;
        $record->user_id = $args['user_id'];
        $record->weight = $args['weight'];
        $record->save();

        return $record;
    }
}
