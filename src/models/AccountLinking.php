<?php

namespace linuskohl\facebookMessengerWebhook\models;

use linuskohl\facebookMessengerWebhook\models\Message;

/**
 * Class AccountLinking
 *
 * @package   linuskohl\facebookMessengerWebhook
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      https://github.com/linuskohl/facebook-messenger-webhook
 * @link      https://developers.facebook.com/docs/messenger-platform/webhook-reference/account-linking
 * @copyright 2017-present Linus Kohl
 */
class AccountLinking
{

    const STATUS_LINKED = "linked";
    const STATUS_UNLINKED = "unlinked";

    /** @var string $status */
    public $status;

    /** @var string|null $authCode */
    public $authCode;
}
