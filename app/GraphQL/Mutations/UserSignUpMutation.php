<?php

declare(strict_types=1);

namespace App\GraphQL\Mutations;

use Closure;
use App\User;
use GraphQL;
use GraphQL\Type\Definition\Type;
use GraphQL\Type\Definition\ResolveInfo;
use Rebing\GraphQL\Support\Mutation;


class UserSignUpMutation extends Mutation
{
    protected $attributes = [
        'name' => 'userSignUp',
    ];

    public function type(): Type
    {
      return Type::nonNull(GraphQL::type('User'));
    }

    public function args(): array
    {
        return [
            'name' => [
              'name' => 'name',
              'type' => Type::nonNull(Type::string()),
              'rules' => ['required'],
            ],
            'email' => [
              'name' => 'email',
              'type' => Type::nonNull(Type::string()),
              'rules' => ['required', 'email', 'unique:users'],
            ],
            'password' => [
              'name' => 'password',
              'type' => Type::nonNull(Type::string()),
              'rules' => ['required'],
            ],
        ];
    }

    public function resolve ($root, $args){
        $user = User::create([
            'name' => $args['name'],
            'email' => $args['email'],
            'password' => bcrypt($args['password']),
          ]);

        return $user;
    }

}
