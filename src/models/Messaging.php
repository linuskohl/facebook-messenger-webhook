<?php

namespace linuskohl\facebookMessengerWebhook\models;

/**
 * Class Messaging
 *
 * @package   linuskohl\facebookMessengerWebhook
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      https://github.com/linuskohl/facebook-messenger-webhook
 * @link      https://developers.facebook.com/docs/messenger-platform/webhook-reference#messaging
 * @copyright 2017-present Linus Kohl
 */

class Messaging
{
    /** @var string $sender_id */
    public $sender_id;

    /** @var string $recipient_id */
    public $recipient_id;

    public $type;


}
