<?php
Yii::setAlias('@common', dirname(__DIR__));
Yii::setAlias('@apps', dirname(dirname(__DIR__)) . '/apps');
Yii::setAlias('@frontend', Yii::getAlias('@apps') . '/frontend');
Yii::setAlias('@backend', Yii::getAlias('@apps') . '/backend');
Yii::setAlias('@console', Yii::getAlias('@apps') . '/console');

