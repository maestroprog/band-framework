<?php
/**
 * @author Kirill chEbba Chebunin
 * @author Vasil coylOne Kulakov <kulakov@vasiliy.pro>
 *
 * This source file is subject to the MIT license that is bundled
 * with this package in the file LICENSE.
 */
namespace EventBand\Transport\Amqp\Driver;

/**
 * Description of AmqpMessage
 *
 * TODO: strict properties
 */
interface AmqpMessage
{
    public function getBody();

    public function getHeaders();

    public function getContentType();

    public function getContentEncoding();

    public function getMessageId();

    public function getAppId();

    public function getUserId();

    public function getPriority();

    public function getTimestamp();

    public function getExpiration();

    public function getType();

    public function getReplyTo();
}
