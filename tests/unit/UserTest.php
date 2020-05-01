<?php

namespace unit;

use App\Models\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testThatWeCanGetTheFistName()
    {
        $user = new User();

        $user->setFirstName('Faisal');

        $this->assertEquals($user->getFirstName(), 'Faisal');
    }

    public function testThatWeCanGetTheLastName()
    {
        $user = new User();

        $user->setLastName('Ibrahim');

        $this->assertEquals($user->getLastName(), 'Ibrahim');
    }

    public function testFullNameIsReturned()
    {
        $user = new User();

        $user->setFirstName('Faisal');
        $user->setLastName('Ibrahim');

        $this->assertEquals($user->getFullName(), 'Faisal Ibrahim');
    }

    public function testFirstNameLastNameAreTrimmed()
    {
        $user = new User();

        $user->setFirstName('Faisal  ');
        $user->setLastName('   Ibrahim  ');

        $this->assertEquals($user->getFirstName(), 'Faisal');
        $this->assertEquals($user->getLastName(), 'Ibrahim');
    }

    public function testEmailAddressCanBeSet()
    {
        $user = new User();

        $user->setEmail('faisal.im048@gmail.com');

        $this->assertEquals($user->getEmail(), 'faisal.im048@gmail.com');
    }

    public function testEmailVariablesContainCorrectValues()
    {
        $user = new User();

        $user->setFirstName('Faisal  ');
        $user->setLastName('  Ibrahim  ');
        $user->setEmail('faisal.im048@gmail.com');

        $emailVariables = $user->getEmailVariables();

        $this->assertArrayHasKey('fullName', $emailVariables);
        $this->assertArrayHasKey('email', $emailVariables);

        $this->assertEquals($emailVariables['fullName'], 'Faisal Ibrahim');
        $this->assertEquals($emailVariables['email'], 'faisal.im048@gmail.com');

    }
}
