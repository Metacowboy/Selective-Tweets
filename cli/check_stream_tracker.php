<?php
/**
 * This file is part of Selective Tweets.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author     Andy Young <andy@apexa.co.uk>
 * @license    MIT
 *
 * Script to ensure that the daemon is (a) still running and (b) not in a crashed state
 * Run every few minutes, e.g. from cron
 */
require dirname(dirname(__FILE__)) . '/app/CLIApp.php';
$controller = SelectiveTweets_CLIApp::factory();
$controller->ensureTrackerRunning();

