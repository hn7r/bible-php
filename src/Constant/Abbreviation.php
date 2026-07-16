<?php

namespace Hn7r\Bible\Constant;

use Hn7r\Bible\Enum\Book;

class Abbreviation
{
    public const array NORMALIZED_ABBREVIATIONS = [
        'genesis' => Book::Genesis,
        'gen' => Book::Genesis,
        'ge' => Book::Genesis,
        'gn' => Book::Genesis,

        'exodus' => Book::Exodus,
        'exod' => Book::Exodus,
        'exo' => Book::Exodus,
        'ex' => Book::Exodus,

        'leviticus' => Book::Leviticus,
        'lev' => Book::Leviticus,
        'le' => Book::Leviticus,
        'lv' => Book::Leviticus,

        'numbers' => Book::Numbers,
        'num' => Book::Numbers,
        'nu' => Book::Numbers,
        'nb' => Book::Numbers,

        'deuteronomy' => Book::Deuteronomy,
        'deut' => Book::Deuteronomy,
        'de' => Book::Deuteronomy,
        'dt' => Book::Deuteronomy,

        'joshua' => Book::Joshua,
        'josh' => Book::Joshua,
        'jos' => Book::Joshua,
        'jsh' => Book::Joshua,

        'judges' => Book::Judges,
        'judg' => Book::Judges,
        'jdg' => Book::Judges,
        'jg' => Book::Judges,

        'ruth' => Book::Ruth,
        'rth' => Book::Ruth,
        'ru' => Book::Ruth,

        '1samuel' => Book::FirstSamuel,
        '1sam' => Book::FirstSamuel,
        '1sa' => Book::FirstSamuel,
        '1s' => Book::FirstSamuel,

        '2samuel' => Book::SecondSamuel,
        '2sam' => Book::SecondSamuel,
        '2sa' => Book::SecondSamuel,
        '2s' => Book::SecondSamuel,

        '1kings' => Book::FirstKings,
        '1kgs' => Book::FirstKings,
        '1ki' => Book::FirstKings,
        '1k' => Book::FirstKings,

        '2kings' => Book::SecondKings,
        '2kgs' => Book::SecondKings,
        '2ki' => Book::SecondKings,
        '2k' => Book::SecondKings,

        '1chronicles' => Book::FirstChronicles,
        '1chron' => Book::FirstChronicles,
        '1chr' => Book::FirstChronicles,
        '1ch' => Book::FirstChronicles,

        '2chronicles' => Book::SecondChronicles,
        '2chron' => Book::SecondChronicles,
        '2chr' => Book::SecondChronicles,
        '2ch' => Book::SecondChronicles,

        'ezra' => Book::Ezra,
        'ezr' => Book::Ezra,
        'ez' => Book::Ezra,

        'nehemiah' => Book::Nehemiah,
        'neh' => Book::Nehemiah,
        'ne' => Book::Nehemiah,

        'esther' => Book::Esther,
        'esth' => Book::Esther,
        'est' => Book::Esther,
        'es' => Book::Esther,

        'job' => Book::Job,
        'jb' => Book::Job,

        'psalms' => Book::Psalms,
        'psalm' => Book::Psalms,
        'pslm' => Book::Psalms,
        'ps' => Book::Psalms,

        'proverbs' => Book::Proverbs,
        'prov' => Book::Proverbs,
        'prv' => Book::Proverbs,
        'pr' => Book::Proverbs,

        'ecclesiastes' => Book::Ecclesiastes,
        'eccles' => Book::Ecclesiastes,
        'eccle' => Book::Ecclesiastes,
        'ec' => Book::Ecclesiastes,

        'songofsolomon' => Book::SongOfSolomon,
        'song' => Book::SongOfSolomon,
        'sos' => Book::SongOfSolomon,
        'so' => Book::SongOfSolomon,

        'isaiah' => Book::Isaiah,
        'isa' => Book::Isaiah,
        'is' => Book::Isaiah,

        'jeremiah' => Book::Jeremiah,
        'jer' => Book::Jeremiah,
        'je' => Book::Jeremiah,
        'jr' => Book::Jeremiah,

        'lamentations' => Book::Lamentations,
        'lam' => Book::Lamentations,
        'la' => Book::Lamentations,

        'ezekiel' => Book::Ezekiel,
        'ezek' => Book::Ezekiel,
        'eze' => Book::Ezekiel,
        'ezk' => Book::Ezekiel,

        'daniel' => Book::Daniel,
        'dan' => Book::Daniel,
        'da' => Book::Daniel,
        'dn' => Book::Daniel,

        'hosea' => Book::Hosea,
        'hos' => Book::Hosea,
        'ho' => Book::Hosea,

        'joel' => Book::Joel,
        'joe' => Book::Joel,
        'jl' => Book::Joel,

        'amos' => Book::Amos,
        'am' => Book::Amos,

        'obadiah' => Book::Obadiah,
        'obad' => Book::Obadiah,
        'ob' => Book::Obadiah,

        'jonah' => Book::Jonah,
        'jnh' => Book::Jonah,
        'jon' => Book::Jonah,

        'micah' => Book::Micah,
        'mic' => Book::Micah,
        'mc' => Book::Micah,

        'nahum' => Book::Nahum,
        'nah' => Book::Nahum,
        'na' => Book::Nahum,

        'habakkuk' => Book::Habakkuk,
        'hab' => Book::Habakkuk,
        'hb' => Book::Habakkuk,

        'zephaniah' => Book::Zephaniah,
        'zeph' => Book::Zephaniah,
        'zep' => Book::Zephaniah,
        'zp' => Book::Zephaniah,

        'haggai' => Book::Haggai,
        'hag' => Book::Haggai,
        'hg' => Book::Haggai,

        'zechariah' => Book::Zechariah,
        'zech' => Book::Zechariah,
        'zec' => Book::Zechariah,
        'zc' => Book::Zechariah,

        'malachi' => Book::Malachi,
        'mal' => Book::Malachi,
        'ml' => Book::Malachi,

        'matthew' => Book::Matthew,
        'matt' => Book::Matthew,
        'mat' => Book::Matthew,
        'mt' => Book::Matthew,

        'mark' => Book::Mark,
        'mrk' => Book::Mark,
        'mar' => Book::Mark,
        'mr' => Book::Mark,

        'luke' => Book::Luke,
        'luk' => Book::Luke,
        'lk' => Book::Luke,

        'john' => Book::John,
        'joh' => Book::John,
        'jhn' => Book::John,
        'jn' => Book::John,

        'acts' => Book::Acts,
        'act' => Book::Acts,
        'ac' => Book::Acts,

        'romans' => Book::Romans,
        'rom' => Book::Romans,
        'ro' => Book::Romans,
        'rm' => Book::Romans,

        '1corinthians' => Book::FirstCorinthians,
        '1cor' => Book::FirstCorinthians,
        '1co' => Book::FirstCorinthians,

        '2corinthians' => Book::SecondCorinthians,
        '2cor' => Book::SecondCorinthians,
        '2co' => Book::SecondCorinthians,

        'galatians' => Book::Galatians,
        'gal' => Book::Galatians,
        'ga' => Book::Galatians,

        'ephesians' => Book::Ephesians,
        'eph' => Book::Ephesians,
        'ephes' => Book::Ephesians,
        'ep' => Book::Ephesians,

        'philippians' => Book::Philippians,
        'phil' => Book::Philippians,
        'php' => Book::Philippians,
        'pp' => Book::Philippians,

        'colossians' => Book::Colossians,
        'col' => Book::Colossians,
        'co' => Book::Colossians,

        '1thessalonians' => Book::FirstThessalonians,
        '1thess' => Book::FirstThessalonians,
        '1thes' => Book::FirstThessalonians,
        '1th' => Book::FirstThessalonians,

        '2thessalonians' => Book::SecondThessalonians,
        '2thess' => Book::SecondThessalonians,
        '2thes' => Book::SecondThessalonians,
        '2th' => Book::SecondThessalonians,

        '1timothy' => Book::FirstTimothy,
        '1tim' => Book::FirstTimothy,
        '1ti' => Book::FirstTimothy,

        '2timothy' => Book::SecondTimothy,
        '2tim' => Book::SecondTimothy,
        '2ti' => Book::SecondTimothy,

        'titus' => Book::Titus,
        'tit' => Book::Titus,
        'ti' => Book::Titus,

        'philemon' => Book::Philemon,
        'philem' => Book::Philemon,
        'phm' => Book::Philemon,

        'hebrews' => Book::Hebrews,
        'heb' => Book::Hebrews,

        'james' => Book::James,
        'jas' => Book::James,
        'jm' => Book::James,

        '1peter' => Book::FirstPeter,
        '1pet' => Book::FirstPeter,
        '1pe' => Book::FirstPeter,
        '1p' => Book::FirstPeter,

        '2peter' => Book::SecondPeter,
        '2pet' => Book::SecondPeter,
        '2pe' => Book::SecondPeter,
        '2p' => Book::SecondPeter,

        '1john' => Book::FirstJohn,
        '1joh' => Book::FirstJohn,
        '1jhn' => Book::FirstJohn,
        '1jn' => Book::FirstJohn,

        '2john' => Book::SecondJohn,
        '2joh' => Book::SecondJohn,
        '2jhn' => Book::SecondJohn,
        '2jn' => Book::SecondJohn,

        '3john' => Book::ThirdJohn,
        '3joh' => Book::ThirdJohn,
        '3jhn' => Book::ThirdJohn,
        '3jn' => Book::ThirdJohn,

        'jude' => Book::Jude,
        'jud' => Book::Jude,
        'jd' => Book::Jude,

        'revelation' => Book::Revelation,
        'rev' => Book::Revelation,
        're' => Book::Revelation,
        'rv' => Book::Revelation,
    ];
}
