<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wrestlerprofile".
 *
 * @property integer $WP_id
 * @property string $WP_RingName
 * @property string $WP_RealName
 * @property string $WP_Gender
 * @property integer $WP_Age
 * @property string $WP_DebutYear
 * @property string $WP_Height
 * @property string $WP_Weight
 * @property string $WP_Nationality
 * @property string $WP_Roster
 *
 * @property Cruserweightchamp[] $cruserweightchamps
 * @property Nxtchamp[] $nxtchamps
 * @property Wwechamp[] $wwechamps
 * @property Wweuniversalchamp[] $wweuniversalchamps
 */
class Wrestlerprofile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wrestlerprofile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['WP_RingName', 'WP_RealName', 'WP_Gender'], 'required'],
            [['WP_Gender', 'WP_Roster'], 'string'],
            [['WP_Age'], 'integer'],
            [['WP_DebutYear'], 'safe'],
            [['WP_RingName', 'WP_RealName', 'WP_Nationality'], 'string', 'max' => 30],
            [['WP_Height', 'WP_Weight'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'WP_id' => 'Wp ID',
            'WP_RingName' => 'Ring Name',
            'WP_RealName' => 'Real Name',
            'WP_Gender' => 'Gender',
            'WP_Age' => 'Age',
            'WP_DebutYear' => 'Debut Year',
            'WP_Height' => 'Height',
            'WP_Weight' => 'Weight',
            'WP_Nationality' => 'Nationality',
            'WP_Roster' => 'Roster',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCruserweightchamps()
    {
        return $this->hasMany(Cruserweightchamp::className(), ['WP_id' => 'WP_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNxtchamps()
    {
        return $this->hasMany(Nxtchamp::className(), ['WP_id' => 'WP_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWwechamps()
    {
        return $this->hasMany(Wwechamp::className(), ['WP_id' => 'WP_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWweuniversalchamps()
    {
        return $this->hasMany(Wweuniversalchamp::className(), ['WP_id' => 'WP_id']);
    }
}
