<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLReviewOriginSQLResponseBody\originSQLList;
use AlibabaCloud\Tea\Model;

class ListSQLReviewOriginSQLResponseBody extends Model
{
    /**
     * @description The MD5 hash value of the SQL statement.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The description of the review status.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The parameters that are used to filter SQL statements involved in the ticket.
     *
     * @var originSQLList[]
     */
    public $originSQLList;

    /**
     * @description The name of the file.
     *
     * @example 0C1CB646-1DE4-4AD0-B4A4-7D47DD52E931
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the SQL statement.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'errorCode'     => 'ErrorCode',
        'errorMessage'  => 'ErrorMessage',
        'originSQLList' => 'OriginSQLList',
        'requestId'     => 'RequestId',
        'success'       => 'Success',
        'totalCount'    => 'TotalCount',
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
        if (null !== $this->originSQLList) {
            $res['OriginSQLList'] = [];
            if (null !== $this->originSQLList && \is_array($this->originSQLList)) {
                $n = 0;
                foreach ($this->originSQLList as $item) {
                    $res['OriginSQLList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSQLReviewOriginSQLResponseBody
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
        if (isset($map['OriginSQLList'])) {
            if (!empty($map['OriginSQLList'])) {
                $model->originSQLList = [];
                $n                    = 0;
                foreach ($map['OriginSQLList'] as $item) {
                    $model->originSQLList[$n++] = null !== $item ? originSQLList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
