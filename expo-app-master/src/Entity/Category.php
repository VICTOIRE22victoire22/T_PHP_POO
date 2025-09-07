<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 80)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    /**
     * @var Collection<int, Expo>
     */
    #[ORM\OneToMany(targetEntity: Expo::class, mappedBy: 'category', orphanRemoval: true)]
    private Collection $expos;

    public function __construct()
    {
        $this->expos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return Collection<int, Expo>
     */
    public function getExpos(): Collection
    {
        return $this->expos;
    }

    public function addExpo(Expo $expo): static
    {
        if (!$this->expos->contains($expo)) {
            $this->expos->add($expo);
            $expo->setCategory($this);
        }

        return $this;
    }

    public function removeExpo(Expo $expo): static
    {
        if ($this->expos->removeElement($expo)) {
            // set the owning side to null (unless already changed)
            if ($expo->getCategory() === $this) {
                $expo->setCategory(null);
            }
        }

        return $this;
    }
}
