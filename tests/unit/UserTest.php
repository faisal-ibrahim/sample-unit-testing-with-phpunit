<?php

namespace unit;

use App\Models\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    protected $user;

    public function setUp(): void
    {
        $this->user = new User();
    }

    public function testThatWeCanGetTheFistName()
    {
        $this->user->setFirstName('Faisal');

        $this->assertEquals($this->user->getFirstName(), 'Faisal');
    }

    public function testThatWeCanGetTheLastName()
    {
        $this->user->setLastName('Ibrahim');

        $this->assertEquals($this->user->getLastName(), 'Ibrahim');
    }

    public function testFullNameIsReturned()
    {
        $this->user->setFirstName('Faisal');
        $this->user->setLastName('Ibrahim');

        $this->assertEquals($this->user->getFullName(), 'Faisal Ibrahim');
    }

    public function testFirstNameLastNameAreTrimmed()
    {
        $this->user->setFirstName('Faisal  ');
        $this->user->setLastName('   Ibrahim  ');

        $this->assertEquals($this->user->getFirstName(), 'Faisal');
        $this->assertEquals($this->user->getLastName(), 'Ibrahim');
    }

    public function testEmailAddressCanBeSet()
    {
        $this->user->setEmail('faisal.im048@gmail.com');

        $this->assertEquals($this->user->getEmail(), 'faisal.im048@gmail.com');
    }

    public function testEmailVariablesContainCorrectValues()
    {
        $this->user->setFirstName('Faisal  ');
        $this->user->setLastName('  Ibrahim  ');
        $this->user->setEmail('faisal.im048@gmail.com');

        $emailVariables = $this->user->getEmailVariables();

        $this->assertArrayHasKey('fullName', $emailVariables);
        $this->assertArrayHasKey('email', $emailVariables);

        $this->assertEquals($emailVariables['fullName'], 'Faisal Ibrahim');
        $this->assertEquals($emailVariables['email'], 'faisal.im048@gmail.com');

    }
}
