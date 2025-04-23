<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testEditNote(): void
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
            ->clickLink('Edit') //klik button Edit
            ->type('title', 'Praktikum PPL') //input title
            ->type('description', 'Aku Farid Ghani dengan nim 1202220152') //input description
            ->press('UPDATE') //klik button UPDATE
            ->assertSee('Ganoy'); //cek apakah ada Ganoy
    });
    }
}
