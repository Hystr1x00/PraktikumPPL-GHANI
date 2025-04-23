<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Log in') //cek apakah ada text Log in  
                ->clickLink('Log in') //klik link Log in
                ->type('email', 'ganoy@gmail.com') //input email
                ->type('password', '12345678') //input password
                ->press('LOG IN') //klik button LOG IN
                ->assertSee('Dashboard'); //cek apakah ada text Dashboard
        });
    }
}
