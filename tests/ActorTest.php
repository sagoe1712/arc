<?php
class ActorTest extends \PHPUnit\Framework\TestCase
{
    public function testActor() {
        $actor = new \Entities\Actor('1', 'Michael', '2010-01-01');

        $this->assertEquals($actor->getName(), 'Michael');
        $this->assertEquals($actor->getID(), '1');
        $this->assertEquals($actor->getDateOfBirth(), '2010-01-01');

    }


}
