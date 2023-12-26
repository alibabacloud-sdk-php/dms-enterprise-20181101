<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateStandardGroupResponseBody;

use AlibabaCloud\Tea\Model;

class standardGroup extends Model
{
    /**
     * @description The type of the database engine. For more information about the valid values of this parameter, see [DbType parameter](~~198106~~).
     *
     * @example mysql
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The description of the security rule set.
     *
     * @example test_rule
     *
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @description The control mode. Valid values:
     *
     *   **NONE_CONTROL**: Flexible Management
     *   **STABLE**: Stable Change
     *   **COMMON**: Security Collaboration
     *
     * @example COMMON
     *
     * @var string
     */
    public $groupMode;

    /**
     * @description The name of the security rule set.
     *
     * @example test_group
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The ID of the user who creates the security rule set.
     *
     * @example 51****
     *
     * @var int
     */
    public $lastMenderId;
    protected $_name = [
        'dbType'       => 'DbType',
        'description'  => 'Description',
        'groupId'      => 'GroupId',
        'groupMode'    => 'GroupMode',
        'groupName'    => 'GroupName',
        'lastMenderId' => 'LastMenderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupMode) {
            $res['GroupMode'] = $this->groupMode;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->lastMenderId) {
            $res['LastMenderId'] = $this->lastMenderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return standardGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupMode'])) {
            $model->groupMode = $map['GroupMode'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['LastMenderId'])) {
            $model->lastMenderId = $map['LastMenderId'];
        }

        return $model;
    }
}
