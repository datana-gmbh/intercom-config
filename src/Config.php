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
    private Value\Common\WorkspaceId $workspaceId;
    private Value\Security\IdentityVerificationSecret $identityVerificationSecret;

    public function __construct(
        string $workspaceId,
        string $intercomIdentityVerificationSecret
    ) {
        $this->workspaceId = Value\Common\WorkspaceId::fromString($workspaceId);
        $this->identityVerificationSecret = Value\Security\IdentityVerificationSecret::fromString($intercomIdentityVerificationSecret);
    }

    public function workspaceId(): Value\Common\WorkspaceId
    {
        return $this->workspaceId;
    }

    public function identityVerificationSecret(): Value\Security\IdentityVerificationSecret
    {
        return $this->identityVerificationSecret;
    }
}
