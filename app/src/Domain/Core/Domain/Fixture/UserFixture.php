<?php

declare(strict_types=1);

namespace App\Domain\Core\Domain\Fixture;

use Auth\User\Domain\Entity\User\User;
use yii\test\ActiveFixture;

class UserFixture extends ActiveFixture
{
    public $modelClass = User::class;
}
