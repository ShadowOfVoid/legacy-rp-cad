<?php

namespace App\JsonApi\Characters;

use App\Character;
use Illuminate\Http\Resources\Json\Resource;
use Neomerx\JsonApi\Schema\SchemaProvider;

class Schema extends SchemaProvider
{

    /**
     * @var string
     */
    protected $resourceType = 'characters';

    /**
     * @param $resource Resource The domain record being serialized.
     * @return string
     */
    public function getId($resource) : string
    {
        return (string) $resource->getRouteKey();
    }

    /**
     * @param $resource Character The domain record being serialized.
     * @return array
     */
    public function getAttributes($resource) : array
    {
        return [
            'identifier' => $resource->identifier,
            'name'       => $resource->name,
            'first-name' => $resource->firstname,
            'last-name'  => $resource->lastname,
            'gender'     => $resource->gender,
            'job'        => $resource->job,
            'height'     => $resource->height,
            'dob'        => $resource->dob,
            'cash'       => $resource->cash,
            'bank'       => $resource->bank,
            'money'      => $resource->money,
            'story'      => $resource->story,
        ];
    }

}
