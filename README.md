# facebook-messenger-webhook
Unofficial Facebook Messenger Webhook in PHP <br>
Official documentation available [here](https://developers.facebook.com/docs/messenger-platform/webhook-reference)<br>

## Requirements
-  "netresearch/jsonmapper" : "~1.1.1"

## Install

Via Composer

``` bash
$ composer require linuskohl/facebook-messenger-webhook dev-master
```

## License
The MIT License (MIT). Please see [License File](LICENSE) for more information.

## Documentation
### Class: linuskohl\facebookMessengerWebhook\Webhook
| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>string</em> <strong>$app_secret</strong>, <em>string</em> <strong>$validation_token</strong>)</strong> : <em>void</em><br /><em>Webhook constructor.</em> |
| public | <strong>handle(</strong><em>mixed</em> <strong>$request_body</strong>)</strong> : <em>void</em><br /><em>Handle POST request</em> |
| public | <strong>handleVerification(</strong><em>mixed</em> <strong>$parameters</strong>)</strong> : <em>bool</em><br /><em>Handle GET verification requests https://developers.facebook.com/docs/graph-api/webhooks#verification</em> |
| public | <strong>verifyRequestSignature(</strong><em>string</em> <strong>$signature</strong>, <em>string</em> <strong>$body</strong>)</strong> : <em>void</em><br /><em>Verify that the callback came from Facebook https://developers.facebook.com/docs/graph-api/webhooks#setup</em> |

