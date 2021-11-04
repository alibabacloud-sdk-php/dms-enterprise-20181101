<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncOrderDetailResponseBody\structSyncOrderDetail;
use AlibabaCloud\Tea\Model;

class GetStructSyncOrderDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var structSyncOrderDetail
     */
    public $structSyncOrderDetail;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode'             => 'ErrorCode',
        'errorMessage'          => 'ErrorMessage',
        'requestId'             => 'RequestId',
        'structSyncOrderDetail' => 'StructSyncOrderDetail',
        'success'               => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->structSyncOrderDetail) {
            $res['StructSyncOrderDetail'] = null !== $this->structSyncOrderDetail ? $this->structSyncOrderDetail->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStructSyncOrderDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StructSyncOrderDetail'])) {
            $model->structSyncOrderDetail = structSyncOrderDetail::fromMap($map['StructSyncOrderDetail']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
