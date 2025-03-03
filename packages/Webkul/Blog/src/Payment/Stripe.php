<?php

namespace Webkul\Blog\Payment;

use Illuminate\Support\Facades\Http;
use Webkul\Payment\Payment\Payment;

class Stripe extends Payment
{
    /**
     * Payment method code
     *
     * @var string
     */
    protected $code  = 'stripe';

    /**
     * Get redirect url.
     *
     * @var string
     */
    public function getRedirectUrl()
    {

    }
}
