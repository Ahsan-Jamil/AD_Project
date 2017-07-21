<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wwechamp".
 *
 * @property integer $WC_id
 * @property integer $WP_id
 * @property integer $WC_Reign
 * @property integer $WC_DaysHeld
 * @property string $WC_Event
 * @property string $WC_Notes
 *
 * @property Wrestlerprofile $wP
 */
class Wwechamp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wwechamp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['WC_id'], 'required'],
            [['WC_id', 'WP_id', 'WC_Reign', 'WC_DaysHeld'], 'integer'],
            [['WC_Event', 'WC_Notes'], 'string'],
            [['WP_id'], 'exist', 'skipOnError' => true, 'targetClass' => Wrestlerprofile::className(), 'targetAttribute' => ['WP_id' => 'WP_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'WC_id' => 'Wc ID',
            'WP_id' => 'Wp ID',
            'WC_Reign' => 'Wc  Reign',
            'WC_DaysHeld' => 'Wc  Days Held',
            'WC_Event' => 'Wc  Event',
            'WC_Notes' => 'Wc  Notes',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWP()
    {
        return $this->hasOne(Wrestlerprofile::className(), ['WP_id' => 'WP_id']);
    }
}
