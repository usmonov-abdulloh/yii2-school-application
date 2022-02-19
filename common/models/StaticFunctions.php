<?php


namespace common\models;


use yii\helpers\FileHelper;
use yii\helpers\StringHelper;
use yii\web\UploadedFile;

class StaticFunctions
{
    public static function getShortDescription($model)
    {
        return StringHelper::truncateWords(strip_tags($model), 30);
    }

    public static function saveImage($tableName,$id,$image){
        $DIR = "uploads/{$tableName}/$id/";
        FileHelper::createDirectory($DIR);

        $FILE = md5(rand(1,10000000).rand(1,100000000).$image->baseName); // rasmni nomini shifrlab qaytadan nomlab uni file ozgaruvchiga ozlashtirildi
        $FILE = $FILE . '.' . $image->extension;
        $image->saveAs($DIR . $FILE); // rasmni '$dir.$file' ga yuklash
        return $FILE;
    }


    public static function getImage($table,$id,$image){
        $file = realpath(dirname(__FILE__) . "/../../backend/web/uploads/$table/$id/$image");
        if(is_file($file)){
            return "/backend/uploads/$table/$id/$image";
        }else{
            return "/backend/images/no-photo.jpg";
        }
    }

    public static function deleteImage($tableName,$id,$image){
        $FILE = realpath(dirname(__FILE__) . "/../../backend/web/uploads/$tableName/$id/$image");
        if (is_file($FILE)){
            unlink($FILE);
        }
    }
    public static function deleteFolder($tableName,$id){
        $file = realpath(dirname(__FILE__) . "/../../backend/web/uploads/$tableName/$id");
        FileHelper::removeDirectory($file);
    }
    public static function createAction($this1,$model,$folder,$name){

        if ($this1->request->isPost) {
            $image = UploadedFile::getInstance($model,$name);

            if ($model->load($this1->request->post()) && $model->save()) {

                if (!empty($image)){
                    $model->image = self::saveImage($folder,$model->id,$image);
                }

                if ($model->save()){

                    return $this1->redirect(['view', 'id' => $model->id]);
                }
                return $this1->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }
    }

    public static function updateAction($this1,$model,$oldImage,$folder,$name,$column){
        if ($this1->request->isPost && $model->load($this1->request->post())) {

            $image = UploadedFile::getInstance($model,$name);

            if(empty($image)){

                $model->$column = $oldImage;
            }else{

                $model->$column = StaticFunctions::saveImage($folder,$model->id,$image);

                StaticFunctions::deleteImage($folder,$model->id,$oldImage);
            }
            if ($model->save()){
                return $this1->redirect(['view', 'id' => $model->id]);
            }

        }

    }


}