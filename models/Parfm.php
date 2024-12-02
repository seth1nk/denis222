<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "parfm".
 *
 * @property int $id
 * @property string $Название
 * @property string $Тип
 * @property int $Объем
 * @property int $Цена
 * @property string $Бренд
 * @property string $Рейтинг
 */
class Parfm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'parfm';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Название', 'Тип', 'Объем', 'Цена', 'Бренд', 'Рейтинг'], 'required'],
            [['Объем', 'Цена'], 'integer'],
            [['Название', 'Тип', 'Бренд', 'Рейтинг'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Название' => 'Название',
            'Тип' => 'Тип',
            'Объем' => 'Объем',
            'Цена' => 'Цена',
            'Бренд' => 'Бренд',
            'Рейтинг' => 'Рейтинг',
        ];
    }
}
