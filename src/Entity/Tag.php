<?php

declare(strict_types=1);

namespace App\Entity;

use Sulu\Bundle\TagBundle\Entity\Tag as SuluTag;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity()]
#[ORM\Table(name: 'ta_tags')]
class Tag extends SuluTag
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
