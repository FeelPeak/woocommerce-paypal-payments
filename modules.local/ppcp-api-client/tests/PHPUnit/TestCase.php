<?php
declare(strict_types=1);

namespace Inpsyde\PayPalCommerce\ApiClient;


use function Brain\Monkey\setUp;
use function Brain\Monkey\tearDown;
use function Brain\Monkey\Functions\expect;
use Mockery;
class TestCase extends \PHPUnit\Framework\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        setUp();
    }
    public function tearDown(): void
    {
        tearDown();
        Mockery::close();
        parent::tearDown();
    }

}