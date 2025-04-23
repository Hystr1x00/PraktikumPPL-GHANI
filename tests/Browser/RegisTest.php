<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Register') //cek apakah ada text Register
                    ->clickLink('Register') //klik link Register
                    ->type('name', 'Ganoy') //input name
                    ->type('email', 'ganoy@gmail.com') //input email
                    ->type('password', '12345678') //input password
                    ->type('password_confirmation', '12345678') //input password confirmation
                    ->press('REGISTER') //klik button REGISTER
                    ->assertSee('Dashboard'); //cek apakah ada text Dashboard   
        });
    }
}
