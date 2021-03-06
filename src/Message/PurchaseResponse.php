<?php

namespace Omnipay\Tinkoff\Message;

use Omnipay\Common\Message\RedirectResponseInterface;

class PurchaseResponse extends AbstractResponse implements RedirectResponseInterface
{
    public function isSuccessful()
    {
        return false;
    }

    public function isRedirect()
    {
        return true;
    }

    public function getRedirectUrl()
    {
        return $this->data["PaymentURL"];
    }

    public function getRedirectMethod()
    {
        return 'GET';
    }
}
