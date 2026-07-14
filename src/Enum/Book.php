<?php

namespace Hn7r\Bible\Enum;

use Hn7r\Bible\Constant\Verse;

enum Book: int
{
    case Genesis = 1;
    case Exodus = 2;
    case Leviticus = 3;
    case Numbers = 4;
    case Deuteronomy = 5;
    case Joshua = 6;
    case Judges = 7;
    case Ruth = 8;
    case FirstSamuel = 9;
    case SecondSamuel = 10;
    case FirstKings = 11;
    case SecondKings = 12;
    case FirstChronicles = 13;
    case SecondChronicles = 14;
    case Ezra = 15;
    case Nehemiah = 16;
    case Esther = 17;
    case Job = 18;
    case Psalms = 19;
    case Proverbs = 20;
    case Ecclesiastes = 21;
    case SongOfSolomon = 22;
    case Isaiah = 23;
    case Jeremiah = 24;
    case Lamentations = 25;
    case Ezekiel = 26;
    case Daniel = 27;
    case Hosea = 28;
    case Joel = 29;
    case Amos = 30;
    case Obadiah = 31;
    case Jonah = 32;
    case Micah = 33;
    case Nahum = 34;
    case Habakkuk = 35;
    case Zephaniah = 36;
    case Haggai = 37;
    case Zechariah = 38;
    case Malachi = 39;
    case Matthew = 40;
    case Mark = 41;
    case Luke = 42;
    case John = 43;
    case Acts = 44;
    case Romans = 45;
    case FirstCorinthians = 46;
    case SecondCorinthians = 47;
    case Galatians = 48;
    case Ephesians = 49;
    case Philippians = 50;
    case Colossians = 51;
    case FirstThessalonians = 52;
    case SecondThessalonians = 53;
    case FirstTimothy = 54;
    case SecondTimothy = 55;
    case Titus = 56;
    case Philemon = 57;
    case Hebrews = 58;
    case James = 59;
    case FirstPeter = 60;
    case SecondPeter = 61;
    case FirstJohn = 62;
    case SecondJohn = 63;
    case ThirdJohn = 64;
    case Jude = 65;
    case Revelation = 66;

    public function chapterCount(): int
    {
        return match ($this) {
            self::Genesis => 50,
            self::Exodus => 40,
            self::Leviticus => 27,
            self::Numbers => 36,
            self::Deuteronomy => 34,
            self::Joshua => 24,
            self::Judges => 21,
            self::Ruth => 4,
            self::FirstSamuel => 31,
            self::SecondSamuel => 24,
            self::FirstKings => 22,
            self::SecondKings => 25,
            self::FirstChronicles => 29,
            self::SecondChronicles => 36,
            self::Ezra => 10,
            self::Nehemiah => 13,
            self::Esther => 10,
            self::Job => 42,
            self::Psalms => 150,
            self::Proverbs => 31,
            self::Ecclesiastes => 12,
            self::SongOfSolomon => 8,
            self::Isaiah => 66,
            self::Jeremiah => 52,
            self::Lamentations => 5,
            self::Ezekiel => 48,
            self::Daniel => 12,
            self::Hosea => 14,
            self::Joel => 3,
            self::Amos => 9,
            self::Obadiah => 1,
            self::Jonah => 4,
            self::Micah => 7,
            self::Nahum => 3,
            self::Habakkuk => 3,
            self::Zephaniah => 3,
            self::Haggai => 2,
            self::Zechariah => 14,
            self::Malachi => 4,
            self::Matthew => 28,
            self::Mark => 16,
            self::Luke => 24,
            self::John => 21,
            self::Acts => 28,
            self::Romans => 16,
            self::FirstCorinthians => 16,
            self::SecondCorinthians => 13,
            self::Galatians => 6,
            self::Ephesians => 6,
            self::Philippians => 4,
            self::Colossians => 4,
            self::FirstThessalonians => 5,
            self::SecondThessalonians => 3,
            self::FirstTimothy => 6,
            self::SecondTimothy => 4,
            self::Titus => 3,
            self::Philemon => 1,
            self::Hebrews => 13,
            self::James => 5,
            self::FirstPeter => 5,
            self::SecondPeter => 3,
            self::FirstJohn => 5,
            self::SecondJohn => 1,
            self::ThirdJohn => 1,
            self::Jude => 1,
            self::Revelation => 22,
        };
    }

    public function verseCount(int $chapter): ?int
    {
        return Verse::VERSES_PER_CHAPTER[$this->value][$chapter] ?? null;
    }
}