<?php

namespace Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected const DEFAULT_API_TOKEN = 'cf94bfd0bd5ba98975e8974bd4844319';

    use CreatesApplication;
    use RefreshDatabase;

    public function setUp(): void
    {
        $this->refreshApplication();
        $this->migrateFreshUsing();

        parent::setUp();
    }
}
