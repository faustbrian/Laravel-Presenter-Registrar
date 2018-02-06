<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Presenter Registrar.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Tests\PresenterRegistrar;

use BrianFaust\PresenterRegistrar\PresenterRegistrarServiceProvider;
use GrahamCampbell\TestBenchCore\ServiceProviderTrait;

class ServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTrait;
}
