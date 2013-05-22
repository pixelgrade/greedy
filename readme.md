# A new tool has emerged
## Configurable
* __$gridWidth:__ 960px
* __$gridColumns:__ 12
* __$defaultClasses:__ true
* __$remux:__ true

## Smart grid system
#### Set up your breakpoints
`$breakpoints: 0 small 400px hand 768px lap 1280px desk;`

#### Use the 'media()' mixin for consistent media queries
`@include media(lap) {...}`

##### You can use multiple types of queries
* `@include media(960px) {...}` to `@media only screen and (min-width: 960px) {...}`
* `@include media(to 960px) {...}` to `@media only screen and (max-width: 960px) {...}`
* `@include media(from 400px) {...}` to `@media only screen and (min-width: 400px) {...}`
* `@include media(768px 960px) {...}` to `@media only screen and (min-width: 768px) and (max-width: 960px) {...}`
* `@include media(hand) {...}` compiles to `@media only screen and (min-width: 400px) and (max-width: 767px) {...}`
* `@include media(to hand) {...}` to `@media only screen and (max-width: 767px) {...}`
* `@include media(from hand) {...}` to `@media only screen and (min-width: 400px) {...}`
* `@include media(hand lap) {...}` to `@media only screen and (min-width: 400px) and (max-width: 1280px) {...}`

## Sharp typography
## Horizontal and vertical rhytm
## Lightweight