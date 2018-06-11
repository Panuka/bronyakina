<?php

namespace app\models;

use app\src\csv\CsvManager;
use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

/**
 * ContactForm is the model behind the contact form.
 */
class CsvForm extends Model
{
    /** @var UploadedFile[] */
    public $csv;

    /** @var CsvManager */
    public $csvManager;

    public function __construct($config = [])
    {
        parent::__construct($config);
        $this->csvManager = Yii::$container->get(CsvManager::class);
    }

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            ['csv', 'file', 'extensions' => 'csv, json'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'csv' => 'CSV файл',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact()
    {
        if ($this->validate()) {
            $this->csv = UploadedFile::getInstances($this, 'csv');
            $csvRaw = file_get_contents($this->csv[0]->tempName);
            $this->csvManager->saveToDb($csvRaw);
            return true;
        }
        return false;
    }

}
