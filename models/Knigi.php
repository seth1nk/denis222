<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "knigi".
 *
 * @property int $id
 * @property string $название
 * @property string $автор
 * @property int $Количество_страниц
 * @property int $Год_издания
 * @property string $Город_издания
 * @property string $Рейтинг
 */
class Knigi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'knigi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['название', 'автор', 'Количество_страниц', 'Год_издания', 'Город_издания', 'Рейтинг'], 'required'],
            [['Количество_страниц', 'Год_издания'], 'integer'],
            [['название', 'автор', 'Город_издания', 'Рейтинг'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'название' => 'Название',
            'автор' => 'Автор',
            'Количество_страниц' => 'Количество Страниц',
            'Год_издания' => 'Год Издания',
            'Город_издания' => 'Город Издания',
            'Рейтинг' => 'Рейтинг',
        ];
    }
}
