<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class logOutTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testLogout(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Log in') //cek apakah ada text Log in  
                ->clickLink('Log in') //klik link Log in
                ->type('email', 'ganoy@gmail.com') //input email
                ->type('password', '12345678') //input password
                ->press('LOG IN') //klik button LOG IN
                ->assertPathIs('/dashboard')
                ->click('@profile-dropdown') // Klik dropdown profile
                ->waitFor('@logout-button') // Tunggu tombol logout muncul
                ->click('@logout-button'); // Klik tombol logout
        });
    }
}
