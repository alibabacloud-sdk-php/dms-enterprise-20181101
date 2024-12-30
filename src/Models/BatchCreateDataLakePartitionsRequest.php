<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class BatchCreateDataLakePartitionsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example hive
     *
     * @var string
     */
    public $catalogName;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $dataRegion;

    /**
     * @description This parameter is required.
     *
     * @example default
     *
     * @var string
     */
    public $dbName;

    /**
     * @example true
     *
     * @var bool
     */
    public $ifNotExists;

    /**
     * @example true
     *
     * @var bool
     */
    public $needResult;

    /**
     * @description This parameter is required.
     *
     * @var DLPartitionInput[]
     */
    public $partitionInputs;

    /**
     * @description This parameter is required.
     *
     * @example test_table
     *
     * @var string
     */
    public $tableName;

    /**
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'catalogName'     => 'CatalogName',
        'dataRegion'      => 'DataRegion',
        'dbName'          => 'DbName',
        'ifNotExists'     => 'IfNotExists',
        'needResult'      => 'NeedResult',
        'partitionInputs' => 'PartitionInputs',
        'tableName'       => 'TableName',
        'tid'             => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->catalogName) {
            $res['CatalogName'] = $this->catalogName;
        }
        if (null !== $this->dataRegion) {
            $res['DataRegion'] = $this->dataRegion;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->ifNotExists) {
            $res['IfNotExists'] = $this->ifNotExists;
        }
        if (null !== $this->needResult) {
            $res['NeedResult'] = $this->needResult;
        }
        if (null !== $this->partitionInputs) {
            $res['PartitionInputs'] = [];
            if (null !== $this->partitionInputs && \is_array($this->partitionInputs)) {
                $n = 0;
                foreach ($this->partitionInputs as $item) {
                    $res['PartitionInputs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchCreateDataLakePartitionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CatalogName'])) {
            $model->catalogName = $map['CatalogName'];
        }
        if (isset($map['DataRegion'])) {
            $model->dataRegion = $map['DataRegion'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['IfNotExists'])) {
            $model->ifNotExists = $map['IfNotExists'];
        }
        if (isset($map['NeedResult'])) {
            $model->needResult = $map['NeedResult'];
        }
        if (isset($map['PartitionInputs'])) {
            if (!empty($map['PartitionInputs'])) {
                $model->partitionInputs = [];
                $n                      = 0;
                foreach ($map['PartitionInputs'] as $item) {
                    $model->partitionInputs[$n++] = null !== $item ? DLPartitionInput::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}