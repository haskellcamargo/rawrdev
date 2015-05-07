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
|       ├── String.php
|       ├── Tuple.php
|       └── Type.php
├── tests/
├── LICENSE
└── composer.json
```

### Which are the built-in types and their methods?

#### Type

#### Type.Bool
`_and`, `_or`, `differentOf`, `equalsTo`, `greaterOrEq`, `greaterThan`, `ifTrue`, `ifFalse`, `lesserOrEq`, `lesserThan`, `not`, `otherwise`, `thenElse`.

#### Type.Collection
`all`, `andList`, `any`, `at`, `average`, `breakList`, `compact`, `concat`, `concatMap`, `countBy`, `difference`, `drop`, `dropWhile`, `each`, `eachIndex`, `elemIndex`, `filter`, `find`, `findIndex`, `findIndices`, `flatten`, `fold`, `foldl`, `foldl1`, `foldr`, `foldr1`, `groupBy`, `head`, `initial`, `intersection`, `last`, `map`, `mapIndex`, `maximum`, `maximumBy`, `mean`, `minimum`, `minimumBy`, `orList`, `partition`, `product`, `reject`, `reverse`, `scan`, `scan1`, `scanl`, `scanl1`, `scanr`, `scanr1`, `slice`, `sort`, `sortBy`, `sortWwith`, `span`, `splitAt`, `sum`, `take`, `takeWhile`, `tail`, `unfoldr`, `union`, `unique`, `uniqueBy`, `zip`, `zipWith`, `zipAll`, `zipAllWith`.

#### Type.Either
`either`, `isLeft`, `isRight`.

### Type.Error

### Type.File

### Type.Fun
`closScopeClass`, `closThis`, `docComment`, `endLine`, `export`, `ext`, `extName`, `fileName`, `clos`, `inNs`, `invoke`, `isClos`, `isDepr`, `isDisabled`, `isGen`, `isInternal`, `isUserDef`, `isVariadic`, `name`, `ns`, `numParam`, `numReqParam`, `param`, `o`, `retRef`, `shortName`, `startLine`, `staticVar`

### Type.IO

### Type.Match

### Type.Maybe

### Type.Num

### Type.Num.Float

### Type.Num.Int

### Type.Object

### Type.String

### Type.Tuple

`get`, `fst`, `snd`, `showType`, `swap`.

## Do you need a README?

All info can be found here: [https://haskellcamargo.github.io/rawr], ok!?
