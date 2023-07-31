<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\AccountRepository;
use Doctrine\ORM\Mapping as ORM;
use Sulu\Bundle\ContactBundle\Entity\Account as SuluAccount;

#[ORM\Entity()]
#[ORM\Table(name: 'co_accounts')]
class Account extends SuluAccount
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
