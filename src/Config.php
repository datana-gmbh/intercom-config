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

namespace Datana\Intercom\Config;

use Datana\Intercom\Value;

final class Config
{
    private Value\Workspace\AppId $appId;
    private Value\Security\IdentityVerificationSecret $identityVerificationSecret;

    public function __construct(
        string $appId,
        string $intercomIdentityVerificationSecret
    ) {
        $this->appId = Value\Workspace\AppId::fromString($appId);
        $this->identityVerificationSecret = Value\Security\IdentityVerificationSecret::fromString($intercomIdentityVerificationSecret);
    }

    public function appId(): Value\Workspace\AppId
    {
        return $this->appId;
    }

    public function identityVerificationSecret(): Value\Security\IdentityVerificationSecret
    {
        return $this->identityVerificationSecret;
    }
}
