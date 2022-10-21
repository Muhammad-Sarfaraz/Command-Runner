<?php

namespace App\Actions;

class SendViaEmailAction
{
    public function __invoke(
        string  $emails,
        ?string $token=null,
    ) {
        return $emails;
    }
}
