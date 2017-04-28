<?php

namespace linuskohl\facebookMessengerWebhook\models;

/**
 * Class Referral
 *
 * @package   linuskohl\facebookMessengerWebhook
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      https://github.com/linuskohl/facebook-messenger-webhook
 * @link      https://developers.facebook.com/docs/messenger-platform/webhook-reference/referral
 * @copyright 2017-present Linus Kohl
 */

class Referral
{
    /** @var string|null $ref */
    public $ref;

    /** @var  string|null $source */
    public $source;

    /** @var string|null $type */
    public $type;

    /** @var string|null $ad_id */
    public $ad_id;
}