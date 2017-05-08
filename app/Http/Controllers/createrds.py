import boto3

client = boto3.client('rds')

response = client.create_db_instance(
    DBName='gmeronfp',
    DBInstanceIdentifier='fpdbinstance',
    DBInstanceClass='db.r3.large',
    Engine='aurora',
    MasterUsername='master',
    MasterUserPassword='password',
    VpcSecurityGroupIds=[
        'sg-e8910e93',
    ],
    AvailabilityZone='us-west-2',
    DBSubnetGroupName='string',
    PreferredMaintenanceWindow='string',
    DBParameterGroupName='string',
    BackupRetentionPeriod=123,
    PreferredBackupWindow='string',
    Port=123,
    MultiAZ=True,
    EngineVersion='string',
    AutoMinorVersionUpgrade=True|False,
    LicenseModel='string',
    Iops=123,
    OptionGroupName='string',
    CharacterSetName='string',
    PubliclyAccessible=False,
    Tags=[
        {
            'Key': 'string',
            'Value': 'string'
        },
    ],
    DBClusterIdentifier='string',
    StorageType='string',
    TdeCredentialArn='string',
    TdeCredentialPassword='string',
    StorageEncrypted=True|False,
    KmsKeyId='string',
    Domain='string',
    CopyTagsToSnapshot=True|False,
    MonitoringInterval=123,
    MonitoringRoleArn='string',
    DomainIAMRoleName='string',
    PromotionTier=123,
    Timezone='string',
    EnableIAMDatabaseAuthentication=True|False
)
