<?php

namespace PeopleCloud;

/**
 * @internal
 * @covers \PeopleCloud\BasePeopleCloudClient
 */
final class BasePeopleCloudClientTest extends \PeopleCloud\TestCase
{
    public function testCtorDoesNotThrowWhenNoParams()
    {
        $client = new BasePeopleCloudClient();
        static::assertNotNull($client);
        static::assertNull($client->getApiKey());
    }
}