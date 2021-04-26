<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase
{
    public function test_email()
    {
        $email = Validate::email('marco@devitm.com');
        $this->assertTrue($email);

        $email = Validate::email('marco@-devitm.com');
        $this->assertFalse($email);
    }

    public function test_url()
    {
        $url = Validate::url('https://devitm.com');
        $this->assertTrue($url);

        $url = Validate::url('marco@-devitm.com');
        $this->assertFalse($url);
    }
}