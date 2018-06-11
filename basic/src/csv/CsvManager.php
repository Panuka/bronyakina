<?php


namespace app\src\csv;


use app\models\Request;
use Yii;

class CsvManager
{

    public function saveToDb($rawData = '')
    {
        $lines = explode(PHP_EOL, $rawData);
        $fields = (new Request)->attributeLabels();

        $keys = str_getcsv($lines[0], ';');
        for ($i = 1; $i < count($lines); $i++) {
            $data = str_getcsv($lines[$i], ';');
            $request = new Request();
            foreach ($keys as $j=>$key) {
                $request->{array_search($key, $fields)} = $data[$j];
            }


            $request->processToSave();
        }
        return;
    }

}