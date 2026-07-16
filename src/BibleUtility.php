<?php

namespace Hn7r\Bible;

use Hn7r\Bible\Constant\Abbreviation;
use Hn7r\Bible\Constant\Verse;
use Hn7r\Bible\Enum\Book;
use Hn7r\Bible\Model\Reference;
use Throwable;

class BibleUtility
{
    private const array INVALID_FIRST_CHARACTERS = ['b', 'f', 'k', 'q', 'u', 'v', 'w', 'x', 'y', '0', '4', '5', '6', '7', '8', '9'];

    public static function isVerseIdSyntacticallyValid(string $id): bool
    {
        return preg_match(Verse::VERSE_ID_REGEX, $id) === 1;
    }

    /**
     * Determine if the query is a string or a verse id
     * If verse id
     */
    public static function parseReference(string $query): ?Reference
    {
        try {
            if (self::isVerseIdSyntacticallyValid($query)) {
                return Reference::fromVerseId($query);
            }

            if (!str_contains($query, ':')) {
                return null;
            }

            $normalized = self::normalizeQuery($query);
            $firstCharacter = $normalized[0];

            if (in_array($firstCharacter, self::INVALID_FIRST_CHARACTERS, true)) {
                return null;
            }

            if ($firstCharacter === '1') {
                $normalized = substr_replace($normalized, 'first', 0, 1);
            } elseif ($firstCharacter === '2') {
                $normalized = substr_replace($normalized, 'second', 0, 1);
            } elseif ($firstCharacter === '3') {
                $normalized = substr_replace($normalized, 'third', 0, 1);
            }

            $firstDigitPosition = strcspn($normalized, '0123456789');
            $colonPosition = strpos($normalized, ':');

            $b = substr($normalized, 0, $firstDigitPosition);
            $c = substr($normalized, $firstDigitPosition, $colonPosition - $firstDigitPosition);
            $v = substr($normalized, $colonPosition + 1);

            $book = Abbreviation::NORMALIZED_ABBREVIATIONS[$b] ?? null;
            if (!$book instanceof Book) {
                return null;
            }

            if (filter_var($c, FILTER_VALIDATE_INT) === false) {
                return null;
            }

            if (filter_var($v, FILTER_VALIDATE_INT) === false) {
                return null;
            }

            return new Reference($book, (int)$c, (int)$v);
        } catch (Throwable) {
            return null;
        }
    }

    private static function normalizeQuery(string $query): string
    {
        return preg_replace('/[^a-z0-9:]/', '', trim(strtolower($query)));
    }
}