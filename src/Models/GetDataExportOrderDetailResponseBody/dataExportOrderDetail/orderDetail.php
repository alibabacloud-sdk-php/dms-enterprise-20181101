<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportOrderDetailResponseBody\dataExportOrderDetail;

use AlibabaCloud\Tea\Model;

class orderDetail extends Model
{
    /**
     * @description The number of rows that were affected by the SQL statement.
     *
     * @example 1
     *
     * @var int
     */
    public $actualAffectRows;

    /**
     * @description The category of the reason for the data export.
     *
     * @example text
     *
     * @var string
     */
    public $classify;

    /**
     * @description The name of the database from which data was exported.
     *
     * @example xxx@xxx:3306
     *
     * @var string
     */
    public $database;

    /**
     * @description The ID of the database from which data was exported.
     *
     * @example 123
     *
     * @var int
     */
    public $dbId;

    /**
     * @description The type of the environment to which the database belongs.
     *
     * @example test
     *
     * @var string
     */
    public $envType;

    /**
     * @description The SQL statement that was executed to export data.
     *
     * @example select 1
     *
     * @var string
     */
    public $exeSQL;

    /**
     * @description Indicates whether the affected rows are skipped.
     *
     * @example false
     *
     * @var bool
     */
    public $ignoreAffectRows;

    /**
     * @description The reason why the affected rows are skipped.
     *
     * @example empty
     *
     * @var string
     */
    public $ignoreAffectRowsReason;

    /**
     * @description Indicates whether the database is a logical database.
     *
     * @example false
     *
     * @var bool
     */
    public $logic;
    protected $_name = [
        'actualAffectRows'       => 'ActualAffectRows',
        'classify'               => 'Classify',
        'database'               => 'Database',
        'dbId'                   => 'DbId',
        'envType'                => 'EnvType',
        'exeSQL'                 => 'ExeSQL',
        'ignoreAffectRows'       => 'IgnoreAffectRows',
        'ignoreAffectRowsReason' => 'IgnoreAffectRowsReason',
        'logic'                  => 'Logic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actualAffectRows) {
            $res['ActualAffectRows'] = $this->actualAffectRows;
        }
        if (null !== $this->classify) {
            $res['Classify'] = $this->classify;
        }
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->exeSQL) {
            $res['ExeSQL'] = $this->exeSQL;
        }
        if (null !== $this->ignoreAffectRows) {
            $res['IgnoreAffectRows'] = $this->ignoreAffectRows;
        }
        if (null !== $this->ignoreAffectRowsReason) {
            $res['IgnoreAffectRowsReason'] = $this->ignoreAffectRowsReason;
        }
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orderDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActualAffectRows'])) {
            $model->actualAffectRows = $map['ActualAffectRows'];
        }
        if (isset($map['Classify'])) {
            $model->classify = $map['Classify'];
        }
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['ExeSQL'])) {
            $model->exeSQL = $map['ExeSQL'];
        }
        if (isset($map['IgnoreAffectRows'])) {
            $model->ignoreAffectRows = $map['IgnoreAffectRows'];
        }
        if (isset($map['IgnoreAffectRowsReason'])) {
            $model->ignoreAffectRowsReason = $map['IgnoreAffectRowsReason'];
        }
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }

        return $model;
    }
}
