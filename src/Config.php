<?php

declare(strict_types=1);

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
