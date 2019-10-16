<?php

namespace HttpStatusCodes;

class StatusCode implements Contracts\StatusCode
{
    protected $message;
    protected $code;
    protected $description;
    protected $rfcNumber;

    /**
     * StatusCode constructor.
     */
    public function __construct($data)
    {
        $this->message = $data['message'];
        $this->code = $data['code'];
        $this->description = $data['description'] ? $data['description'] : '';
        $this->rfcNumber = $data['rfc'] ? $data['rfc'] : 0;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getCode(): int
    {
        return $this->code;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getRFCNumber(): int
    {
        return $this->rfcNumber;
    }
}
