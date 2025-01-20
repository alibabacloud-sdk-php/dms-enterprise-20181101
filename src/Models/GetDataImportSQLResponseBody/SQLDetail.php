<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataImportSQLResponseBody;

use AlibabaCloud\Dara\Model;

class SQLDetail extends Model
{
    /**
     * @var string
     */
    public $execSql;
    protected $_name = [
        'execSql' => 'ExecSql',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->execSql) {
            $res['ExecSql'] = $this->execSql;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExecSql'])) {
            $model->execSql = $map['ExecSql'];
        }

        return $model;
    }
}
