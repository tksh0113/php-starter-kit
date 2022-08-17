php-starter-kit
====
Simple environment to try PHP with devcontainer.

## Installation
- docker-compose up --build
- docker-compose exec php composer install

## Settings with VSCode
```
  /* PHP  */
  "[php]": {
    "editor.formatOnSave": true,
    "editor.defaultFormatter": "junstyle.php-cs-fixer",
  },
  "php-cs-fixer.executablePath": "${extensionPath}/php-cs-fixer.phar",
  "php-cs-fixer.rules": "@PSR12",
  "php-cs-fixer.formatHtml": false,
  "php-cs-fixer.documentFormattingProvider": true,
  "php-cs-fixer.allowRisky": false, // Not to allow risky formatting
  "phpcs.executablePath": "./vendor/bin/phpcs", // Could not use ${workspaceFolder}
  "phpcs.standard": "./phpcs.xml", // Could not use ${workspaceFolder}
  "phpcs.enable": true,
```
