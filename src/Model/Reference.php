<?php

namespace Hn7r\Bible\Model;

use Hn7r\Bible\Enum\Book;
use Hn7r\Bible\Exception\InvalidReferenceException;

readonly class Reference
{
    /**
     * @throws InvalidReferenceException
     */
    public function __construct(
        public Book $book,
        public int $chapter,
        public int $verse,
    ) {
        if ($chapter < 1 || $chapter > $this->book->chapterCount()) {
            throw new InvalidReferenceException(
                "Invalid chapter number: $chapter for book: {$this->book->name}"
            );
        }

        if ($this->verse < 1 || $this->verse > $this->book->verseCount($this->chapter)) {
            throw new InvalidReferenceException(
                "Invalid verse number: $this->verse for book: {$this->book->name} chapter: $chapter"
            );
        }
    }

    public function toVerseId(): string
    {
        return sprintf("%02d%03d%03d", $this->book->value, $this->chapter, $this->verse);
    }

    /**
     * @throws InvalidReferenceException
     */
    public static function fromVerseId(string $id): self
    {
        if (!preg_match('/^[0-6]{2}[01]\d{2}[01]\d{2}$/', $id)) {
            throw new InvalidReferenceException("Invalid verse ID: $id");
        }

        $b = (int)substr($id, 0, 2);
        $c = (int)substr($id, 2, 3);
        $v = (int)substr($id, 5, 3);

        $book = Book::tryFrom($b);
        if (!$book instanceof Book) {
            throw new InvalidReferenceException("Book out of range: $b");
        }

        return new self($book, $c, $v);
    }
}