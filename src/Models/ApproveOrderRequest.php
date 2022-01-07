<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ApproveOrderRequest extends Model
{
    /**
     * @var string
     */
    public $approvalType;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var int
     */
    public $tid;

    /**
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
