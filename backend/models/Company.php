<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nb_company".
 *
 * @property integer $company_id
 * @property string $company_name
 * @property string $logo
 */
class Company extends \yii\db\ActiveRecord
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
            [['company_name'], 'string', 'max' => 50],
            [['company_name'], 'required'],
            
            [['logo'], 'string', 'max' => 255]
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
        ];
    }
}
