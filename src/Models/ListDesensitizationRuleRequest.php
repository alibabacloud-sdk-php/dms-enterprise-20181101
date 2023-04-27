<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListDesensitizationRuleRequest extends Model
{
    /**
     * @description The description of the rule.
     *
     * @example MD5
     *
     * @var string
     */
    public $funcType;

    /**
     * @description The name of the masking rule.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The ID of the masking rule.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the masking rule.
     *
     * @example 1
     *
     * @var int
     */
    public $ruleId;

    /**
     * @description The example.
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The number of the page to return.
     *
     * @example HASH
     *
     * @var string
     */
    public $ruleType;

    /**
     * @description The name of the masking rule.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'funcType'   => 'FuncType',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'ruleId'     => 'RuleId',
        'ruleName'   => 'RuleName',
        'ruleType'   => 'RuleType',
        'tid'        => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->funcType) {
            $res['FuncType'] = $this->funcType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDesensitizationRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FuncType'])) {
            $model->funcType = $map['FuncType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
