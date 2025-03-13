<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListProxyAccessesRequest extends Model
{
    /**
     * @description The ID of the secure access proxy.
     *
     * >  You can call the [ListProxies](https://www.alibabacloud.com/help/en/data-management-service/latest/listproxies) operation to query the ID of the secure access proxy.
     *
     * This parameter is required.
     *
     * @example 47
     *
     * @var int
     */
    public $proxyId;

    /**
     * @description The ID of the tenant.
     *
     * >  You can call the [GetUserActiveTenant](https://www.alibabacloud.com/help/en/data-management-service/latest/getuseractivetenant) operation to query the ID of the tenant.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'proxyId' => 'ProxyId',
        'tid' => 'Tid',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->proxyId) {
            $res['ProxyId'] = $this->proxyId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProxyAccessesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProxyId'])) {
            $model->proxyId = $map['ProxyId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
