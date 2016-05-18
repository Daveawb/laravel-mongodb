<?php

class BelongsToManyAndEmbedsRelationsTest extends TestCase
{
    public function tearDown()
    {
        Mockery::close();
        User::truncate();
    }

    public function testBelongsToAndEmbedsSave()
    {
        $events = Mockery::mock('Illuminate\Events\Dispatcher');

        $user1 = User::create(['name' => 'John Doe']);
        $user2 = User::create(['name' => 'Jane Doe']);

        $user2->setEventDispatcher($events);

        $events->shouldReceive('until')->once()->with('eloquent.saving: ' . get_class($user2), $user2)->andReturn(true);
        $events->shouldReceive('fire')->once()->with('eloquent.saved: ' . get_class($user2), $user2);

        $user1->connections()->save($user2, ['key1' => 'value1']);

        $user2->unsetEventDispatcher();
    }
}
