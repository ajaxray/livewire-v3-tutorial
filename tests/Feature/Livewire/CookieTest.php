<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Cookie;
use Livewire\Livewire;
use Tests\TestCase;

class CookieTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Cookie::class)
            ->assertStatus(200);
    }

    /** @test */
    public function cookie_printed_on_the_page()
    {
        $this->get('/fortune')
            ->assertSeeLivewire(Cookie::class);
    }

    /** @test */
    public function initial_message_displayed()
    {
        $message = Livewire::test(Cookie::class)->viewData('message');
        $this->assertNotEmpty($message);
    }

    /** @test */
    public function subsequent_message_are_not_equal()
    {
        $cookie = Livewire::test(Cookie::class);
        $message1 = $cookie->viewData('message');

        $cookie->call('rotate');
        $message2 = $cookie->viewData('message');

        $this->assertNotEquals($message1, $message2);
    }
}
