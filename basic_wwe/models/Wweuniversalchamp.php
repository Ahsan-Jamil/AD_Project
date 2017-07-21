<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wweuniversalchamp".
 *
 * @property integer $WUC_id
 * @property integer $WP_id
 * @property integer $WUC_Reign
 * @property integer $WUC_DaysHeld
 * @property string $WUC_Event
 * @property string $WUC_Notes
 *
 * @property Wrestlerprofile $wP
 */
class Wweuniversalchamp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wweuniversalchamp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['WP_id', 'WUC_Reign', 'WUC_DaysHeld'], 'integer'],
            [['WUC_Event', 'WUC_Notes'], 'string'],
            [['WP_id'], 'exist', 'skipOnError' => true, 'targetClass' => Wrestlerprofile::className(), 'targetAttribute' => ['WP_id' => 'WP_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
           // 'WUC_id' => 'ID',
            'WP_id' => 'Champion',
            'WUC_Reign' => 'Reign',
            'WUC_DaysHeld' => 'Days Held',
            'WUC_Event' => 'Event',
            'WUC_Notes' => 'Notes',
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
