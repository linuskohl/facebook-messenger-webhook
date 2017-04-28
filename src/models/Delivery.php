<?php

namespace linuskohl\facebookMessengerWebhook\models;

/**
 * Class Delivery
 *
 * @package   linuskohl\facebookMessengerWebhook
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      https://github.com/linuskohl/facebook-messenger-webhook
 * @link      https://developers.facebook.com/docs/messenger-platform/webhook-reference/message-delivered
 * @copyright 2017-present Linus Kohl
 */
class Delivery
{
    /** @var  mixed $messageIds */
    public $messageIds;

    /** @var  integer $watermark */
    public $watermark;

    /** @var  integer $sequenceNumber */
    public $sequenceNumber;

    /**
     * @param mixed $mids
     */
    public function setMids($mids)
    {
        $this->messageIds = $mids;
    }

    /**
     * @param integer $seq_nr
     */
    public function setSeq($seq_nr)
    {
        $this->sequenceNumber = $seq_nr;
    }
}
