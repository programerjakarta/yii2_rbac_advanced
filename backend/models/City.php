<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property integer $city_id
 * @property string $city
 * @property integer $country_id
 * @property string $last_update
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['city', 'country_id'], 'required'],
            [['country_id'], 'integer'],
            [['last_update'], 'safe'],
            [['city'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'city_id' => 'City ID',
            'city' => 'City',
            'country_id' => 'Country ID',
            'last_update' => 'Last Update',
        ];
    }
}
