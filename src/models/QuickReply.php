<?php

namespace linuskohl\facebookMessengerWebhook\models;

/**
 * Class QuickReply
 *
 * @package   linuskohl\facebookMessengerWebhook
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      https://github.com/linuskohl/facebook-messenger-webhook
 * @link      https://developers.facebook.com/docs/messenger-platform/webhook-reference/message#quick_reply
 * @copyright 2017-present Linus Kohl
 */
class QuickReply
{
    /** @var  string $payload Custom data provided by the app */
    public $payload;
}