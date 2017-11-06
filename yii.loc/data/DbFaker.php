<?php

namespace app\data;

use yii\db\ActiveRecord;
use yii\base\Object;

class DbFaker extends Object
{
    protected $data = null;

    protected $model = null;

    public function setModel(string $model)
    {
        $model = 'app\models\\' . ucfirst($model);

        $this->model = class_exists($model) ? $model : null;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setData($path)
    {
        $this->data = include(__DIR__ . '/' . $path . '.php');
    }

    public function getData()
    {
        return $this->data;
    }

    public function execute()
    {
        if (!$this->model || !$this->data){
            return 'Nothing to insert';
        }
        foreach ($this->data as $k => $item){
            $model = new $this->model;
            if ($k == 0 && !$model instanceof ActiveRecord){
                break;
            }

            if ($model->validate($item)){
                 $model->attributes = $item;
                 $model->save();
            }
         }
    }
}