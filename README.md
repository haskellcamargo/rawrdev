# Rawr
A word that means "I Love You" in dinosaur.

### What is included?

```
rawr/
├── src/
|   ├── Core/
|   |   └── TypeInference.php
|   └── DataType/
|       ├── Bool.php
|       ├── Collection.php
|       ├── Either.Left.php
|       ├── Either.Right.php
|       ├── Either.php
|       ├── Error.php
|       ├── File.php
|       ├── Fun.php
|       ├── IO.php
|       ├── Match.php
|       ├── Maybe.Just.php
|       ├── Maybe.Nothing.php
|       ├── Maybe.php
|       ├── Num.Float.php
|       ├── Num.Int.php
|       ├── Num.php
|       ├── Object.php
|       ├── Pointer.php
|       ├── String.php
|       ├── Tuple.php
|       └── Type.php
├── tests/
├── LICENSE
└── composer.json
```

### Which are the built-in types and their methods?

#### Type
`caseOf`, `id`, `inspect`, `toBool`, `toCollection`, `toEither`, `toError`, `toFile`, `toFun`, `toIO`, `toMatch`, `toMaybe`, `toNum`, `toInt`, `toString`, `toTuple`, `value`.

#### Type.Bool
`_and`, `_or`, `differentOf`, `equalsTo`, `greaterOrEq`, `greaterThan`, `ifTrue`, `ifFalse`, `lesserOrEq`, `lesserThan`, `not`, `otherwise`, `thenElse`.

#### Type.Collection
`all`, `andList`, `any`, `at`, `average`, `breakList`, `compact`, `concat`, `concatMap`, `countBy`, `difference`, `drop`, `dropWhile`, `each`, `eachIndex`, `elemIndex`, `filter`, `find`, `findIndex`, `findIndices`, `flatten`, `fold`, `foldl`, `foldl1`, `foldr`, `foldr1`, `groupBy`, `head`, `initial`, `intersection`, `last`, `map`, `mapIndex`, `maximum`, `maximumBy`, `mean`, `minimum`, `minimumBy`, `orList`, `partition`, `product`, `reject`, `reverse`, `scan`, `scan1`, `scanl`, `scanl1`, `scanr`, `scanr1`, `slice`, `sort`, `sortBy`, `sortWwith`, `span`, `splitAt`, `sum`, `take`, `takeWhile`, `tail`, `unfoldr`, `union`, `unique`, `uniqueBy`, `zip`, `zipWith`, `zipAll`, `zipAllWith`.

#### Type.Either
`either`, `isLeft`, `isRight`.

### Type.Error
`raise`, `save`.

### Type.File
`accessTime`, `basename`, `chgrp`, `chmod`, `chown`, `clearStatCache`, `close`, `closePointer`, `cmpName`, `copy`, `delete`, `directory`, `diskFreeSpace`, `diskTotalSpace`, `eof`, `escapeGets`, `exists`, `flush`, `getCSV`, `getChar`, `getContents`, `gets`, `glob`, `group`, `inode`, `isDirectory`, `isExecutable`, `isFile`, `isLink`, `isReadable`, `isUploadedFile`, `isWritable`, `linkChangeGroup`, `linkChangeOwner`, `lock`, `makeDir`, `modTime`, `moveUploadedFile`, `open`, `openPointer`, `owner`, `parseINIFile`, `parseINIString`, `passThrough`, `pathInfo`, `perms`, `putCSV`, `putContents`, `puts`, `read`, `read`, `readLink`, `realpathCache`, `realpathCacheSize`, `removeDirectory`, `rename`, `rewind`, `scanf`, `seek`, `setFileBuffer`, `size`, `stat`, `stat`, `symLink`, `tell`, `tempFile`, `tempName`, `touch`, `truncate`, `type`, `umask`, `write`.

### Type.Fun
`closScopeClass`, `closThis`, `docComment`, `endLine`, `export`, `ext`, `extName`, `fileName`, `clos`, `inNs`, `invoke`, `isClos`, `isDepr`, `isDisabled`, `isGen`, `isInternal`, `isUserDef`, `isVariadic`, `name`, `ns`, `numParam`, `numReqParam`, `param`, `o`, `retRef`, `shortName`, `startLine`, `staticVar`.

### Type.IO
#### Static
`getLine`, `getChar`, `write`, `writeLn`.

### Type.Match
`with`.

### Type.Maybe
`fromJust`, `fromMaybe`, `isJust`, `isNothing`, `maybe`, `toList`.

### Type.Num
`abs`, `add`, `arcCos`, `arcSin`, `arcTan2`, `arcTan`, `ceil`, `cos`, `degToRad`, `div`, `exp`, `expm1`, `floor`, `hArcCos`, , `hArcSin`, `hArcTan`, `hCos`, `hSin`, `hTan`, `hypot`, `isFinite`, `isInfinite`, `isNaN`, `log10`, `log1p`, `log`, `mod`, `mul`, `negate`, `pow`, `radToDeg`, `randUntil`, `round`, `sin`, `sqrt`, `sub`, `tan`.

### Type.Num.Int
`mtSeedRand`, `seedRand`, `to`, `toBin`, `toHex`, `toOct`.

### Type.Pointer
`let`, `free`.

### Type.String
`addCSlashes`, `addSlashes`, `asciiOnly`, `b`, `byteSize`, `bytes`, `capitalize`, `char`, `charAt`, `chars`, `chomp`, `chop`, `chr`, `clear`, `codePoints`, `cmpCase`, `concat`, `contains`, `crypt`, `delete`, `dump`, `toLower`, `eachByte`, `eachChar`, `eachCodePoint`, `eachLine`, `encode`, `endsWith`, `getByte`, `gSub`, `hex`, `index`, `insert`, `isEmpty`, `join`, `lJust`, `lStrip`, `length`, `lines`, `match`, `next`, `oct`, `ord`, `ordinalInteger`, `putStr`, `putStrLn`, `prepend`, `rIndex`, `rJust`, `rPartition`, `rStrip`, `repeat`, `replace`, `reverse`, `scan`, `scrub`, `setByte`, `shuffle`, `slice`, `split`, `squeeze`, `startsWith`, `strip`, `succ`, `sum`, `swapCase`, `unpack`, `toUpper`, `words`.

### Type.Tuple

`get`, `fst`, `snd`, `showType`, `swap`.

## Do you need a README?

All info can be found here: [https://haskellcamargo.github.io/rawr], ok!?
