<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actions\SendViaEmailAction;

class InvokeController extends Controller
{
    public function __construct(
        public SendViaEmailAction $sendLinkToEmailAction,
    ) {
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(SendViaEmailAction $sendLinkToEmailAction)
    {
        return $sendLinkToEmailAction('email');
        return ($this->sendLinkToEmailAction)('Email');
    }
}
