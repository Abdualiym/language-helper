<?php

namespace abdualiym\language;


class Language
{
    // frontend
    public static function get($object, $attribute)
    {
        return $object[$attributeName . '_' . \Yii::$app->params['cms']['languageIds'][\Yii::$app->language]];
    }

    public static function getPhotoUrl($object, $thumbProfile = null): string
    {
        $key = \Yii::$app->params['cms']['languageIds'][\Yii::$app->language];

        if (!$object['photo_' . $key]) {
            $key = 0;
        }

        return $thumbProfile ? $object->getThumbFileUrl('photo_' . $key, $thumbProfile) : $object->getImageFileUrl('photo_' . $key);
    }

    // backend
    public static function getAttribute($object, $attributeName, $key = null)
    {
        $key = isset($key) ? $key : \Yii::$app->language;

        if (is_string($key)) {
            $key = \Yii::$app->params['cms']['languageIds'][$key];
        }
        return $object[$attributeName . '_' . $key];
    }

    public static function dataKeys()
    {
        return [0, 1, 2, 3];
    }
}
