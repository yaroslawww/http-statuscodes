<?php

namespace HttpStatusCodes\Contracts;

interface StatusCode
{

    public function getMessage(): string;

    public function getCode(): int;

    public function getDescription(): string;

    public function getRFCNumber(): int;
}