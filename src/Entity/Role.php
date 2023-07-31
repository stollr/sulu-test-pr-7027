<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Sulu\Bundle\SecurityBundle\Entity\Permission;
use Sulu\Bundle\SecurityBundle\Entity\Role as SuluRole;
use Sulu\Bundle\SecurityBundle\Entity\UserRole;

#[ORM\Entity()]
#[ORM\Table(name: 'se_roles')]
class Role extends SuluRole
{
    private $permissions;
    private $userRoles;
    private $settings;
    private $groups;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $myProperty = null;

    public function getMyProperty(): ?string
    {
        return $this->myProperty;
    }

    public function setMyProperty(string $myProperty): static
    {
        $this->myProperty = $myProperty;

        return $this;
    }
}
