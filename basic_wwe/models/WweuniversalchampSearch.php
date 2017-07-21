<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Wweuniversalchamp;

/**
 * WweuniversalchampSearch represents the model behind the search form about `app\models\Wweuniversalchamp`.
 */
class WweuniversalchampSearch extends Wweuniversalchamp
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['WUC_id'/*, 'WP_id'*/, 'WUC_Reign', 'WUC_DaysHeld'], 'integer'],
            [['WUC_Event', 'WUC_Notes', 'WP_id'], 'safe'],
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
        $query = Wweuniversalchamp::find();

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

        $query->joinWith("wP");

        // grid filtering conditions
        $query->andFilterWhere([
            'WUC_id' => $this->WUC_id,
            // 'WP_id' => $this->WP_id,
            // 'wrestlerprofile.WP_RingName' => $this->WP_id,
            'WUC_Reign' => $this->WUC_Reign,
            'WUC_DaysHeld' => $this->WUC_DaysHeld,
        ]);

        $query->andFilterWhere(['like', 'WUC_Event', $this->WUC_Event])
            ->andFilterWhere(['like', 'wrestlerprofile.WP_RingName', $this->WP_id])
            ->andFilterWhere(['like', 'WUC_Notes', $this->WUC_Notes]);

        return $dataProvider;
    }
}
