<?php

declare(strict_types=1);

namespace Auth\User\Domain\Enum;

/**
 * @author Yiimar
 */
enum UserStatusesEnum: int
{
    case STATUS_DELETED = 0;
    case STATUS_INACTIVE = 9;
    case STATUS_ACTIVE = 10;

}
