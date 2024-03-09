# Locutus.sprintf

Locutus's version of sprintf and vsprintf in an NPM package

More info at: https://locutus.io/php/strings/sprintf/

This project is a fork of https://github.com/locutusjs/locutus and [@code-lts](https://github.com/code-lts) will do it's best to keep this up to date.

## Install

You can use the [locutus](https://www.npmjs.com/package/locutus) package is you only want the Node version

```bash
npm install locutus.sprintf
```

or

```bash
yarn add locutus.sprintf
```

## Use for Node

```javascript
var sprintf = require('locutus/php/strings/sprintf')
var effectiveness = 'futile'
console.log(sprintf('Resistance is %s', effectiveness))
```

## Use for a browser

```javascript
<script type="text/javascript" src="vendor/js/locutus.sprintf/sprintf.js"></script>
var effectiveness = 'futile'
console.log(sprintf('Resistance is %s', effectiveness))
```

## Package tree

```tree
.
├── LICENSE
├── package.json
├── README.md
└── src
    └── php
        ├── index.js
        └── strings
            ├── sprintf.browser.js
            ├── sprintf.js
            ├── vsprintf.browser.js
            └── vsprintf.js

3 directories, 8 files
```
