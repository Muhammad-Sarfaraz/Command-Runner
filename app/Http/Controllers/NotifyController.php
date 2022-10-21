<?php

namespace App\Http\Controllers;

use App\Actions\SendViaEmailAction;
use Illuminate\Http\Request;

class NotifyController extends Controller
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
    public function __invoke()
    {
        return 1;
    }
}
