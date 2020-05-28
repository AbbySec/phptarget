<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DisTeacher;

/**
 * DisteacherSearch represents the model behind the search form about `backend\models\DisTeacher`.
 */
class DisteacherSearch extends DisTeacher
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['username', 'phone_num', 'business', 'position', 'qq_num', 'email'], 'safe'],
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
        $query = DisTeacher::find();

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
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'phone_num', $this->phone_num])
            ->andFilterWhere(['like', 'business', $this->business])
            ->andFilterWhere(['like', 'position', $this->position])
            ->andFilterWhere(['like', 'qq_num', $this->qq_num])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
?>