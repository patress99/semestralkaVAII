<?php
declare(strict_types=1);

namespace App\Models;

use App\Core\Model;

class Article extends Model
{
    protected  $id;
    protected ?string $title;
    protected ?string $text;
    protected ?string $filename;

    /**
     * Article constructor.
     * @param string $title
     * @param string $text
     * @param string $filename
     */
    public function __construct(?string $title = null, ?string $text = null, ?string $filename = null) {
        $this->title = $title;
        $this->filename = $filename;
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(?string $text): void
    {
        $this->text = $text;
    }


    static public function setDbColumns()
    {
        return ['id', 'title', 'text', 'filename'];
    }

    static public function setTableName()
    {
        return 'articles';
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }

    /**
     * @param string|null $filename
     */
    public function setFilename(?string $filename): void
    {
        $this->filename = $filename;
    }
}