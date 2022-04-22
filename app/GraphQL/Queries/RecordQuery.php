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
        'name' => 'record',
        'description' => 'A query'
    ];

    public function type(): Type
    {
        return GraphQL::type('Record');
    }

    public function args(): array
    {
        return [
            'user_id' => [
                'type' => Type::int(),
                'rules' => ['required']
            ]
        ];
    }

    public function resolve($root, $args)
    {
        return Record::where('user_id', $args['user_id'])->first();
    }
}
