<?php

namespace App\Tests\Service;

use App\Service\Func;
use Exception;
use InvalidArgumentException;
use Liip\FunctionalTestBundle\Test\WebTestCase;
use PHPUnit\Framework\TestCase;

class FuncTest extends WebTestCase
{
    /**
     * @test
     * @return void
     */
    public function checkWorksCorrectly()
    {
        /**
         * @var Func $service
         */
        $service = $this->getContainer()->get(Func::class);

        $this->assertEquals(2, $service->example(4,1));
    }

    /**
     * @test
     * @throws Exception
     */
    public function checkErrorIfYEquals0()
    {
        /**
         * @var Func $service
         */
        $service = $this->getContainer()->get(Func::class);

        $this->expectException(InvalidArgumentException::class);

        $this->expectErrorMessage('dividing on 0 error');

        $service->example(4,0);
    }

    /**
     * @test
     */
    public function checkErrorIfXLess0()
    {
        /**
         * @var Func $service
         */
        $service = $this->getContainer()->get(Func::class);

        $this->expectException(InvalidArgumentException::class);

        $this->expectErrorMessage('you must not get square root from negative numbers');

        $service->example(-1,5);
    }
}
