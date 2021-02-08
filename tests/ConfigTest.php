<?php

declare(strict_types=1);

/**
 * This file is part of datana-gmbh/intercom-config.
 *
 * (c) Datana GmbH
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Datana\Intercom\Config\Tests;

use Datana\Intercom\Config\Config;
use Ergebnis\Test\Util\Helper;
use PHPUnit\Framework\TestCase;
use function Symfony\Component\String\u;

final class ConfigTest extends TestCase
{
    use Helper;

    /**
     * @test
     */
    public function isFinal(): void
    {
        self::assertClassIsFinal(Config::class);
    }

    /**
     * @test
     */
    public function identityVerificationSecret(): void
    {
        $workspaceId = 'nwrk724c';
        $identityVerificationSecret = u(self::faker()->sha256)->truncate(40)->toString();

        $config = new Config(
            $workspaceId,
            $identityVerificationSecret,
        );

        self::assertSame(
            $config->identityVerificationSecret(),
            $config->identityVerificationSecret()->toString()
        );
    }
}
