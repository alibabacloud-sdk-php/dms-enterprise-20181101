<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ApproveOrderRequest extends Model
{
    /**
     * @description The action that you want to perform on the ticket. Valid values:
     *
     *   AGREE: approve
     *   CANCEL: cancel
     *   REJECT: reject
     *
     * @example agree
     *
     * @var string
     */
    public $approvalType;

    /**
     * @description The description of the ticket.
     *
     * @example test
     *
     * @var string
     */
    public $comment;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](~~198073~~) operation to obtain the tenant ID.
     *
     * @example -1
     *
     * @var int
     */
    public $tid;

    /**
     * @description The ID of the approval process. You can call the [GetOrderBaseInfo](~~144642~~) operation to obtain the ID of the approval process.
     *
     * @example 1234
     *
     * @var int
     */
    public $workflowInstanceId;
    protected $_name = [
        'approvalType'       => 'ApprovalType',
        'comment'            => 'Comment',
        'tid'                => 'Tid',
        'workflowInstanceId' => 'WorkflowInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->approvalType) {
            $res['ApprovalType'] = $this->approvalType;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->workflowInstanceId) {
            $res['WorkflowInstanceId'] = $this->workflowInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApproveOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApprovalType'])) {
            $model->approvalType = $map['ApprovalType'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['WorkflowInstanceId'])) {
            $model->workflowInstanceId = $map['WorkflowInstanceId'];
        }

        return $model;
    }
}
