<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class GetDataCorrectSQLFileRequest extends Model
{
    /**
     * @var int
     */
    public $orderId;

    /**
     * @var string
     */
    public $orderActionName;
    protected $_name = [
        'orderId'         => 'OrderId',
        'orderActionName' => 'OrderActionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->orderActionName) {
            $res['OrderActionName'] = $this->orderActionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDataCorrectSQLFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['OrderActionName'])) {
            $model->orderActionName = $map['OrderActionName'];
        }

        return $model;
    }
}
