<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class GetDBTaskSQLJobLogRequest extends Model
{
    /**
     * @description The log that records the scheduling details.
     *
     * @example 1276****
     *
     * @var int
     */
    public $jobId;

    /**
     * @description The error code returned.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'jobId' => 'JobId',
        'tid'   => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDBTaskSQLJobLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
