<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class ModifyDataCorrectExecSQLRequest extends Model
{
    /**
     * @var string
     */
    public $execSQL;
    /**
     * @var int
     */
    public $orderId;
    /**
     * @var string
     */
    public $realLoginUserUid;
    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'execSQL'          => 'ExecSQL',
        'orderId'          => 'OrderId',
        'realLoginUserUid' => 'RealLoginUserUid',
        'tid'              => 'Tid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->execSQL) {
            $res['ExecSQL'] = $this->execSQL;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->realLoginUserUid) {
            $res['RealLoginUserUid'] = $this->realLoginUserUid;
        }

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
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
        if (isset($map['ExecSQL'])) {
            $model->execSQL = $map['ExecSQL'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['RealLoginUserUid'])) {
            $model->realLoginUserUid = $map['RealLoginUserUid'];
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
