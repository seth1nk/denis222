<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "knigi".
 *
 * @property int $код_книги
 * @property string $название
 * @property string $автор
 * @property string $колличество_страниц
 * @property string $год_выпуска
 * @property string $город_издания
 * @property string $рейтинг
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
            [['название', 'автор', 'колличество_страниц', 'год_выпуска', 'город_издания', 'рейтинг'], 'required'],
            [['год_выпуска'], 'safe'],
            [['название', 'автор'], 'string', 'max' => 30],
            [['колличество_страниц'], 'string', 'max' => 99],
            [['город_издания'], 'string', 'max' => 20],
            [['рейтинг'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            #'код_книги' => 'Код Книги',
            'название' => 'Название',
            'автор' => 'Автор',
            'колличество_страниц' => 'Колличество Страниц',
            'год_выпуска' => 'Год Выпуска',
            'город_издания' => 'Город Издания',
            'рейтинг' => 'Рейтинг',
        ];
    }
}
