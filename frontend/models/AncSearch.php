<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Anc;

/**
 * AncSearch represents the model behind the search form about `frontend\models\Anc`.
 */
class AncSearch extends Anc {

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['HOSPCODE', 'PID', 'SEQ', 'DATE_SERV', 'GRAVIDA', 'ANCNO', 'GA', 'ANCRESULT', 'ANCPLACE', 'PROVIDER', 'D_UPDATE'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios() {
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
    public function search($params) {
        $query = Anc::find();
        

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination'=>[
                'pagesize'=>15
            ]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'DATE_SERV' => $this->DATE_SERV,
            'D_UPDATE' => $this->D_UPDATE,
        ]);

        $query->andFilterWhere(['like', 'HOSPCODE', $this->HOSPCODE])
                ->andFilterWhere(['like', 'PID', $this->PID])
                ->andFilterWhere(['like', 'SEQ', $this->SEQ])
                ->andFilterWhere(['like', 'GRAVIDA', $this->GRAVIDA])
                ->andFilterWhere(['like', 'ANCNO', $this->ANCNO])
                ->andFilterWhere(['like', 'GA', $this->GA])
                ->andFilterWhere(['like', 'ANCRESULT', $this->ANCRESULT])
                ->andFilterWhere(['like', 'ANCPLACE', $this->ANCPLACE])
                ->andFilterWhere(['like', 'PROVIDER', $this->PROVIDER]);

        return $dataProvider;
    }

}
