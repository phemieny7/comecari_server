<?php

//declare(strict_types=1);

namespace App\GraphQL\Types;

use App\User;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class UserType extends GraphQLType
{
    protected $attributes = [
        'name' => 'User',
        'description' => 'Collection of the users',
        'model'=> User::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Id of a particular user',
            ],

            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The Name of our user',
            ],
            'email' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'User email',
            ],
            'password' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'User Password',
            ],
            'phone' => [
                'type' => Type::int(),
                'description' => 'User Phone',
            ],
            'isVerified' => [
                'type' => Type::boolean(),
                'description' => 'User Verification',
                'selectable' => false
            ],
            'created_at' => [
                'type' => Type::string(),
                'description' => 'Date a was created'
            ],
            'updated_at' => [
                'type' => Type::string(),
                'description' => 'Date a was updated'
            ],
        ];
    }

    protected function resolveCreatedAtField($root, $args)
      {
        return (string) $root->created_at;
      }

    protected function resolveUpdatedAtField($root, $args)
    {
        return (string) $root->updated_at;
    }
}
