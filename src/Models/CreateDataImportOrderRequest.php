<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataImportOrderRequest\param;
use AlibabaCloud\Tea\Model;

class CreateDataImportOrderRequest extends Model
{
    /**
     * @description The key of the attachment that provides more instructions for the ticket. You can call the [GetUserUploadFileJob](~~206069~~) operation to obtain the attachment key from the value of the AttachmentKey parameter.
     *
     * @example order_attachment.txt
     *
     * @var string
     */
    public $attachmentKey;

    /**
     * @description The operation that you want to perform. Set the value to CreateDataImportOrder.
     *
     * @example test
     *
     * @var string
     */
    public $comment;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](~~198073~~) or [ListUserTenants](~~198074~~) operation to obtain the tenant ID.
     *
     * @var param
     */
    public $param;

    /**
     * @description Specifies whether the database is a logical database. Valid values:
     *
     *   **true**: The database is a logical database.
     *   **false**: The database is a physical database.
     *
     * >  If you set this parameter to **true**, the database that you specify must be a logical database.
     * @var int[]
     */
    public $relatedUserList;

    /**
     * @description The ID of the ticket.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'attachmentKey'   => 'AttachmentKey',
        'comment'         => 'Comment',
        'param'           => 'Param',
        'relatedUserList' => 'RelatedUserList',
        'tid'             => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachmentKey) {
            $res['AttachmentKey'] = $this->attachmentKey;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->param) {
            $res['Param'] = null !== $this->param ? $this->param->toMap() : null;
        }
        if (null !== $this->relatedUserList) {
            $res['RelatedUserList'] = $this->relatedUserList;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDataImportOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachmentKey'])) {
            $model->attachmentKey = $map['AttachmentKey'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Param'])) {
            $model->param = param::fromMap($map['Param']);
        }
        if (isset($map['RelatedUserList'])) {
            if (!empty($map['RelatedUserList'])) {
                $model->relatedUserList = $map['RelatedUserList'];
            }
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
