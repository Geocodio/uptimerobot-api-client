<?php

namespace Vdhicts\UptimeRobot\Exceptions;

use Throwable;
use Vdhicts\UptimeRobot\UptimeRobotClientException;

class InvalidApiKeyException extends UptimeRobotClientException
{
    /**
     * InvalidApiKeyException constructor.
     * @param Throwable|null $previous
     */
    public function __construct(Throwable $previous = null)
    {
        parent::__construct(
            'The API key must be provided',
            0,
            $previous
        );
    }
}
