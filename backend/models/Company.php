<?php

namespace backend\models;

use Yii;
use common\models\User;

/**
 * This is the model class for table "nb_company".
 *
 * @property integer $company_id
 * @property string $company_name
 * @property string $logo
 * @property string $contact_name
 * @property string $mobile
 * @property string $telephone
 * @property string $email
 * @property string $homepage
 * @property integer $create_time
 * @property integer $delete_flag
 */
class Company extends \common\base\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%company}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['create_time', 'delete_flag'], 'integer'],
            [['company_name', 'email'], 'string', 'max' => 50],
            [['logo', 'homepage'], 'string', 'max' => 255],
            [['contact_name', 'mobile', 'telephone'], 'string', 'max' => 20],
            
            [['company_name', 'contact_name', 'mobile'], 'required'],
            [['company_name'], 'unique', 'message'=>'公司名称已经存在'],
            
            [['mobile'], 'match','pattern'=>'/^[1][358]\d{9}$/','message'=>'请填写有效的手机号码'],
            [['telephone'], 'match','pattern'=>'/(^[0-9]{3,4}[0-9]{7,8}$)|(^[0-9]{3,4}\-[0-9]{7,8}$)|(^0{0,1}13[0-9]{9}$)/','message'=>'请填写有效的电话号码'],
			[['email'], 'email'],
            [['homepage'], 'match','pattern'=>'/^(http:\/\/([\w-]+\.)+[\w-]+(\/[\w- \.\/?%&=]*)?)$/','message'=>'请填写有效的网址'],
            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'company_id' => Yii::t('app', 'Company ID'),
            'company_name' => Yii::t('app', 'Company Name'),
            'logo' => Yii::t('app', 'Logo'),
            'contact_name' => Yii::t('app', 'Contact Name'),
            'mobile' => Yii::t('app', 'Mobile'),
            'telephone' => Yii::t('app', 'Telephone'),
            'email' => Yii::t('app', 'Email'),
            'homepage' => Yii::t('app', 'Homepage'),
            'create_time' => Yii::t('app', 'Create Time'),
            'delete_flag' => Yii::t('app', 'Delete Flag'),
        ];
    }
}
