<?php

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testSessionsWithoutRedirect()
    {
        $this->flushSession();
        $this->visit('/routeWithoutRedirect');
        $this->assertSessionHas('test','value');
    }

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testRedirectWithNormalSessionData()
    {
        $this->flushSession();
        $this->visit('/routeWithSessionPut');
        $this->seePageIs('/destination');
        $this->assertSessionHas('test','value');
    }

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testRedirectWithFlashedSessionData()
    {
        $this->flushSession();
        $this->visit('/routeWithSessionFlash');
        $this->seePageIs('/destination');
        $this->assertSessionHas('test','value');
    }
}
