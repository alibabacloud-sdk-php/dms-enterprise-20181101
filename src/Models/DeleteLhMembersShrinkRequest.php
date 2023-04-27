<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class DeleteLhMembersShrinkRequest extends Model
{
    /**
     * @description The operation that you want to perform. Set the value to **DeleteLhMembers**.
     *
     * @var string
     */
    public $memberIdsShrink;

    /**
     * @description The ID of the request.
     *
     * @example 9***
     *
     * @var int
     */
    public $objectId;

    /**
     * @description The error code returned if the request fails.
     *
     * @example 1
     *
     * @var int
     */
    public $objectType;

    /**
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'memberIdsShrink' => 'MemberIds',
        'objectId'        => 'ObjectId',
        'objectType'      => 'ObjectType',
        'tid'             => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->memberIdsShrink) {
            $res['MemberIds'] = $this->memberIdsShrink;
        }
        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLhMembersShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MemberIds'])) {
            $model->memberIdsShrink = $map['MemberIds'];
        }
        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
