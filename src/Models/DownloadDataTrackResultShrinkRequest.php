<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class DownloadDataTrackResultShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $columnFilterShrink;

    /**
     * @var string
     */
    public $eventIdListShrink;

    /**
     * @example 2023-04-23 10:00:00
     *
     * @var string
     */
    public $filterEndTime;

    /**
     * @example 2023-04-23 00:00:00
     *
     * @var string
     */
    public $filterStartTime;

    /**
     * @var string
     */
    public $filterTableListShrink;

    /**
     * @var string
     */
    public $filterTypeListShrink;

    /**
     * @example 406****
     *
     * @var int
     */
    public $orderId;

    /**
     * @example REVERSE
     *
     * @var string
     */
    public $rollbackSQLType;

    /**
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'columnFilterShrink'    => 'ColumnFilter',
        'eventIdListShrink'     => 'EventIdList',
        'filterEndTime'         => 'FilterEndTime',
        'filterStartTime'       => 'FilterStartTime',
        'filterTableListShrink' => 'FilterTableList',
        'filterTypeListShrink'  => 'FilterTypeList',
        'orderId'               => 'OrderId',
        'rollbackSQLType'       => 'RollbackSQLType',
        'tid'                   => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnFilterShrink) {
            $res['ColumnFilter'] = $this->columnFilterShrink;
        }
        if (null !== $this->eventIdListShrink) {
            $res['EventIdList'] = $this->eventIdListShrink;
        }
        if (null !== $this->filterEndTime) {
            $res['FilterEndTime'] = $this->filterEndTime;
        }
        if (null !== $this->filterStartTime) {
            $res['FilterStartTime'] = $this->filterStartTime;
        }
        if (null !== $this->filterTableListShrink) {
            $res['FilterTableList'] = $this->filterTableListShrink;
        }
        if (null !== $this->filterTypeListShrink) {
            $res['FilterTypeList'] = $this->filterTypeListShrink;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->rollbackSQLType) {
            $res['RollbackSQLType'] = $this->rollbackSQLType;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DownloadDataTrackResultShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnFilter'])) {
            $model->columnFilterShrink = $map['ColumnFilter'];
        }
        if (isset($map['EventIdList'])) {
            $model->eventIdListShrink = $map['EventIdList'];
        }
        if (isset($map['FilterEndTime'])) {
            $model->filterEndTime = $map['FilterEndTime'];
        }
        if (isset($map['FilterStartTime'])) {
            $model->filterStartTime = $map['FilterStartTime'];
        }
        if (isset($map['FilterTableList'])) {
            $model->filterTableListShrink = $map['FilterTableList'];
        }
        if (isset($map['FilterTypeList'])) {
            $model->filterTypeListShrink = $map['FilterTypeList'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RollbackSQLType'])) {
            $model->rollbackSQLType = $map['RollbackSQLType'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
