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

        'firstsamuel' => Book::FirstSamuel,
        'firstsam' => Book::FirstSamuel,
        'firstsa' => Book::FirstSamuel,
        'firsts' => Book::FirstSamuel,

        'secondsamuel' => Book::SecondSamuel,
        'secondsam' => Book::SecondSamuel,
        'secondsa' => Book::SecondSamuel,
        'seconds' => Book::SecondSamuel,

        'firstkings' => Book::FirstKings,
        'firstkgs' => Book::FirstKings,
        'firstki' => Book::FirstKings,
        'firstk' => Book::FirstKings,

        'secondkings' => Book::SecondKings,
        'secondkgs' => Book::SecondKings,
        'secondki' => Book::SecondKings,
        'secondk' => Book::SecondKings,

        'firstchronicles' => Book::FirstChronicles,
        'firstchron' => Book::FirstChronicles,
        'firstchr' => Book::FirstChronicles,
        'firstch' => Book::FirstChronicles,

        'secondchronicles' => Book::SecondChronicles,
        'secondchron' => Book::SecondChronicles,
        'secondchr' => Book::SecondChronicles,
        'secondch' => Book::SecondChronicles,

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

        'firstcorinthians' => Book::FirstCorinthians,
        'firstcor' => Book::FirstCorinthians,
        'firstco' => Book::FirstCorinthians,

        'secondcorinthians' => Book::SecondCorinthians,
        'secondcor' => Book::SecondCorinthians,
        'secondco' => Book::SecondCorinthians,

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

        'firstthessalonians' => Book::FirstThessalonians,
        'firstthess' => Book::FirstThessalonians,
        'firstthes' => Book::FirstThessalonians,
        'firstth' => Book::FirstThessalonians,

        'secondthessalonians' => Book::SecondThessalonians,
        'secondthess' => Book::SecondThessalonians,
        'secondthes' => Book::SecondThessalonians,
        'secondth' => Book::SecondThessalonians,

        'firsttimothy' => Book::FirstTimothy,
        'firsttim' => Book::FirstTimothy,
        'firstti' => Book::FirstTimothy,

        'secondtimothy' => Book::SecondTimothy,
        'secondtim' => Book::SecondTimothy,
        'secondti' => Book::SecondTimothy,

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

        'firstpeter' => Book::FirstPeter,
        'firstpet' => Book::FirstPeter,
        'firstpe' => Book::FirstPeter,
        'firstp' => Book::FirstPeter,

        'secondpeter' => Book::SecondPeter,
        'secondpet' => Book::SecondPeter,
        'secondpe' => Book::SecondPeter,
        'secondp' => Book::SecondPeter,

        'firstjohn' => Book::FirstJohn,
        'firstjoh' => Book::FirstJohn,
        'firstjhn' => Book::FirstJohn,
        'firstjn' => Book::FirstJohn,

        'secondjohn' => Book::SecondJohn,
        'secondjoh' => Book::SecondJohn,
        'secondjhn' => Book::SecondJohn,
        'secondjn' => Book::SecondJohn,

        'thirdjohn' => Book::ThirdJohn,
        'thirdjoh' => Book::ThirdJohn,
        'thirdjhn' => Book::ThirdJohn,
        'thirdjn' => Book::ThirdJohn,

        'jude' => Book::Jude,
        'jud' => Book::Jude,
        'jd' => Book::Jude,

        'revelation' => Book::Revelation,
        'rev' => Book::Revelation,
        're' => Book::Revelation,
        'rv' => Book::Revelation,
    ];
}
