<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class AddLogicTableRouteConfigRequest extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example #id#%16
     *
     * @var string
     */
    public $routeExpr;

    /**
     * @description The error code returned.
     *
     * @example id-hash-mod16
     *
     * @var string
     */
    public $routeKey;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](https://www.alibabacloud.com/help/en/data-management-service/latest/getuseractivetenant) operation to query the tenant ID.
     *
     * @example 4****
     *
     * @var int
     */
    public $tableId;

    /**
     * @description Adds a routing algorithm to a logical table.
     *
     * @example 4***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'routeExpr' => 'RouteExpr',
        'routeKey'  => 'RouteKey',
        'tableId'   => 'TableId',
        'tid'       => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->routeExpr) {
            $res['RouteExpr'] = $this->routeExpr;
        }
        if (null !== $this->routeKey) {
            $res['RouteKey'] = $this->routeKey;
        }
        if (null !== $this->tableId) {
            $res['TableId'] = $this->tableId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddLogicTableRouteConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RouteExpr'])) {
            $model->routeExpr = $map['RouteExpr'];
        }
        if (isset($map['RouteKey'])) {
            $model->routeKey = $map['RouteKey'];
        }
        if (isset($map['TableId'])) {
            $model->tableId = $map['TableId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
