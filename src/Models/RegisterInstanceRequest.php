<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class RegisterInstanceRequest extends Model
{
    /**
     * @var int
     */
    public $tid;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $instanceSource;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var string
     */
    public $ecsInstanceId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $ecsRegion;

    /**
     * @var string
     */
    public $host;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $sid;

    /**
     * @var string
     */
    public $databaseUser;

    /**
     * @var string
     */
    public $databasePassword;

    /**
     * @var string
     */
    public $instanceAlias;

    /**
     * @var int
     */
    public $dbaUid;

    /**
     * @var string
     */
    public $safeRule;

    /**
     * @var int
     */
    public $queryTimeout;

    /**
     * @var int
     */
    public $exportTimeout;

    /**
     * @var string
     */
    public $dataLinkName;

    /**
     * @var int
     */
    public $ddlOnline;

    /**
     * @var int
     */
    public $useDsql;

    /**
     * @var bool
     */
    public $skipTest;
    protected $_name = [
        'tid'              => 'Tid',
        'instanceType'     => 'InstanceType',
        'instanceSource'   => 'InstanceSource',
        'networkType'      => 'NetworkType',
        'envType'          => 'EnvType',
        'ecsInstanceId'    => 'EcsInstanceId',
        'vpcId'            => 'VpcId',
        'ecsRegion'        => 'EcsRegion',
        'host'             => 'Host',
        'port'             => 'Port',
        'sid'              => 'Sid',
        'databaseUser'     => 'DatabaseUser',
        'databasePassword' => 'DatabasePassword',
        'instanceAlias'    => 'InstanceAlias',
        'dbaUid'           => 'DbaUid',
        'safeRule'         => 'SafeRule',
        'queryTimeout'     => 'QueryTimeout',
        'exportTimeout'    => 'ExportTimeout',
        'dataLinkName'     => 'DataLinkName',
        'ddlOnline'        => 'DdlOnline',
        'useDsql'          => 'UseDsql',
        'skipTest'         => 'SkipTest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->instanceSource) {
            $res['InstanceSource'] = $this->instanceSource;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->ecsInstanceId) {
            $res['EcsInstanceId'] = $this->ecsInstanceId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->ecsRegion) {
            $res['EcsRegion'] = $this->ecsRegion;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->sid) {
            $res['Sid'] = $this->sid;
        }
        if (null !== $this->databaseUser) {
            $res['DatabaseUser'] = $this->databaseUser;
        }
        if (null !== $this->databasePassword) {
            $res['DatabasePassword'] = $this->databasePassword;
        }
        if (null !== $this->instanceAlias) {
            $res['InstanceAlias'] = $this->instanceAlias;
        }
        if (null !== $this->dbaUid) {
            $res['DbaUid'] = $this->dbaUid;
        }
        if (null !== $this->safeRule) {
            $res['SafeRule'] = $this->safeRule;
        }
        if (null !== $this->queryTimeout) {
            $res['QueryTimeout'] = $this->queryTimeout;
        }
        if (null !== $this->exportTimeout) {
            $res['ExportTimeout'] = $this->exportTimeout;
        }
        if (null !== $this->dataLinkName) {
            $res['DataLinkName'] = $this->dataLinkName;
        }
        if (null !== $this->ddlOnline) {
            $res['DdlOnline'] = $this->ddlOnline;
        }
        if (null !== $this->useDsql) {
            $res['UseDsql'] = $this->useDsql;
        }
        if (null !== $this->skipTest) {
            $res['SkipTest'] = $this->skipTest;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InstanceSource'])) {
            $model->instanceSource = $map['InstanceSource'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['EcsInstanceId'])) {
            $model->ecsInstanceId = $map['EcsInstanceId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['EcsRegion'])) {
            $model->ecsRegion = $map['EcsRegion'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Sid'])) {
            $model->sid = $map['Sid'];
        }
        if (isset($map['DatabaseUser'])) {
            $model->databaseUser = $map['DatabaseUser'];
        }
        if (isset($map['DatabasePassword'])) {
            $model->databasePassword = $map['DatabasePassword'];
        }
        if (isset($map['InstanceAlias'])) {
            $model->instanceAlias = $map['InstanceAlias'];
        }
        if (isset($map['DbaUid'])) {
            $model->dbaUid = $map['DbaUid'];
        }
        if (isset($map['SafeRule'])) {
            $model->safeRule = $map['SafeRule'];
        }
        if (isset($map['QueryTimeout'])) {
            $model->queryTimeout = $map['QueryTimeout'];
        }
        if (isset($map['ExportTimeout'])) {
            $model->exportTimeout = $map['ExportTimeout'];
        }
        if (isset($map['DataLinkName'])) {
            $model->dataLinkName = $map['DataLinkName'];
        }
        if (isset($map['DdlOnline'])) {
            $model->ddlOnline = $map['DdlOnline'];
        }
        if (isset($map['UseDsql'])) {
            $model->useDsql = $map['UseDsql'];
        }
        if (isset($map['SkipTest'])) {
            $model->skipTest = $map['SkipTest'];
        }

        return $model;
    }
}
