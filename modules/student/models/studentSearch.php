<?php

namespace app\modules\student\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\student\models\student;

/**
 * studentSearch represents the model behind the search form of `app\modules\student\models\student`.
 */
class studentSearch extends student
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['studID', 'year'], 'integer'],
            [['name', 'program'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = student::find();

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
            'studID' => $this->studID,
            'year' => $this->year,
        ]);

        $query->andFilterWhere(['ilike', 'name', $this->name])
            ->andFilterWhere(['ilike', 'program', $this->program]);

        return $dataProvider;
    }
}
