<?php

namespace linuskohl\facebookMessengerWebhook\models;

/**
 * Class Read
 *
 * @package   linuskohl\facebookMessengerWebhook
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      https://github.com/linuskohl/facebook-messenger-webhook
 * @link      https://developers.facebook.com/docs/messenger-platform/webhook-reference/message-read
 * @copyright 2017-present Linus Kohl
 */
class Read
{
    /** @var integer $watermark */
    public $watermark;

    /** @var integer $seq */
    public $seq;
}
