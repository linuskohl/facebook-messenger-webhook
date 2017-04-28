<?php

namespace linuskohl\facebookMessengerWebhook\models;

/**
 * Class Message
 *
 * @package   linuskohl\facebookMessengerWebhook
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      https://github.com/linuskohl/facebook-messenger-webhook
 * @link      https://developers.facebook.com/docs/messenger-platform/webhook-reference/message
 * @copyright 2017-present Linus Kohl
 */

class Message
{
    /** @var  string $mid Message ID */
    public $mid;

    /** @var  string|null $text Text of message */
    public $text;

    /** @var  \linuskohl\facebookMessengerWebhook\models\Attachment[]|null $attachments Array containing attachments */
    public $attachments;

    /** @var  \linuskohl\facebookMessengerWebhook\models\QuickReply|null Optional custom data provided by the sending app */
    public $quick_reply;

}
