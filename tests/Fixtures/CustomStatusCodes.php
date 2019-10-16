<?php

namespace HttpStatusCodes\Tests\Fixtures;


use HttpStatusCodes\RFCStatusCodes;

class CustomStatusCodes extends RFCStatusCodes
{
    /**
     * @rfc 1111
     * @description Test Description
     * @message OKAY
     */
    const HTTP_OK = 2222;
    /**
     * @rfc 1133
     * @description Test Description New Ok
     * @message New-OK
     */
    const HTTP_NEW_OK = 3333;

}