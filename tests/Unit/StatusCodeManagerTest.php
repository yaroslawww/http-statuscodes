<?php

namespace HttpStatusCodes\Tests\Unit;

use HttpStatusCodes\StatusCode;
use HttpStatusCodes\Tests\TestCase;
use HttpStatusCodes\StatusCodeManager;

class StatusCodeManagerTest extends TestCase
{
    /**
     * @test
     */
    public function get_status_code_from_int()
    {
        $manager = new StatusCodeManager();
        $statusCode = $manager->makeStatusCode(200);
        $this->assertEquals(StatusCode::class, get_class($statusCode));
    }

    /**
     * @test
     */
    public function get_status_code_from_string()
    {
        $manager = new StatusCodeManager();
        $statusCode = $manager->makeStatusCode('HTTP_OK');
        $this->assertEquals(StatusCode::class, get_class($statusCode));
    }

    /**
     * @test
     */
    public function error_if_not_valid_string()
    {
        $manager = new StatusCodeManager();
        $statusCode = $manager->makeStatusCode('HTTP_OKAY');
        $this->assertNull($statusCode);
    }

    /**
     * @test
     */
    public function error_if_not_valid_int()
    {
        $manager = new StatusCodeManager();
        $statusCode = $manager->makeStatusCode(999);
        $this->assertNull($statusCode);
    }
}
