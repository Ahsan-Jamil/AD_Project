<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Wwechamp;

/**
 * WwechampSearch represents the model behind the search form about `app\models\Wwechamp`.
 */
class WwechampSearch extends Wwechamp
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['WC_id', 'WP_id', 'WC_Reign', 'WC_DaysHeld'], 'integer'],
            [['WC_Event', 'WC_Notes'], 'safe'],
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
        $query = Wwechamp::find();

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
            'WC_id' => $this->WC_id,
            'WP_id' => $this->WP_id,
            'WC_Reign' => $this->WC_Reign,
            'WC_DaysHeld' => $this->WC_DaysHeld,
        ]);

        $query->andFilterWhere(['like', 'WC_Event', $this->WC_Event])
            ->andFilterWhere(['like', 'WC_Notes', $this->WC_Notes]);

        return $dataProvider;
    }
}
