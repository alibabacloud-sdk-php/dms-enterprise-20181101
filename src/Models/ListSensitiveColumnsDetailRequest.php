<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListSensitiveColumnsDetailRequest extends Model
{
    /**
     * @description The name of the field. You can call the [ListSensitiveColumns](~~188103~~) operation to obtain the name of the field.
     *
     * >  You can also call the [ListColumns](~~141870~~) operation to obtain the name of the field.
     * @example ColumnName_test
     *
     * @var string
     */
    public $columnName;

    /**
     * @description The ID of the database. The database can be a physical database or a logical database.
     *
     *   To obtain the ID of a physical database, call the [ListDatabases](~~141873~~) or [SearchDatabase](~~141876~~) operation.
     *   To obtain the ID of a logical database, call the [ListLogicDatabases](~~141874~~) or [SearchDatabase](~~141876~~) operation.
     *
     * @example 1860****
     *
     * @var int
     */
    public $dbId;

    /**
     * @description Specifies whether the database is a logical database. Valid values:
     *
     *   **true**: The database is a logical database.
     *   **false**: The database is a physical database.
     *
     * @example false
     *
     * @var bool
     */
    public $logic;

    /**
     * @description The name of the database. You can call the [ListSensitiveColumns](~~188103~~) operation to obtain the name of the database.
     *
     * > * You can also call the [ListDatabases](~~141873~~) or [SearchDatabase](~~141876~~) operation to obtain the name of a physical database.
     * > * You can also call the [ListLogicDatabases](~~141874~~) or [SearchDatabase](~~141876~~) operation to obtain the name of a logical database.
     * @example SchemaName_test
     *
     * @var string
     */
    public $schemaName;

    /**
     * @description The name of the table. You can call the [ListSensitiveColumns](~~188103~~) operation to obtain the name of the table.
     *
     * >  You can also call the [ListTables](~~141878~~) operation to obtain the name of the table.
     * @example test
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](~~198073~~) or [ListUserTenants](~~198074~~) operation to obtain the tenant ID.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'columnName' => 'ColumnName',
        'dbId'       => 'DbId',
        'logic'      => 'Logic',
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
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
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
     * @return ListSensitiveColumnsDetailRequest
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
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
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
