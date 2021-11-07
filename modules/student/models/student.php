<?php

namespace app\modules\student\models;

use Yii;

/**
 * This is the model class for table "tbl_student".
 *
 * @property int $studID
 * @property string|null $name
 * @property string|null $program
 * @property int|null $year
 */
class student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['year'], 'default', 'value' => null],
            [['year'], 'integer'],
            [['name', 'program'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'studID' => 'Student ID',
            'name' => 'Full Name',
            'program' => 'Program Enrolled',
            'year' => 'Attending Year',
        ];
    }
}
