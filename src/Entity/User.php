<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sulu\Bundle\SecurityBundle\Entity\User as SuluUser;

#[ORM\Entity()]
#[ORM\Table(name: 'se_users')]
class User extends SuluUser
{
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $myProperty = null;

    public function getMyProperty(): ?string
    {
        return $this->myProperty;
    }

    public function setMyProperty(?string $myProperty): static
    {
        $this->myProperty = $myProperty;

        return $this;
    }
}
