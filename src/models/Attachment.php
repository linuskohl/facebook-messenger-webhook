<?php

namespace linuskohl\facebookMessengerWebhook\models;

/**
 * Class Attachment
 *
 * @package   linuskohl\facebookMessengerWebhook
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      https://github.com/linuskohl/facebook-messenger-webhook
 * @link      https://developers.facebook.com/docs/messenger-platform/webhook-reference/message#attachment
 * @copyright 2017-present Linus Kohl
 */
class Attachment
{
    const TYPE_AUDIO = "audio";
    const TYPE_FALLBACK = "fallback";
    const TYPE_FILE = "file";
    const TYPE_IMAGE = "image";
    const TYPE_LOCATION = "location";
    const TYPE_VIDEO = "video";

    /** @var string $type */
    public $type;

    /** @var string $payload */
    public $payload;
}

