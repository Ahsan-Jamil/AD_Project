<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Nxtroster;

/**
 * WrestlerprofileSearch represents the model behind the search form about `app\models\Wrestlerprofile`.
 */
class NxtRosterSearch extends Nxtroster
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['WP_id', 'WP_Age'], 'integer'],
            [['WP_RingName', 'WP_RealName', 'WP_Gender', 'WP_DebutYear', 'WP_Height', 'WP_Weight', 'WP_Nationality', 'WP_Roster'], 'safe'],
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
        $query = Wrestlerprofile::find()->where(['WP_Roster'=>'NXT']);

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
            'WP_id' => $this->WP_id,
            'WP_Age' => $this->WP_Age,
            'WP_DebutYear' => $this->WP_DebutYear,
        ]);

        $query->andFilterWhere(['like', 'WP_RingName', $this->WP_RingName])
            ->andFilterWhere(['like', 'WP_RealName', $this->WP_RealName])
            ->andFilterWhere(['like', 'WP_Gender', $this->WP_Gender])
            ->andFilterWhere(['like', 'WP_Height', $this->WP_Height])
            ->andFilterWhere(['like', 'WP_Weight', $this->WP_Weight])
            ->andFilterWhere(['like', 'WP_Nationality', $this->WP_Nationality])
            ->andFilterWhere(['like', 'WP_Roster', $this->WP_Roster]);

        return $dataProvider; 
    }
}
