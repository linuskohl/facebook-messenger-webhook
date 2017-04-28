<?php

namespace linuskohl\facebookMessengerWebhook\models;

/**
 * Class Postback
 *
 * @package   linuskohl\facebookMessengerWebhook
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      https://github.com/linuskohl/facebook-messenger-webhook
 * @link      https://developers.facebook.com/docs/messenger-platform/webhook-reference/postback
 * @copyright 2017-present Linus Kohl
 */

class Postback
{


    /** @var  string $payload */
    public $payload;

    /** @var \linuskohl\facebookMessengerWebhook\models\Referral $referral */
    public $referral;

}

