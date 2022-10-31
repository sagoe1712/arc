<?php
class IdentifierTest extends \PHPUnit\Framework\TestCase
{
    public function getID() {
        $identifier = new \Entities\Identifier();

        $this->assertNotEmpty($identifier->generateIdentifer());


    }


}
