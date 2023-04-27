<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListInstanceUserPermissionsResponseBody\userPermissions\userPermission\permDetails;

use AlibabaCloud\Tea\Model;

class permDetail extends Model
{
    /**
     * @description Queries the permissions of a user on a specific instance.
     *
     * @example 2019-12-12 00:00:00
     *
     * @var string
     */
    public $createDate;

    /**
     * @description The ID of the request.
     *
     * @example 2020-12-12 00:00:00
     *
     * @var string
     */
    public $expireDate;

    /**
     * @example XXX
     *
     * @var string
     */
    public $extraData;

    /**
     * @description The type of the permissions. Valid values:
     *
     *   LOGIN: the logon permissions
     *   PERF: the query permissions on the instance
     *
     * @var string
     */
    public $originFrom;

    /**
     * @description The time when the permissions were granted.
     *
     * @example LOGIN
     *
     * @var string
     */
    public $permType;

    /**
     * @example 773****
     *
     * @var string
     */
    public $userAccessId;
    protected $_name = [
        'createDate'   => 'CreateDate',
        'expireDate'   => 'ExpireDate',
        'extraData'    => 'ExtraData',
        'originFrom'   => 'OriginFrom',
        'permType'     => 'PermType',
        'userAccessId' => 'UserAccessId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }
        if (null !== $this->extraData) {
            $res['ExtraData'] = $this->extraData;
        }
        if (null !== $this->originFrom) {
            $res['OriginFrom'] = $this->originFrom;
        }
        if (null !== $this->permType) {
            $res['PermType'] = $this->permType;
        }
        if (null !== $this->userAccessId) {
            $res['UserAccessId'] = $this->userAccessId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return permDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }
        if (isset($map['ExtraData'])) {
            $model->extraData = $map['ExtraData'];
        }
        if (isset($map['OriginFrom'])) {
            $model->originFrom = $map['OriginFrom'];
        }
        if (isset($map['PermType'])) {
            $model->permType = $map['PermType'];
        }
        if (isset($map['UserAccessId'])) {
            $model->userAccessId = $map['UserAccessId'];
        }

        return $model;
    }
}
