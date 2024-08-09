<?php

declare(strict_types=1);

Yii::setAlias('@core', dirname(__DIR__));
Yii::setAlias('@site', dirname(__DIR__, 2) . '/Module/Site');
Yii::setAlias('@backoffice', dirname(__DIR__, 2) . '/Module/Backoffice');
Yii::setAlias('@console', dirname(__DIR__, 3) . '/UI/Console');
