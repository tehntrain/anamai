<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Person;

/**
 * PersonSearch represents the model behind the search form about `frontend\models\Person`.
 */
class PersonSearch extends Person
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['HOSPCODE', 'CID', 'PID', 'HID', 'PRENAME', 'NAME', 'LNAME', 'HN', 'SEX', 'BIRTH', 'MSTATUS', 'OCCUPATION_OLD', 'OCCUPATION_NEW', 'RACE', 'NATION', 'RELIGION', 'EDUCATION', 'FSTATUS', 'FATHER', 'MOTHER', 'COUPLE', 'VSTATUS', 'MOVEIN', 'DISCHARGE', 'DDISCHARGE', 'ABOGROUP', 'RHGROUP', 'LABOR', 'PASSPORT', 'TYPEAREA', 'D_UPDATE'], 'safe'],
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
        $query = Person::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'BIRTH' => $this->BIRTH,
            'MOVEIN' => $this->MOVEIN,
            'DDISCHARGE' => $this->DDISCHARGE,
            'D_UPDATE' => $this->D_UPDATE,
        ]);

        $query->andFilterWhere(['like', 'HOSPCODE', $this->HOSPCODE])
            ->andFilterWhere(['like', 'CID', $this->CID])
            ->andFilterWhere(['like', 'PID', $this->PID])
            ->andFilterWhere(['like', 'HID', $this->HID])
            ->andFilterWhere(['like', 'PRENAME', $this->PRENAME])
            ->andFilterWhere(['like', 'NAME', $this->NAME])
            ->andFilterWhere(['like', 'LNAME', $this->LNAME])
            ->andFilterWhere(['like', 'HN', $this->HN])
            ->andFilterWhere(['like', 'SEX', $this->SEX])
            ->andFilterWhere(['like', 'MSTATUS', $this->MSTATUS])
            ->andFilterWhere(['like', 'OCCUPATION_OLD', $this->OCCUPATION_OLD])
            ->andFilterWhere(['like', 'OCCUPATION_NEW', $this->OCCUPATION_NEW])
            ->andFilterWhere(['like', 'RACE', $this->RACE])
            ->andFilterWhere(['like', 'NATION', $this->NATION])
            ->andFilterWhere(['like', 'RELIGION', $this->RELIGION])
            ->andFilterWhere(['like', 'EDUCATION', $this->EDUCATION])
            ->andFilterWhere(['like', 'FSTATUS', $this->FSTATUS])
            ->andFilterWhere(['like', 'FATHER', $this->FATHER])
            ->andFilterWhere(['like', 'MOTHER', $this->MOTHER])
            ->andFilterWhere(['like', 'COUPLE', $this->COUPLE])
            ->andFilterWhere(['like', 'VSTATUS', $this->VSTATUS])
            ->andFilterWhere(['like', 'DISCHARGE', $this->DISCHARGE])
            ->andFilterWhere(['like', 'ABOGROUP', $this->ABOGROUP])
            ->andFilterWhere(['like', 'RHGROUP', $this->RHGROUP])
            ->andFilterWhere(['like', 'LABOR', $this->LABOR])
            ->andFilterWhere(['like', 'PASSPORT', $this->PASSPORT])
            ->andFilterWhere(['like', 'TYPEAREA', $this->TYPEAREA]);

        return $dataProvider;
    }
}
