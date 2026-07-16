<?php

namespace Hn7r\Bible\Test;

use Hn7r\Bible\BibleUtility;
use Hn7r\Bible\Enum\Book;
use Hn7r\Bible\Model\Reference;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class BibleUtilityTest extends TestCase
{
    #[DataProvider('genesisProvider')]
    public function testGenesis(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Genesis, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('exodusProvider')]
    public function testExodus(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Exodus, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('leviticusProvider')]
    public function testLeviticus(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Leviticus, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('numbersProvider')]
    public function testNumbers(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Numbers, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('deuteronomyProvider')]
    public function testDeuteronomy(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Deuteronomy, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('joshuaProvider')]
    public function testJoshua(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Joshua, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('judgesProvider')]
    public function testJudges(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Judges, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('ruthProvider')]
    public function testRuth(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Ruth, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('firstSamuelProvider')]
    public function testFirstSamuel(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::FirstSamuel, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('secondSamuelProvider')]
    public function testSecondSamuel(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::SecondSamuel, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('firstKingsProvider')]
    public function testFirstKings(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::FirstKings, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('secondKingsProvider')]
    public function testSecondKings(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::SecondKings, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('firstChroniclesProvider')]
    public function testFirstChronicles(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::FirstChronicles, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('secondChroniclesProvider')]
    public function testSecondChronicles(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::SecondChronicles, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('ezraProvider')]
    public function testEzra(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Ezra, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('nehemiahProvider')]
    public function testNehemiah(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Nehemiah, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('estherProvider')]
    public function testEsther(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Esther, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('jobProvider')]
    public function testJob(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Job, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('psalmsProvider')]
    public function testPsalms(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Psalms, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('proverbsProvider')]
    public function testProverbs(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Proverbs, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('ecclesiastesProvider')]
    public function testEcclesiastes(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Ecclesiastes, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('songOfSolomonProvider')]
    public function testSongOfSolomon(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::SongOfSolomon, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('isaiahProvider')]
    public function testIsaiah(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Isaiah, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('jeremiahProvider')]
    public function testJeremiah(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Jeremiah, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('lamentationsProvider')]
    public function testLamentations(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Lamentations, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('ezekielProvider')]
    public function testEzekiel(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Ezekiel, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('danielProvider')]
    public function testDaniel(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Daniel, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('hoseaProvider')]
    public function testHosea(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Hosea, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('joelProvider')]
    public function testJoel(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Joel, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('amosProvider')]
    public function testAmos(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Amos, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('obadiahProvider')]
    public function testObadiah(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Obadiah, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('jonahProvider')]
    public function testJonah(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Jonah, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('micahProvider')]
    public function testMicah(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Micah, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('nahumProvider')]
    public function testNahum(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Nahum, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('habakkukProvider')]
    public function testHabakkuk(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Habakkuk, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('zephaniahProvider')]
    public function testZephaniah(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Zephaniah, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('haggaiProvider')]
    public function testHaggai(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Haggai, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('zechariahProvider')]
    public function testZechariah(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Zechariah, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('malachiProvider')]
    public function testMalachi(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Malachi, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('matthewProvider')]
    public function testMatthew(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Matthew, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('markProvider')]
    public function testMark(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Mark, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('lukeProvider')]
    public function testLuke(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Luke, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('johnProvider')]
    public function testJohn(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::John, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('actsProvider')]
    public function testActs(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Acts, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('romansProvider')]
    public function testRomans(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Romans, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('firstCorinthiansProvider')]
    public function testFirstCorinthians(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::FirstCorinthians, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('secondCorinthiansProvider')]
    public function testSecondCorinthians(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::SecondCorinthians, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('galatiansProvider')]
    public function testGalatians(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Galatians, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('ephesiansProvider')]
    public function testEphesians(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Ephesians, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('philippiansProvider')]
    public function testPhilippians(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Philippians, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('colossiansProvider')]
    public function testColossians(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Colossians, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('firstThessaloniansProvider')]
    public function testFirstThessalonians(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::FirstThessalonians, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('secondThessaloniansProvider')]
    public function testSecondThessalonians(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::SecondThessalonians, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('firstTimothyProvider')]
    public function testFirstTimothy(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::FirstTimothy, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('secondTimothyProvider')]
    public function testSecondTimothy(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::SecondTimothy, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('titusProvider')]
    public function testTitus(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Titus, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('philemonProvider')]
    public function testPhilemon(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Philemon, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('hebrewsProvider')]
    public function testHebrews(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Hebrews, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('jamesProvider')]
    public function testJames(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::James, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('firstPeterProvider')]
    public function testFirstPeter(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::FirstPeter, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('secondPeterProvider')]
    public function testSecondPeter(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::SecondPeter, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('firstJohnProvider')]
    public function testFirstJohn(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::FirstJohn, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('secondJohnProvider')]
    public function testSecondJohn(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::SecondJohn, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('thirdJohnProvider')]
    public function testThirdJohn(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::ThirdJohn, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('judeProvider')]
    public function testJude(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Jude, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    #[DataProvider('revelationProvider')]
    public function testRevelation(string $query, ?int $expectedChapter, ?int $expectedVerse): void
    {
        $reference = BibleUtility::parseReference($query);

        if ($expectedChapter === null) {
            $this->assertNull($reference);
            return;
        }

        $this->assertInstanceOf(Reference::class, $reference);
        $this->assertSame(Book::Revelation, $reference->book);
        $this->assertSame($expectedChapter, $reference->chapter);
        $this->assertSame($expectedVerse, $reference->verse);
    }

    public static function genesisProvider(): iterable
    {
        yield 'genesis 1:1' => ['genesis 1:1', 1, 1];
        yield 'gen 1:1' => ['gen 1:1', 1, 1];
        yield 'ge 1:1' => ['ge 1:1', 1, 1];
        yield 'gn 1:1' => ['gn 1:1', 1, 1];
        yield 'last chapter/verse (50:26)' => ['genesis 50:26', 50, 26];
        yield 'chapter out of range (51)' => ['genesis 51:1', null, null];
        yield 'verse out of range (27 in chapter 50)' => ['genesis 50:27', null, null];
    }

    public static function exodusProvider(): iterable
    {
        yield 'exodus 1:1' => ['exodus 1:1', 1, 1];
        yield 'exod 1:1' => ['exod 1:1', 1, 1];
        yield 'exo 1:1' => ['exo 1:1', 1, 1];
        yield 'ex 1:1' => ['ex 1:1', 1, 1];
        yield 'last chapter/verse (40:38)' => ['exodus 40:38', 40, 38];
        yield 'chapter out of range (41)' => ['exodus 41:1', null, null];
        yield 'verse out of range (39 in chapter 40)' => ['exodus 40:39', null, null];
    }

    public static function leviticusProvider(): iterable
    {
        yield 'leviticus 1:1' => ['leviticus 1:1', 1, 1];
        yield 'lev 1:1' => ['lev 1:1', 1, 1];
        yield 'le 1:1' => ['le 1:1', 1, 1];
        yield 'lv 1:1' => ['lv 1:1', 1, 1];
        yield 'last chapter/verse (27:34)' => ['leviticus 27:34', 27, 34];
        yield 'chapter out of range (28)' => ['leviticus 28:1', null, null];
        yield 'verse out of range (35 in chapter 27)' => ['leviticus 27:35', null, null];
    }

    public static function numbersProvider(): iterable
    {
        yield 'numbers 1:1' => ['numbers 1:1', 1, 1];
        yield 'num 1:1' => ['num 1:1', 1, 1];
        yield 'nu 1:1' => ['nu 1:1', 1, 1];
        yield 'nb 1:1' => ['nb 1:1', 1, 1];
        yield 'last chapter/verse (36:13)' => ['numbers 36:13', 36, 13];
        yield 'chapter out of range (37)' => ['numbers 37:1', null, null];
        yield 'verse out of range (14 in chapter 36)' => ['numbers 36:14', null, null];
    }

    public static function deuteronomyProvider(): iterable
    {
        yield 'deuteronomy 1:1' => ['deuteronomy 1:1', 1, 1];
        yield 'deut 1:1' => ['deut 1:1', 1, 1];
        yield 'de 1:1' => ['de 1:1', 1, 1];
        yield 'dt 1:1' => ['dt 1:1', 1, 1];
        yield 'last chapter/verse (34:12)' => ['deuteronomy 34:12', 34, 12];
        yield 'chapter out of range (35)' => ['deuteronomy 35:1', null, null];
        yield 'verse out of range (13 in chapter 34)' => ['deuteronomy 34:13', null, null];
    }

    public static function joshuaProvider(): iterable
    {
        yield 'joshua 1:1' => ['joshua 1:1', 1, 1];
        yield 'josh 1:1' => ['josh 1:1', 1, 1];
        yield 'jos 1:1' => ['jos 1:1', 1, 1];
        yield 'jsh 1:1' => ['jsh 1:1', 1, 1];
        yield 'last chapter/verse (24:33)' => ['joshua 24:33', 24, 33];
        yield 'chapter out of range (25)' => ['joshua 25:1', null, null];
        yield 'verse out of range (34 in chapter 24)' => ['joshua 24:34', null, null];
    }

    public static function judgesProvider(): iterable
    {
        yield 'judges 1:1' => ['judges 1:1', 1, 1];
        yield 'judg 1:1' => ['judg 1:1', 1, 1];
        yield 'jdg 1:1' => ['jdg 1:1', 1, 1];
        yield 'jg 1:1' => ['jg 1:1', 1, 1];
        yield 'last chapter/verse (21:25)' => ['judges 21:25', 21, 25];
        yield 'chapter out of range (22)' => ['judges 22:1', null, null];
        yield 'verse out of range (26 in chapter 21)' => ['judges 21:26', null, null];
    }

    public static function ruthProvider(): iterable
    {
        yield 'ruth 1:1' => ['ruth 1:1', 1, 1];
        yield 'rth 1:1' => ['rth 1:1', 1, 1];
        yield 'ru 1:1' => ['ru 1:1', 1, 1];
        yield 'last chapter/verse (4:22)' => ['ruth 4:22', 4, 22];
        yield 'chapter out of range (5)' => ['ruth 5:1', null, null];
        yield 'verse out of range (23 in chapter 4)' => ['ruth 4:23', null, null];
    }

    public static function firstSamuelProvider(): iterable
    {
        yield '1samuel 1:1' => ['1samuel 1:1', 1, 1];
        yield '1sam 1:1' => ['1sam 1:1', 1, 1];
        yield '1sa 1:1' => ['1sa 1:1', 1, 1];
        yield '1s 1:1' => ['1s 1:1', 1, 1];
        yield 'last chapter/verse (31:13)' => ['1samuel 31:13', 31, 13];
        yield 'chapter out of range (32)' => ['1samuel 32:1', null, null];
        yield 'verse out of range (14 in chapter 31)' => ['1samuel 31:14', null, null];
    }

    public static function secondSamuelProvider(): iterable
    {
        yield '2samuel 1:1' => ['2samuel 1:1', 1, 1];
        yield '2sam 1:1' => ['2sam 1:1', 1, 1];
        yield '2sa 1:1' => ['2sa 1:1', 1, 1];
        yield '2s 1:1' => ['2s 1:1', 1, 1];
        yield 'last chapter/verse (24:25)' => ['2samuel 24:25', 24, 25];
        yield 'chapter out of range (25)' => ['2samuel 25:1', null, null];
        yield 'verse out of range (26 in chapter 24)' => ['2samuel 24:26', null, null];
    }

    public static function firstKingsProvider(): iterable
    {
        yield '1kings 1:1' => ['1kings 1:1', 1, 1];
        yield '1kgs 1:1' => ['1kgs 1:1', 1, 1];
        yield '1ki 1:1' => ['1ki 1:1', 1, 1];
        yield '1k 1:1' => ['1k 1:1', 1, 1];
        yield 'last chapter/verse (22:53)' => ['1kings 22:53', 22, 53];
        yield 'chapter out of range (23)' => ['1kings 23:1', null, null];
        yield 'verse out of range (54 in chapter 22)' => ['1kings 22:54', null, null];
    }

    public static function secondKingsProvider(): iterable
    {
        yield '2kings 1:1' => ['2kings 1:1', 1, 1];
        yield '2kgs 1:1' => ['2kgs 1:1', 1, 1];
        yield '2ki 1:1' => ['2ki 1:1', 1, 1];
        yield '2k 1:1' => ['2k 1:1', 1, 1];
        yield 'last chapter/verse (25:30)' => ['2kings 25:30', 25, 30];
        yield 'chapter out of range (26)' => ['2kings 26:1', null, null];
        yield 'verse out of range (31 in chapter 25)' => ['2kings 25:31', null, null];
    }

    public static function firstChroniclesProvider(): iterable
    {
        yield '1chronicles 1:1' => ['1chronicles 1:1', 1, 1];
        yield '1chron 1:1' => ['1chron 1:1', 1, 1];
        yield '1chr 1:1' => ['1chr 1:1', 1, 1];
        yield '1ch 1:1' => ['1ch 1:1', 1, 1];
        yield 'last chapter/verse (29:30)' => ['1chronicles 29:30', 29, 30];
        yield 'chapter out of range (30)' => ['1chronicles 30:1', null, null];
        yield 'verse out of range (31 in chapter 29)' => ['1chronicles 29:31', null, null];
    }

    public static function secondChroniclesProvider(): iterable
    {
        yield '2chronicles 1:1' => ['2chronicles 1:1', 1, 1];
        yield '2chron 1:1' => ['2chron 1:1', 1, 1];
        yield '2chr 1:1' => ['2chr 1:1', 1, 1];
        yield '2ch 1:1' => ['2ch 1:1', 1, 1];
        yield 'last chapter/verse (36:23)' => ['2chronicles 36:23', 36, 23];
        yield 'chapter out of range (37)' => ['2chronicles 37:1', null, null];
        yield 'verse out of range (24 in chapter 36)' => ['2chronicles 36:24', null, null];
    }

    public static function ezraProvider(): iterable
    {
        yield 'ezra 1:1' => ['ezra 1:1', 1, 1];
        yield 'ezr 1:1' => ['ezr 1:1', 1, 1];
        yield 'ez 1:1' => ['ez 1:1', 1, 1];
        yield 'last chapter/verse (10:44)' => ['ezra 10:44', 10, 44];
        yield 'chapter out of range (11)' => ['ezra 11:1', null, null];
        yield 'verse out of range (45 in chapter 10)' => ['ezra 10:45', null, null];
    }

    public static function nehemiahProvider(): iterable
    {
        yield 'nehemiah 1:1' => ['nehemiah 1:1', 1, 1];
        yield 'neh 1:1' => ['neh 1:1', 1, 1];
        yield 'ne 1:1' => ['ne 1:1', 1, 1];
        yield 'last chapter/verse (13:31)' => ['nehemiah 13:31', 13, 31];
        yield 'chapter out of range (14)' => ['nehemiah 14:1', null, null];
        yield 'verse out of range (32 in chapter 13)' => ['nehemiah 13:32', null, null];
    }

    public static function estherProvider(): iterable
    {
        yield 'esther 1:1' => ['esther 1:1', 1, 1];
        yield 'esth 1:1' => ['esth 1:1', 1, 1];
        yield 'est 1:1' => ['est 1:1', 1, 1];
        yield 'es 1:1' => ['es 1:1', 1, 1];
        yield 'last chapter/verse (10:3)' => ['esther 10:3', 10, 3];
        yield 'chapter out of range (11)' => ['esther 11:1', null, null];
        yield 'verse out of range (4 in chapter 10)' => ['esther 10:4', null, null];
    }

    public static function jobProvider(): iterable
    {
        yield 'job 1:1' => ['job 1:1', 1, 1];
        yield 'jb 1:1' => ['jb 1:1', 1, 1];
        yield 'last chapter/verse (42:17)' => ['job 42:17', 42, 17];
        yield 'chapter out of range (43)' => ['job 43:1', null, null];
        yield 'verse out of range (18 in chapter 42)' => ['job 42:18', null, null];
    }

    public static function psalmsProvider(): iterable
    {
        yield 'psalms 1:1' => ['psalms 1:1', 1, 1];
        yield 'psalm 1:1' => ['psalm 1:1', 1, 1];
        yield 'pslm 1:1' => ['pslm 1:1', 1, 1];
        yield 'ps 1:1' => ['ps 1:1', 1, 1];
        yield 'last chapter/verse (150:6)' => ['psalms 150:6', 150, 6];
        yield 'chapter out of range (151)' => ['psalms 151:1', null, null];
        yield 'verse out of range (7 in chapter 150)' => ['psalms 150:7', null, null];
    }

    public static function proverbsProvider(): iterable
    {
        yield 'proverbs 1:1' => ['proverbs 1:1', 1, 1];
        yield 'prov 1:1' => ['prov 1:1', 1, 1];
        yield 'prv 1:1' => ['prv 1:1', 1, 1];
        yield 'pr 1:1' => ['pr 1:1', 1, 1];
        yield 'last chapter/verse (31:31)' => ['proverbs 31:31', 31, 31];
        yield 'chapter out of range (32)' => ['proverbs 32:1', null, null];
        yield 'verse out of range (32 in chapter 31)' => ['proverbs 31:32', null, null];
    }

    public static function ecclesiastesProvider(): iterable
    {
        yield 'ecclesiastes 1:1' => ['ecclesiastes 1:1', 1, 1];
        yield 'eccles 1:1' => ['eccles 1:1', 1, 1];
        yield 'eccle 1:1' => ['eccle 1:1', 1, 1];
        yield 'ec 1:1' => ['ec 1:1', 1, 1];
        yield 'last chapter/verse (12:14)' => ['ecclesiastes 12:14', 12, 14];
        yield 'chapter out of range (13)' => ['ecclesiastes 13:1', null, null];
        yield 'verse out of range (15 in chapter 12)' => ['ecclesiastes 12:15', null, null];
    }

    public static function songOfSolomonProvider(): iterable
    {
        yield 'songofsolomon 1:1' => ['songofsolomon 1:1', 1, 1];
        yield 'song 1:1' => ['song 1:1', 1, 1];
        yield 'sos 1:1' => ['sos 1:1', 1, 1];
        yield 'so 1:1' => ['so 1:1', 1, 1];
        yield 'last chapter/verse (8:14)' => ['songofsolomon 8:14', 8, 14];
        yield 'chapter out of range (9)' => ['songofsolomon 9:1', null, null];
        yield 'verse out of range (15 in chapter 8)' => ['songofsolomon 8:15', null, null];
    }

    public static function isaiahProvider(): iterable
    {
        yield 'isaiah 1:1' => ['isaiah 1:1', 1, 1];
        yield 'isa 1:1' => ['isa 1:1', 1, 1];
        yield 'is 1:1' => ['is 1:1', 1, 1];
        yield 'last chapter/verse (66:24)' => ['isaiah 66:24', 66, 24];
        yield 'chapter out of range (67)' => ['isaiah 67:1', null, null];
        yield 'verse out of range (25 in chapter 66)' => ['isaiah 66:25', null, null];
    }

    public static function jeremiahProvider(): iterable
    {
        yield 'jeremiah 1:1' => ['jeremiah 1:1', 1, 1];
        yield 'jer 1:1' => ['jer 1:1', 1, 1];
        yield 'je 1:1' => ['je 1:1', 1, 1];
        yield 'jr 1:1' => ['jr 1:1', 1, 1];
        yield 'last chapter/verse (52:34)' => ['jeremiah 52:34', 52, 34];
        yield 'chapter out of range (53)' => ['jeremiah 53:1', null, null];
        yield 'verse out of range (35 in chapter 52)' => ['jeremiah 52:35', null, null];
    }

    public static function lamentationsProvider(): iterable
    {
        yield 'lamentations 1:1' => ['lamentations 1:1', 1, 1];
        yield 'lam 1:1' => ['lam 1:1', 1, 1];
        yield 'la 1:1' => ['la 1:1', 1, 1];
        yield 'last chapter/verse (5:22)' => ['lamentations 5:22', 5, 22];
        yield 'chapter out of range (6)' => ['lamentations 6:1', null, null];
        yield 'verse out of range (23 in chapter 5)' => ['lamentations 5:23', null, null];
    }

    public static function ezekielProvider(): iterable
    {
        yield 'ezekiel 1:1' => ['ezekiel 1:1', 1, 1];
        yield 'ezek 1:1' => ['ezek 1:1', 1, 1];
        yield 'eze 1:1' => ['eze 1:1', 1, 1];
        yield 'ezk 1:1' => ['ezk 1:1', 1, 1];
        yield 'last chapter/verse (48:35)' => ['ezekiel 48:35', 48, 35];
        yield 'chapter out of range (49)' => ['ezekiel 49:1', null, null];
        yield 'verse out of range (36 in chapter 48)' => ['ezekiel 48:36', null, null];
    }

    public static function danielProvider(): iterable
    {
        yield 'daniel 1:1' => ['daniel 1:1', 1, 1];
        yield 'dan 1:1' => ['dan 1:1', 1, 1];
        yield 'da 1:1' => ['da 1:1', 1, 1];
        yield 'dn 1:1' => ['dn 1:1', 1, 1];
        yield 'last chapter/verse (12:13)' => ['daniel 12:13', 12, 13];
        yield 'chapter out of range (13)' => ['daniel 13:1', null, null];
        yield 'verse out of range (14 in chapter 12)' => ['daniel 12:14', null, null];
    }

    public static function hoseaProvider(): iterable
    {
        yield 'hosea 1:1' => ['hosea 1:1', 1, 1];
        yield 'hos 1:1' => ['hos 1:1', 1, 1];
        yield 'ho 1:1' => ['ho 1:1', 1, 1];
        yield 'last chapter/verse (14:9)' => ['hosea 14:9', 14, 9];
        yield 'chapter out of range (15)' => ['hosea 15:1', null, null];
        yield 'verse out of range (10 in chapter 14)' => ['hosea 14:10', null, null];
    }

    public static function joelProvider(): iterable
    {
        yield 'joel 1:1' => ['joel 1:1', 1, 1];
        yield 'joe 1:1' => ['joe 1:1', 1, 1];
        yield 'jl 1:1' => ['jl 1:1', 1, 1];
        yield 'last chapter/verse (3:21)' => ['joel 3:21', 3, 21];
        yield 'chapter out of range (4)' => ['joel 4:1', null, null];
        yield 'verse out of range (22 in chapter 3)' => ['joel 3:22', null, null];
    }

    public static function amosProvider(): iterable
    {
        yield 'amos 1:1' => ['amos 1:1', 1, 1];
        yield 'am 1:1' => ['am 1:1', 1, 1];
        yield 'last chapter/verse (9:15)' => ['amos 9:15', 9, 15];
        yield 'chapter out of range (10)' => ['amos 10:1', null, null];
        yield 'verse out of range (16 in chapter 9)' => ['amos 9:16', null, null];
    }

    public static function obadiahProvider(): iterable
    {
        yield 'obadiah 1:1' => ['obadiah 1:1', 1, 1];
        yield 'obad 1:1' => ['obad 1:1', 1, 1];
        yield 'ob 1:1' => ['ob 1:1', 1, 1];
        yield 'last chapter/verse (1:21)' => ['obadiah 1:21', 1, 21];
        yield 'chapter out of range (2)' => ['obadiah 2:1', null, null];
        yield 'verse out of range (22 in chapter 1)' => ['obadiah 1:22', null, null];
    }

    public static function jonahProvider(): iterable
    {
        yield 'jonah 1:1' => ['jonah 1:1', 1, 1];
        yield 'jnh 1:1' => ['jnh 1:1', 1, 1];
        yield 'jon 1:1' => ['jon 1:1', 1, 1];
        yield 'last chapter/verse (4:11)' => ['jonah 4:11', 4, 11];
        yield 'chapter out of range (5)' => ['jonah 5:1', null, null];
        yield 'verse out of range (12 in chapter 4)' => ['jonah 4:12', null, null];
    }

    public static function micahProvider(): iterable
    {
        yield 'micah 1:1' => ['micah 1:1', 1, 1];
        yield 'mic 1:1' => ['mic 1:1', 1, 1];
        yield 'mc 1:1' => ['mc 1:1', 1, 1];
        yield 'last chapter/verse (7:20)' => ['micah 7:20', 7, 20];
        yield 'chapter out of range (8)' => ['micah 8:1', null, null];
        yield 'verse out of range (21 in chapter 7)' => ['micah 7:21', null, null];
    }

    public static function nahumProvider(): iterable
    {
        yield 'nahum 1:1' => ['nahum 1:1', 1, 1];
        yield 'nah 1:1' => ['nah 1:1', 1, 1];
        yield 'na 1:1' => ['na 1:1', 1, 1];
        yield 'last chapter/verse (3:19)' => ['nahum 3:19', 3, 19];
        yield 'chapter out of range (4)' => ['nahum 4:1', null, null];
        yield 'verse out of range (20 in chapter 3)' => ['nahum 3:20', null, null];
    }

    public static function habakkukProvider(): iterable
    {
        yield 'habakkuk 1:1' => ['habakkuk 1:1', 1, 1];
        yield 'hab 1:1' => ['hab 1:1', 1, 1];
        yield 'hb 1:1' => ['hb 1:1', 1, 1];
        yield 'last chapter/verse (3:19)' => ['habakkuk 3:19', 3, 19];
        yield 'chapter out of range (4)' => ['habakkuk 4:1', null, null];
        yield 'verse out of range (20 in chapter 3)' => ['habakkuk 3:20', null, null];
    }

    public static function zephaniahProvider(): iterable
    {
        yield 'zephaniah 1:1' => ['zephaniah 1:1', 1, 1];
        yield 'zeph 1:1' => ['zeph 1:1', 1, 1];
        yield 'zep 1:1' => ['zep 1:1', 1, 1];
        yield 'zp 1:1' => ['zp 1:1', 1, 1];
        yield 'last chapter/verse (3:20)' => ['zephaniah 3:20', 3, 20];
        yield 'chapter out of range (4)' => ['zephaniah 4:1', null, null];
        yield 'verse out of range (21 in chapter 3)' => ['zephaniah 3:21', null, null];
    }

    public static function haggaiProvider(): iterable
    {
        yield 'haggai 1:1' => ['haggai 1:1', 1, 1];
        yield 'hag 1:1' => ['hag 1:1', 1, 1];
        yield 'hg 1:1' => ['hg 1:1', 1, 1];
        yield 'last chapter/verse (2:23)' => ['haggai 2:23', 2, 23];
        yield 'chapter out of range (3)' => ['haggai 3:1', null, null];
        yield 'verse out of range (24 in chapter 2)' => ['haggai 2:24', null, null];
    }

    public static function zechariahProvider(): iterable
    {
        yield 'zechariah 1:1' => ['zechariah 1:1', 1, 1];
        yield 'zech 1:1' => ['zech 1:1', 1, 1];
        yield 'zec 1:1' => ['zec 1:1', 1, 1];
        yield 'zc 1:1' => ['zc 1:1', 1, 1];
        yield 'last chapter/verse (14:21)' => ['zechariah 14:21', 14, 21];
        yield 'chapter out of range (15)' => ['zechariah 15:1', null, null];
        yield 'verse out of range (22 in chapter 14)' => ['zechariah 14:22', null, null];
    }

    public static function malachiProvider(): iterable
    {
        yield 'malachi 1:1' => ['malachi 1:1', 1, 1];
        yield 'mal 1:1' => ['mal 1:1', 1, 1];
        yield 'ml 1:1' => ['ml 1:1', 1, 1];
        yield 'last chapter/verse (4:6)' => ['malachi 4:6', 4, 6];
        yield 'chapter out of range (5)' => ['malachi 5:1', null, null];
        yield 'verse out of range (7 in chapter 4)' => ['malachi 4:7', null, null];
    }

    public static function matthewProvider(): iterable
    {
        yield 'matthew 1:1' => ['matthew 1:1', 1, 1];
        yield 'matt 1:1' => ['matt 1:1', 1, 1];
        yield 'mat 1:1' => ['mat 1:1', 1, 1];
        yield 'mt 1:1' => ['mt 1:1', 1, 1];
        yield 'last chapter/verse (28:20)' => ['matthew 28:20', 28, 20];
        yield 'chapter out of range (29)' => ['matthew 29:1', null, null];
        yield 'verse out of range (21 in chapter 28)' => ['matthew 28:21', null, null];
    }

    public static function markProvider(): iterable
    {
        yield 'mark 1:1' => ['mark 1:1', 1, 1];
        yield 'mrk 1:1' => ['mrk 1:1', 1, 1];
        yield 'mar 1:1' => ['mar 1:1', 1, 1];
        yield 'mr 1:1' => ['mr 1:1', 1, 1];
        yield 'last chapter/verse (16:20)' => ['mark 16:20', 16, 20];
        yield 'chapter out of range (17)' => ['mark 17:1', null, null];
        yield 'verse out of range (21 in chapter 16)' => ['mark 16:21', null, null];
    }

    public static function lukeProvider(): iterable
    {
        yield 'luke 1:1' => ['luke 1:1', 1, 1];
        yield 'luk 1:1' => ['luk 1:1', 1, 1];
        yield 'lk 1:1' => ['lk 1:1', 1, 1];
        yield 'last chapter/verse (24:53)' => ['luke 24:53', 24, 53];
        yield 'chapter out of range (25)' => ['luke 25:1', null, null];
        yield 'verse out of range (54 in chapter 24)' => ['luke 24:54', null, null];
    }

    public static function johnProvider(): iterable
    {
        yield 'john 1:1' => ['john 1:1', 1, 1];
        yield 'joh 1:1' => ['joh 1:1', 1, 1];
        yield 'jhn 1:1' => ['jhn 1:1', 1, 1];
        yield 'jn 1:1' => ['jn 1:1', 1, 1];
        yield 'last chapter/verse (21:25)' => ['john 21:25', 21, 25];
        yield 'chapter out of range (22)' => ['john 22:1', null, null];
        yield 'verse out of range (26 in chapter 21)' => ['john 21:26', null, null];
    }

    public static function actsProvider(): iterable
    {
        yield 'acts 1:1' => ['acts 1:1', 1, 1];
        yield 'act 1:1' => ['act 1:1', 1, 1];
        yield 'ac 1:1' => ['ac 1:1', 1, 1];
        yield 'last chapter/verse (28:31)' => ['acts 28:31', 28, 31];
        yield 'chapter out of range (29)' => ['acts 29:1', null, null];
        yield 'verse out of range (32 in chapter 28)' => ['acts 28:32', null, null];
    }

    public static function romansProvider(): iterable
    {
        yield 'romans 1:1' => ['romans 1:1', 1, 1];
        yield 'rom 1:1' => ['rom 1:1', 1, 1];
        yield 'ro 1:1' => ['ro 1:1', 1, 1];
        yield 'rm 1:1' => ['rm 1:1', 1, 1];
        yield 'last chapter/verse (16:27)' => ['romans 16:27', 16, 27];
        yield 'chapter out of range (17)' => ['romans 17:1', null, null];
        yield 'verse out of range (28 in chapter 16)' => ['romans 16:28', null, null];
    }

    public static function firstCorinthiansProvider(): iterable
    {
        yield '1corinthians 1:1' => ['1corinthians 1:1', 1, 1];
        yield '1cor 1:1' => ['1cor 1:1', 1, 1];
        yield '1co 1:1' => ['1co 1:1', 1, 1];
        yield 'last chapter/verse (16:24)' => ['1corinthians 16:24', 16, 24];
        yield 'chapter out of range (17)' => ['1corinthians 17:1', null, null];
        yield 'verse out of range (25 in chapter 16)' => ['1corinthians 16:25', null, null];
    }

    public static function secondCorinthiansProvider(): iterable
    {
        yield '2corinthians 1:1' => ['2corinthians 1:1', 1, 1];
        yield '2cor 1:1' => ['2cor 1:1', 1, 1];
        yield '2co 1:1' => ['2co 1:1', 1, 1];
        yield 'last chapter/verse (13:14)' => ['2corinthians 13:14', 13, 14];
        yield 'chapter out of range (14)' => ['2corinthians 14:1', null, null];
        yield 'verse out of range (15 in chapter 13)' => ['2corinthians 13:15', null, null];
    }

    public static function galatiansProvider(): iterable
    {
        yield 'galatians 1:1' => ['galatians 1:1', 1, 1];
        yield 'gal 1:1' => ['gal 1:1', 1, 1];
        yield 'ga 1:1' => ['ga 1:1', 1, 1];
        yield 'last chapter/verse (6:18)' => ['galatians 6:18', 6, 18];
        yield 'chapter out of range (7)' => ['galatians 7:1', null, null];
        yield 'verse out of range (19 in chapter 6)' => ['galatians 6:19', null, null];
    }

    public static function ephesiansProvider(): iterable
    {
        yield 'ephesians 1:1' => ['ephesians 1:1', 1, 1];
        yield 'eph 1:1' => ['eph 1:1', 1, 1];
        yield 'ephes 1:1' => ['ephes 1:1', 1, 1];
        yield 'ep 1:1' => ['ep 1:1', 1, 1];
        yield 'last chapter/verse (6:24)' => ['ephesians 6:24', 6, 24];
        yield 'chapter out of range (7)' => ['ephesians 7:1', null, null];
        yield 'verse out of range (25 in chapter 6)' => ['ephesians 6:25', null, null];
    }

    public static function philippiansProvider(): iterable
    {
        yield 'philippians 1:1' => ['philippians 1:1', 1, 1];
        yield 'phil 1:1' => ['phil 1:1', 1, 1];
        yield 'php 1:1' => ['php 1:1', 1, 1];
        yield 'pp 1:1' => ['pp 1:1', 1, 1];
        yield 'last chapter/verse (4:23)' => ['philippians 4:23', 4, 23];
        yield 'chapter out of range (5)' => ['philippians 5:1', null, null];
        yield 'verse out of range (24 in chapter 4)' => ['philippians 4:24', null, null];
    }

    public static function colossiansProvider(): iterable
    {
        yield 'colossians 1:1' => ['colossians 1:1', 1, 1];
        yield 'col 1:1' => ['col 1:1', 1, 1];
        yield 'co 1:1' => ['co 1:1', 1, 1];
        yield 'last chapter/verse (4:18)' => ['colossians 4:18', 4, 18];
        yield 'chapter out of range (5)' => ['colossians 5:1', null, null];
        yield 'verse out of range (19 in chapter 4)' => ['colossians 4:19', null, null];
    }

    public static function firstThessaloniansProvider(): iterable
    {
        yield '1thessalonians 1:1' => ['1thessalonians 1:1', 1, 1];
        yield '1thess 1:1' => ['1thess 1:1', 1, 1];
        yield '1thes 1:1' => ['1thes 1:1', 1, 1];
        yield '1th 1:1' => ['1th 1:1', 1, 1];
        yield 'last chapter/verse (5:28)' => ['1thessalonians 5:28', 5, 28];
        yield 'chapter out of range (6)' => ['1thessalonians 6:1', null, null];
        yield 'verse out of range (29 in chapter 5)' => ['1thessalonians 5:29', null, null];
    }

    public static function secondThessaloniansProvider(): iterable
    {
        yield '2thessalonians 1:1' => ['2thessalonians 1:1', 1, 1];
        yield '2thess 1:1' => ['2thess 1:1', 1, 1];
        yield '2thes 1:1' => ['2thes 1:1', 1, 1];
        yield '2th 1:1' => ['2th 1:1', 1, 1];
        yield 'last chapter/verse (3:18)' => ['2thessalonians 3:18', 3, 18];
        yield 'chapter out of range (4)' => ['2thessalonians 4:1', null, null];
        yield 'verse out of range (19 in chapter 3)' => ['2thessalonians 3:19', null, null];
    }

    public static function firstTimothyProvider(): iterable
    {
        yield '1timothy 1:1' => ['1timothy 1:1', 1, 1];
        yield '1tim 1:1' => ['1tim 1:1', 1, 1];
        yield '1ti 1:1' => ['1ti 1:1', 1, 1];
        yield 'last chapter/verse (6:21)' => ['1timothy 6:21', 6, 21];
        yield 'chapter out of range (7)' => ['1timothy 7:1', null, null];
        yield 'verse out of range (22 in chapter 6)' => ['1timothy 6:22', null, null];
    }

    public static function secondTimothyProvider(): iterable
    {
        yield '2timothy 1:1' => ['2timothy 1:1', 1, 1];
        yield '2tim 1:1' => ['2tim 1:1', 1, 1];
        yield '2ti 1:1' => ['2ti 1:1', 1, 1];
        yield 'last chapter/verse (4:22)' => ['2timothy 4:22', 4, 22];
        yield 'chapter out of range (5)' => ['2timothy 5:1', null, null];
        yield 'verse out of range (23 in chapter 4)' => ['2timothy 4:23', null, null];
    }

    public static function titusProvider(): iterable
    {
        yield 'titus 1:1' => ['titus 1:1', 1, 1];
        yield 'tit 1:1' => ['tit 1:1', 1, 1];
        yield 'ti 1:1' => ['ti 1:1', 1, 1];
        yield 'last chapter/verse (3:15)' => ['titus 3:15', 3, 15];
        yield 'chapter out of range (4)' => ['titus 4:1', null, null];
        yield 'verse out of range (16 in chapter 3)' => ['titus 3:16', null, null];
    }

    public static function philemonProvider(): iterable
    {
        yield 'philemon 1:1' => ['philemon 1:1', 1, 1];
        yield 'philem 1:1' => ['philem 1:1', 1, 1];
        yield 'phm 1:1' => ['phm 1:1', 1, 1];
        yield 'last chapter/verse (1:25)' => ['philemon 1:25', 1, 25];
        yield 'chapter out of range (2)' => ['philemon 2:1', null, null];
        yield 'verse out of range (26 in chapter 1)' => ['philemon 1:26', null, null];
    }

    public static function hebrewsProvider(): iterable
    {
        yield 'hebrews 1:1' => ['hebrews 1:1', 1, 1];
        yield 'heb 1:1' => ['heb 1:1', 1, 1];
        yield 'last chapter/verse (13:25)' => ['hebrews 13:25', 13, 25];
        yield 'chapter out of range (14)' => ['hebrews 14:1', null, null];
        yield 'verse out of range (26 in chapter 13)' => ['hebrews 13:26', null, null];
    }

    public static function jamesProvider(): iterable
    {
        yield 'james 1:1' => ['james 1:1', 1, 1];
        yield 'jas 1:1' => ['jas 1:1', 1, 1];
        yield 'jm 1:1' => ['jm 1:1', 1, 1];
        yield 'last chapter/verse (5:20)' => ['james 5:20', 5, 20];
        yield 'chapter out of range (6)' => ['james 6:1', null, null];
        yield 'verse out of range (21 in chapter 5)' => ['james 5:21', null, null];
    }

    public static function firstPeterProvider(): iterable
    {
        yield '1peter 1:1' => ['1peter 1:1', 1, 1];
        yield '1pet 1:1' => ['1pet 1:1', 1, 1];
        yield '1pe 1:1' => ['1pe 1:1', 1, 1];
        yield '1p 1:1' => ['1p 1:1', 1, 1];
        yield 'last chapter/verse (5:14)' => ['1peter 5:14', 5, 14];
        yield 'chapter out of range (6)' => ['1peter 6:1', null, null];
        yield 'verse out of range (15 in chapter 5)' => ['1peter 5:15', null, null];
    }

    public static function secondPeterProvider(): iterable
    {
        yield '2peter 1:1' => ['2peter 1:1', 1, 1];
        yield '2pet 1:1' => ['2pet 1:1', 1, 1];
        yield '2pe 1:1' => ['2pe 1:1', 1, 1];
        yield '2p 1:1' => ['2p 1:1', 1, 1];
        yield 'last chapter/verse (3:18)' => ['2peter 3:18', 3, 18];
        yield 'chapter out of range (4)' => ['2peter 4:1', null, null];
        yield 'verse out of range (19 in chapter 3)' => ['2peter 3:19', null, null];
    }

    public static function firstJohnProvider(): iterable
    {
        yield '1john 1:1' => ['1john 1:1', 1, 1];
        yield '1joh 1:1' => ['1joh 1:1', 1, 1];
        yield '1jhn 1:1' => ['1jhn 1:1', 1, 1];
        yield '1jn 1:1' => ['1jn 1:1', 1, 1];
        yield 'last chapter/verse (5:21)' => ['1john 5:21', 5, 21];
        yield 'chapter out of range (6)' => ['1john 6:1', null, null];
        yield 'verse out of range (22 in chapter 5)' => ['1john 5:22', null, null];
    }

    public static function secondJohnProvider(): iterable
    {
        yield '2john 1:1' => ['2john 1:1', 1, 1];
        yield '2joh 1:1' => ['2joh 1:1', 1, 1];
        yield '2jhn 1:1' => ['2jhn 1:1', 1, 1];
        yield '2jn 1:1' => ['2jn 1:1', 1, 1];
        yield 'last chapter/verse (1:14)' => ['2john 1:14', 1, 14];
        yield 'chapter out of range (2)' => ['2john 2:1', null, null];
        yield 'verse out of range (15 in chapter 1)' => ['2john 1:15', null, null];
    }

    public static function thirdJohnProvider(): iterable
    {
        yield '3john 1:1' => ['3john 1:1', 1, 1];
        yield '3joh 1:1' => ['3joh 1:1', 1, 1];
        yield '3jhn 1:1' => ['3jhn 1:1', 1, 1];
        yield '3jn 1:1' => ['3jn 1:1', 1, 1];
        yield 'last chapter/verse (1:14)' => ['3john 1:14', 1, 14];
        yield 'chapter out of range (2)' => ['3john 2:1', null, null];
        yield 'verse out of range (15 in chapter 1)' => ['3john 1:15', null, null];
    }

    public static function judeProvider(): iterable
    {
        yield 'jude 1:1' => ['jude 1:1', 1, 1];
        yield 'jud 1:1' => ['jud 1:1', 1, 1];
        yield 'jd 1:1' => ['jd 1:1', 1, 1];
        yield 'last chapter/verse (1:25)' => ['jude 1:25', 1, 25];
        yield 'chapter out of range (2)' => ['jude 2:1', null, null];
        yield 'verse out of range (26 in chapter 1)' => ['jude 1:26', null, null];
    }

    public static function revelationProvider(): iterable
    {
        yield 'revelation 1:1' => ['revelation 1:1', 1, 1];
        yield 'rev 1:1' => ['rev 1:1', 1, 1];
        yield 're 1:1' => ['re 1:1', 1, 1];
        yield 'rv 1:1' => ['rv 1:1', 1, 1];
        yield 'last chapter/verse (22:21)' => ['revelation 22:21', 22, 21];
        yield 'chapter out of range (23)' => ['revelation 23:1', null, null];
        yield 'verse out of range (22 in chapter 22)' => ['revelation 22:22', null, null];
    }
}
