<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\cruserweightchamp;

/**
 * cruserweightchampSearch represents the model behind the search form about `app\models\cruserweightchamp`.
 */
class cruserweightchampSearch extends cruserweightchamp
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CW_id', 'WP_id', 'CW_Reign', 'CW_DaysHeld'], 'integer'],
            [['CW_Event', 'CW_Notes'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = cruserweightchamp::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'CW_id' => $this->CW_id,
            'WP_id' => $this->WP_id,
            'CW_Reign' => $this->CW_Reign,
            'CW_DaysHeld' => $this->CW_DaysHeld,
        ]);

        $query->andFilterWhere(['like', 'CW_Event', $this->CW_Event])
            ->andFilterWhere(['like', 'CW_Notes', $this->CW_Notes]);

        return $dataProvider;
    }
}
