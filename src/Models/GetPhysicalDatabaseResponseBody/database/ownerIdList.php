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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPhysicalDatabaseResponseBody\database;

use AlibabaCloud\Tea\Model;

class ownerIdList extends Model
{
    /**
     * @var string[]
     */
    public $ownerIds;
    protected $_name = [
        'ownerIds' => 'OwnerIds',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerIds) {
            $res['OwnerIds'] = $this->ownerIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ownerIdList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerIds'])) {
            if (!empty($map['OwnerIds'])) {
                $model->ownerIds = $map['OwnerIds'];
            }
        }

        return $model;
    }
}
