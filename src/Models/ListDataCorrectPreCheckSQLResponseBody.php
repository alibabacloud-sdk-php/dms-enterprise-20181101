<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDataCorrectPreCheckSQLResponseBody\preCheckSQLList;
use AlibabaCloud\Tea\Model;

class ListDataCorrectPreCheckSQLResponseBody extends Model
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
     * @var preCheckSQLList[]
     */
    public $preCheckSQLList;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode'       => 'ErrorCode',
        'errorMessage'    => 'ErrorMessage',
        'preCheckSQLList' => 'PreCheckSQLList',
        'requestId'       => 'RequestId',
        'success'         => 'Success',
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
        if (null !== $this->preCheckSQLList) {
            $res['PreCheckSQLList'] = [];
            if (null !== $this->preCheckSQLList && \is_array($this->preCheckSQLList)) {
                $n = 0;
                foreach ($this->preCheckSQLList as $item) {
                    $res['PreCheckSQLList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataCorrectPreCheckSQLResponseBody
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
        if (isset($map['PreCheckSQLList'])) {
            if (!empty($map['PreCheckSQLList'])) {
                $model->preCheckSQLList = [];
                $n                      = 0;
                foreach ($map['PreCheckSQLList'] as $item) {
                    $model->preCheckSQLList[$n++] = null !== $item ? preCheckSQLList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
