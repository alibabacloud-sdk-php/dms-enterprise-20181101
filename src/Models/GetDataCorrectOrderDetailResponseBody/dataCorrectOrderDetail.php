<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody\dataCorrectOrderDetail\databaseList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody\dataCorrectOrderDetail\orderDetail;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody\dataCorrectOrderDetail\preCheckDetail;
use AlibabaCloud\Tea\Model;

class dataCorrectOrderDetail extends Model
{
    /**
     * @var databaseList
     */
    public $databaseList;

    /**
     * @var string
     */
    public $execMode;

    /**
     * @var orderDetail
     */
    public $orderDetail;

    /**
     * @var preCheckDetail
     */
    public $preCheckDetail;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'databaseList'   => 'DatabaseList',
        'execMode'       => 'ExecMode',
        'orderDetail'    => 'OrderDetail',
        'preCheckDetail' => 'PreCheckDetail',
        'status'         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseList) {
            $res['DatabaseList'] = null !== $this->databaseList ? $this->databaseList->toMap() : null;
        }
        if (null !== $this->execMode) {
            $res['ExecMode'] = $this->execMode;
        }
        if (null !== $this->orderDetail) {
            $res['OrderDetail'] = null !== $this->orderDetail ? $this->orderDetail->toMap() : null;
        }
        if (null !== $this->preCheckDetail) {
            $res['PreCheckDetail'] = null !== $this->preCheckDetail ? $this->preCheckDetail->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataCorrectOrderDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseList'])) {
            $model->databaseList = databaseList::fromMap($map['DatabaseList']);
        }
        if (isset($map['ExecMode'])) {
            $model->execMode = $map['ExecMode'];
        }
        if (isset($map['OrderDetail'])) {
            $model->orderDetail = orderDetail::fromMap($map['OrderDetail']);
        }
        if (isset($map['PreCheckDetail'])) {
            $model->preCheckDetail = preCheckDetail::fromMap($map['PreCheckDetail']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
