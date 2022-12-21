<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectTaskDetailResponseBody;

use AlibabaCloud\Tea\Model;

class dataCorrectTaskDetail extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $actualAffectRows;

    /**
     * @example 2021-03-05 15:08:55
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1234235
     *
     * @var int
     */
    public $DBTaskGroupId;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $jobStatus;
    protected $_name = [
        'actualAffectRows' => 'ActualAffectRows',
        'createTime'       => 'CreateTime',
        'DBTaskGroupId'    => 'DBTaskGroupId',
        'jobStatus'        => 'jobStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actualAffectRows) {
            $res['ActualAffectRows'] = $this->actualAffectRows;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->DBTaskGroupId) {
            $res['DBTaskGroupId'] = $this->DBTaskGroupId;
        }
        if (null !== $this->jobStatus) {
            $res['jobStatus'] = $this->jobStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataCorrectTaskDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActualAffectRows'])) {
            $model->actualAffectRows = $map['ActualAffectRows'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DBTaskGroupId'])) {
            $model->DBTaskGroupId = $map['DBTaskGroupId'];
        }
        if (isset($map['jobStatus'])) {
            $model->jobStatus = $map['jobStatus'];
        }

        return $model;
    }
}
