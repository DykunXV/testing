<?php
/**
 * This file is part of the Micropayment `minimal` integration sample
 *
 * @author  micropayment GmbH <support@micropayment.de>
 * @link    https://www.micropayment.de/
 *
 * @see     https://www.micropayment.de/help/integration_web/#integration_web-get_started
 */
header('Content-Type: text/plain');

$delimiter = "\n";

/**
 * @var string $status
 *
 * @see https://www.micropayment.de/help/integration_web/#integration_web-notification-response
 */
$status = 'ok'; // ok | error

/**
 * @var string $url
 *
 * @see https://www.micropayment.de/help/integration_web/#integration_web-notification-response
 */
$url = 'https://www.example.com/path/to/member-area/';

/**
 * @var string $target
 *
 * @see https://www.micropayment.de/help/integration_web/#integration_web-notification-response
 */
$target = '_self'; // _self | _parent | _top | _blank | frame-name

/**
 * @var int $forward
 *
 * @see https://www.micropayment.de/help/integration_web/#integration_web-notification-response
 */
$forward = 1; // 0 | 1

$response = '';
$response .= 'status=' . $status;
$response .= $delimiter;
$response .= 'url=' . $url;
$response .= $delimiter;
$response .= 'forward=' . $forward;
$response .= $delimiter;
$response .= 'target=' . $target;
$response .= $delimiter;

echo $response;