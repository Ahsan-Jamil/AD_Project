<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nxtchamp".
 *
 * @property integer $NC_id
 * @property integer $WP_id
 * @property integer $NC_Reign
 * @property integer $NC_DaysHeld
 * @property string $NC_Event
 * @property string $NC_Notes
 *
 * @property Wrestlerprofile $wP
 */
class Nxtchamp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nxtchamp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['WP_id', 'NC_Reign', 'NC_DaysHeld', 'NC_Event', 'NC_Notes'], 'required'],
            [['WP_id', 'NC_Reign', 'NC_DaysHeld'], 'integer'],
            [['NC_Event', 'NC_Notes'], 'string'],
            [['WP_id'], 'exist', 'skipOnError' => true, 'targetClass' => Wrestlerprofile::className(), 'targetAttribute' => ['WP_id' => 'WP_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'NC_id' => 'Nc ID',
            'WP_id' => 'Wp ID',
            'NC_Reign' => 'Nc  Reign',
            'NC_DaysHeld' => 'Nc  Days Held',
            'NC_Event' => 'Nc  Event',
            'NC_Notes' => 'Nc  Notes',
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
