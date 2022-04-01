<?php

namespace HttpStatusCodes\Tests\Unit;

use HttpStatusCodes\StatusCode;
use HttpStatusCodes\StatusCodeManager;
use HttpStatusCodes\Tests\Fixtures\CustomStatusCodes;
use HttpStatusCodes\Tests\TestCase;

class StatusCodeManagerCustomClassTest extends TestCase
{
    /**
     * @test
     */
    public function error_if_override()
    {
        $manager    = new StatusCodeManager(CustomStatusCodes::class);
        $statusCode = $manager->makeStatusCode(200);
        $this->assertNull($statusCode);
    }

    /**
     * @test
     */
    public function get_status_code_from_int()
    {
        $manager    = new StatusCodeManager(CustomStatusCodes::class);
        $statusCode = $manager->makeStatusCode(2222);
        $this->assertEquals(StatusCode::class, get_class($statusCode));
        $this->assertEquals('OKAY', $statusCode->getMessage());
    }

    /**
     * @test
     */
    public function get_status_code_from_int_custom()
    {
        $manager    = new StatusCodeManager(CustomStatusCodes::class);
        $statusCode = $manager->makeStatusCode(3333);
        $this->assertEquals(StatusCode::class, get_class($statusCode));
        $this->assertEquals('New-OK', $statusCode->getMessage());
    }

    /**
     * @test
     */
    public function get_status_code_from_string_custom()
    {
        $manager    = new StatusCodeManager(CustomStatusCodes::class);
        $statusCode = $manager->makeStatusCode('HTTP_NEW_OK');
        $this->assertEquals(StatusCode::class, get_class($statusCode));
        $this->assertEquals('New-OK', $statusCode->getMessage());
    }
}
