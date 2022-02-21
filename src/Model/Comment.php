<?php

/**
 * Copyright © Michał Biarda. All rights reserved.
 * See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace MB\ShipXSDK\Model;

use DateTime;
use Spatie\DataTransferObject\DataTransferObject;

class Comment extends DataTransferObject
{
    public int $id;

    public ?string $href;

    public string $comment;

    public DateTime $created_at;
}
