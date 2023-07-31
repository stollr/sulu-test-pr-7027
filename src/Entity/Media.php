<?php

declare(strict_types=1);

namespace App\Entity;

use Sulu\Bundle\MediaBundle\Entity\Media as SuluMedia;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity()]
#[ORM\Table(name: 'me_media')]
class Media extends SuluMedia
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
