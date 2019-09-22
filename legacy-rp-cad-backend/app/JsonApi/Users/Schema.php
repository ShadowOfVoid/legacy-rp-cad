<?php

namespace App\JsonApi\Users;

use App\User;
use Illuminate\Http\Resources\Json\Resource;
use Neomerx\JsonApi\Schema\SchemaProvider;

class Schema extends SchemaProvider
{

    /**
     * @var string
     */
    protected $resourceType = 'users';

    /**
     * @param $resource Resource The domain record being serialized.
     * @return string
     */
    public function getId($resource) : string
    {
        return (string) $resource->getRouteKey();
    }

    /**
     * @param $resource User The domain record being serialized.
     * @return array
     */
    public function getAttributes($resource) : array
    {
        return [
            'account-id' => $resource->account_id,
            'identifier' => $resource->identifier,
            'name'       => $resource->name,
            'avatar'     => $resource->avatar,
        ];
    }
}
