<?php

namespace HttpStatusCodes\Tests\Unit;

use HttpStatusCodes\StatusCodeManager;
use HttpStatusCodes\Tests\TestCase;

class StatusCodeTest extends TestCase
{
    /**
     * @test
     */
    public function get_status_code_from_int()
    {
        $manager    = new StatusCodeManager();
        $statusCode = $manager->makeStatusCode(201);
        $this->assertEquals('Created', $statusCode->getMessage());
        $this->assertEquals(201, $statusCode->getCode());
        $this->assertEquals(2616, $statusCode->getRFCNumber());
        $this->assertNotNull($statusCode->getDescription());
    }
}
