<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ModifyDesensitizationStrategyRequest extends Model
{
    /**
     * @description The name of the field. You can call the [ListSensitiveColumns](~~188103~~) operation to query the field name.
     *
     * >  You can also call the [ListColumns](~~141870~~) operation to query the field name.
     * @example test_column
     *
     * @var string
     */
    public $columnName;

    /**
     * @description The ID of the database. You can call the [ListDatabases](~~141873~~) operation to query the ID.
     *
     * @example 123
     *
     * @var int
     */
    public $dbId;

    /**
     * @description Specifies whether the database is a logical database. Valid values:
     *
     *   **true:** The database is a physical database.
     *   **false:** The database is a logical database.
     *
     * @example false
     *
     * @var bool
     */
    public $isLogic;

    /**
     * @description Specifies whether to reset the masking rule. Valid values:
     *
     *   **true**: resets the masking rule.
     *   **false**: does not reset the masking rule. This is the default value.
     *
     * @example false
     *
     * @var bool
     */
    public $isReset;

    /**
     * @description The ID of the masking rule.
     *
     * @example 53
     *
     * @var int
     */
    public $ruleId;

    /**
     * @description The name of the database. You can call the [ListSensitiveColumns](~~188103~~) operation to query the database name.
     *
     * >
     *   If the database is a physical database, you can call the [ListDatabases](~~141873~~) or [SearchDatabase](~~141876~~) operation to query the database name.
     *   If the database is a logical database, you can call the [ListLogicDatabases](~~141874~~) or [SearchDatabase](~~141876~~) operation to query the database name.
     *
     * @example test_schema
     *
     * @var string
     */
    public $schemaName;

    /**
     * @description The name of the table. You can call the [ListSensitiveColumns](~~188103~~) operation to query the table name.
     *
     * >  You can also call the [ListTables](~~141878~~) operation to query the table name.
     * @example test_table
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The ID of the tenant.
     *
     * >  To view the ID of the tenant, go to the Data Management (DMS) console and move the pointer over the profile picture in the upper-right corner. For more information, see [View information about the current tenant](~~181330~~).
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'columnName' => 'ColumnName',
        'dbId'       => 'DbId',
        'isLogic'    => 'IsLogic',
        'isReset'    => 'IsReset',
        'ruleId'     => 'RuleId',
        'schemaName' => 'SchemaName',
        'tableName'  => 'TableName',
        'tid'        => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->isLogic) {
            $res['IsLogic'] = $this->isLogic;
        }
        if (null !== $this->isReset) {
            $res['IsReset'] = $this->isReset;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
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
     * @return ModifyDesensitizationStrategyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['IsLogic'])) {
            $model->isLogic = $map['IsLogic'];
        }
        if (isset($map['IsReset'])) {
            $model->isReset = $map['IsReset'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
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
