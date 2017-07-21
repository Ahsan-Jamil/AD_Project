<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cruserweightchamp".
 *
 * @property integer $CW_id
 * @property integer $WP_id
 * @property integer $CW_Reign
 * @property integer $CW_DaysHeld
 * @property string $CW_Event
 * @property string $CW_Notes
 *
 * @property Wrestlerprofile $wP
 */
class Cruserweightchamp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cruserweightchamp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['WP_id', 'CW_Reign', 'CW_DaysHeld', 'CW_Event', 'CW_Notes'], 'required'],
            [['WP_id', 'CW_Reign', 'CW_DaysHeld'], 'integer'],
            [['CW_Event', 'CW_Notes'], 'string'],
            [['WP_id'], 'exist', 'skipOnError' => true, 'targetClass' => Wrestlerprofile::className(), 'targetAttribute' => ['WP_id' => 'WP_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            //'CW_id' => 'Cw ID',
            'WP_id' => 'Wp ID',
            'CW_Reign' => 'Reign',
            'CW_DaysHeld' => 'Days Held',
            'CW_Event' => 'Event',
            'CW_Notes' => 'Notes',
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
