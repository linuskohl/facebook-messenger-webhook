<?php

namespace linuskohl\facebookMessengerWebhook;

use JsonMapper;
use \linuskohl\facebookMessengerWebhook\models\AccountLinking;
use \linuskohl\facebookMessengerWebhook\models\Delivery;
use \linuskohl\facebookMessengerWebhook\models\Message;
use \linuskohl\facebookMessengerWebhook\models\Messaging;
use \linuskohl\facebookMessengerWebhook\models\Optin;
use \linuskohl\facebookMessengerWebhook\models\Postback;
use \linuskohl\facebookMessengerWebhook\models\Read;
use \linuskohl\facebookMessengerWebhook\models\Referral;


/**
 * Class Webhook
 *
 * @package   linuskohl\facebookMessengerWebhook;
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      https://github.com/linuskohl/facebook-messenger-webhook/
 * @copyright 2017-present Linus Kohl
 */
class Webhook
{

    const HEADER_SIGNATURE    = "x-hub-signature";
    const HEADER_MODE         = "hub_mode";
    const HEADER_VERIFY_TOKEN = "hub_verify_token";
    const HEADER_CHALLENGE    = "hub_challenge";

    /** @var  string $app_secret */
    private $app_secret;

    /** @var  string $validation_token */
    private $validation_token;

    /** @var \JsonMapper $mapper */
    private $mapper;

    /**
     * Webhook constructor.
     *
     * @param string $app_secret
     * @param string $validation_token
     */
    public function __construct($app_secret, $validation_token)
    {
        $this->app_secret = $app_secret;
        $this->validation_token = $validation_token;
        $this->mapper = new JsonMapper();

        $this->mapper->bIgnoreVisibility = false;
        $this->mapper->bEnforceMapType = false;
        $this->mapper->bExceptionOnUndefinedProperty = false;
        $this->mapper->bExceptionOnMissingData = false;
    }

    /**
     * Handle GET verification requests
     * https://developers.facebook.com/docs/graph-api/webhooks#verification
     *
     * @param mixed $parameters GET parameters
     *
     * @return bool
     */
    public function verificationRequests($parameters)
    {
        if (array_key_exists(self::HEADER_MODE, $parameters) &&
            array_key_exists(self::HEADER_VERIFY_TOKEN, $parameters) &&
            array_key_exists(self::HEADER_CHALLENGE, $parameters) &&
            $parameters[self::HEADER_VERIFY_TOKEN] === $this->validation_token &&
            $parameters[self::HEADER_MODE]         === 'subscribe'
        ) {
            return true;
        }
        return false;
    }

    /**
     * Handle POST request
     *
     * @param $request_body
     */
    public function handle($request_body)
    {
        if ($request_body['object'] == 'page') {
            foreach ($request_body['entry'] as $entry) {
                foreach ($entry['messaging'] as $element) {
                    $res = new Messaging();
                    $res->sender_id    = $element['sender']['id'];
                    $res->recipient_id = $element['recipient']['id'];
                    $type = $element;
                    foreach (["sender", "recipient", "timestamp"] as $key) {
                        unset($type[$key]);
                    }
                    $type = key($type);
                    $res->type = $type;
                    if (!empty($element[$type])) {
                        switch ($type) {
                            case 'message':
                                $res->$type = $this->mapper->map($element[$type], new Message());
                                break;
                            case 'delivery':
                                $res->$type = $this->mapper->map($element[$type], new Delivery());
                                break;
                            case 'postback':
                                $res->$type = $this->mapper->map($element[$type], new Postback());
                                break;
                            case 'read':
                                $res->$type = $this->mapper->map($element[$type], new Read());
                                break;
                            case 'optin':
                                $res->$type = $this->mapper->map($element[$type], new Optin());
                                break;
                            case 'referral':
                                $res->$type = $this->mapper->map($element[$type], new Referral());
                                break;
                            case 'account_linking':
                                $res->$type = $this->mapper->map($element[$type], new AccountLinking());
                                break;
                        }
                    }
                    return $res;
                }
            }

        }
    }

    /**
     * Verify that the callback came from Facebook
     * https://developers.facebook.com/docs/graph-api/webhooks#setup
     *
     * @param string $signature
     * @param string $body
     *
     * @throws \Exception
     */
    public function verifyRequestSignature($signature, $body)
    {
        if (empty($signature)) {
            throw new \Exception("No signature available");
        } else {
            $elements = explode('=', $signature);
            $method = $elements[0];
            $signatureHash = $elements[1];
            $expectedHash = hash_hmac($method, $body, $this->app_secret, false);
            if ($signatureHash != $expectedHash) {
                throw new \Exception("Couldn't validate the request signature.");
            }
        }
    }

}