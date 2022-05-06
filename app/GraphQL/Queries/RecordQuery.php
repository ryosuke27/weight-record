<?php

declare(strict_types=1);

namespace App\GraphQL\Queries;

use App\Models\Record;

use Closure;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\Facades\GraphQL;

class RecordQuery extends Query
{
    protected $attributes = [
        'name' => 'records',
        'description' => 'A query'
    ];

    public function type(): Type
    {
        return Type::nonNull(Type::listOf(Type::nonNull(GraphQL::type('Record'))));
    }

    // public function args(): array
    // {
    //     return [
    //         'user_id' => [
    //             'type' => Type::int(),
    //             'rules' => ['required']
    //         ]
    //     ];
    // }

    public function resolve($root, array $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        $array = Record::get()->toArray();
    }
}
