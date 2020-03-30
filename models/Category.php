<?php

class Category {
    private $id;
    private $title;
    private $content;
    private $cover;
    private $createdAt;

    public function __construct(
        $title = '',
        $content = '',
        $cover = '',
        $createdAt = null
    ) {
        $this->title = $title;
        $this->content = $content;
        $this->cover = $cover;
        

        if (is_null($createdAt)) {
            $this->createdAt = new DateTime();
        } else {
            $this->createdAt = $createdAt;
        }
    }

    /**
     * Get the value of id
     */ 
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle(string $title): Article
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of content
     */ 
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent(string $content): Category
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of cover
     */ 
    public function getCover(): string
    {
        return $this->cover;
    }

    /**
     * Set the value of cover
     *
     * @return  self
     */ 
    public function setCover(string $cover): Category
    {
        if (!filter_var($cover, FILTER_VALIDATE_URL)) {
            throw new RuntimeException('Property Category#cover must be a valid url ("' . $cover . '" given).');
        }

        $this->cover = $cover;

        return $this;
    }

    

    /**
     * Get the value of createdAt
     */ 
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * Set the value of createdAt
     *
     * @return  self
     */ 
    public function setCreatedAt(DateTime $createdAt): Category
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
