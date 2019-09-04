<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace HyperfTest\Server\Stub;

use Hyperf\Process\AbstractProcess;

class DemoProcess extends AbstractProcess
{
    public $name = 'test.demo';

    public function handle(): void
    {
    }
}
