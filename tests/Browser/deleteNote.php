<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class deleteNote extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testDeleteNote(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->assertSee('Log in') //cek apakah ada text Log in
            ->clickLink('Log in') //klik link Log in
            ->type('email', 'ganoy@gmail.com') //input email
            ->type('password', '12345678') //input password
            ->press('LOG IN') //klik button LOG IN
            ->assertSee('logged in!') //cek apakah ada text logged in!
            ->visit('/notes') //visit /notes
            ->press('Delete'); //klik button Delete
    });
    }
}
