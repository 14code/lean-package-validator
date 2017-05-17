<?php

namespace Stolt\LeanPackage\Tests\Helpers;

use PHPUnit\Framework\TestCase;
use Stolt\LeanPackage\Helpers\Str as OsHelper;

class StrTest extends TestCase
{
    /**
     * @test
     * @group unit
     */
    public function canDetermineIfWindowsOrNot()
    {
        $osHelper = new OsHelper();
        if ($osHelper->isWindows()) {
            $this->assertTrue($osHelper->isWindows());
        } else {
            $this->assertFalse($osHelper->isWindows());
        }

        $this->assertTrue($osHelper->isWindows('WIn'));
        $this->assertFalse($osHelper->isWindows('Darwin'));
    }
}
