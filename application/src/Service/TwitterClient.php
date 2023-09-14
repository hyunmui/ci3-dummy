<?php

namespace App\Service;

use App\Domain\User;
use App\Util\Rot13Transformer;

class TwitterClient
{
    public function __construct(
        private Rot13Transformer $transformer,
    ) {
    }

    public function tweet(User $user, string $key, string $status): void
    {
        $transformedStatus = $this->transformer->transform($status);

        // ... connect to Twitter and send the encoded status
    }
}
