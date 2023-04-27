<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ExecuteDataCorrectRequest extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example { "startTime" : "2021-07-01 00:00:00", "endTime" : "2021-07-01 01:00:00", "transaction" : false, "backupData" : true }
     *
     * @var mixed[]
     */
    public $actionDetail;

    /**
     * @description The error code.
     *
     * @example 406****
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The parameters that are required to perform the data change.
     *
     * ```
     * @example 3***
     *
     * @var string
     */
    public $tid;
    protected $_name = [
        'actionDetail' => 'ActionDetail',
        'orderId'      => 'OrderId',
        'tid'          => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionDetail) {
            $res['ActionDetail'] = $this->actionDetail;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteDataCorrectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionDetail'])) {
            $model->actionDetail = $map['ActionDetail'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
