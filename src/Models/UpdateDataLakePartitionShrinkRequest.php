<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class UpdateDataLakePartitionShrinkRequest extends Model
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
     * @description This parameter is required.
     *
     * @var string
     */
    public $partitionInputShrink;

    /**
     * @description This parameter is required.
     *
     * @example table_name
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
        'catalogName'          => 'CatalogName',
        'dataRegion'           => 'DataRegion',
        'dbName'               => 'DbName',
        'partitionInputShrink' => 'PartitionInput',
        'tableName'            => 'TableName',
        'tid'                  => 'Tid',
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
        if (null !== $this->partitionInputShrink) {
            $res['PartitionInput'] = $this->partitionInputShrink;
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
     * @return UpdateDataLakePartitionShrinkRequest
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
        if (isset($map['PartitionInput'])) {
            $model->partitionInputShrink = $map['PartitionInput'];
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
