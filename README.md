# MvcCore - Application - XML Documents

[![Latest Stable Version](https://img.shields.io/badge/Stable-v4.0.0-brightgreen.svg?style=plastic)](https://github.com/mvccore/app-xmldocs/releases)
[![License](https://img.shields.io/badge/Licence-BSD-brightgreen.svg?style=plastic)](https://github.com/mvccore/app-xmldocs/blob/master/LICENCE.md)
[![Packager Build](https://img.shields.io/badge/Packager%20Build-passing-brightgreen.svg?style=plastic)](https://github.com/mvccore/packager)
![PHP Version](https://img.shields.io/badge/PHP->=5.3-brightgreen.svg?style=plastic)

- More complex [**MvcCore**](https://github.com/mvccore/mvccore) application how to build portable multilanguage application, with infinite controllers and views tree structure and with all source data for documents in XML files.
- **Result** is **completly portable** - `./release/index.php` + `./release/.htaccess`
- Result application **currently packed in strict package mode**, all packing configurations included in `./.packager/`
- Packed with [**Packager library - mvccore/packager**](https://github.com/mvccore/packager)), all packing ways possible:
  - **PHAR file**
    - standard PHAR package with whole devel dir content
  - **PHP file**
    - **strict package**
      - everything is contained in result `index.php`
      - only `.htaccess` or `web.config` are necessary to use mod_rewrite
    - **preserve package**
      - result `index.php` file contains PHP files, 
        PHTML templates but no CSS/JS/fonts or images
      - all wrapped file system functions are looking inside 
        package first, then they try to read data from HDD
    - **preserve hdd**
      - result `index.php` file contains PHP files, 
        PHTML templates but no CSS/JS/fonts or images
      - all wrapped file system functions are looking on HDD first, 
        then they try to read data from package inself
    - **strict hdd**
      - result `index.php` file contains only PHP files, 
        but PHTML templates, all CSS/JS/fonts and images are on HDD
      - no PHP file system function is wrapped

## Instalation
```shell
# load example
composer create-project mvccore/app-xmldocs

# go to project development dir
cd app-xmldocs/development

# update dependencies for app development sources
composer update
```

## Build

### 1. Prepare application
- go to `app-xmldocs/development`
- clear everything in `./Var/Tmp/`
- change `$app->Run();` to `$app->Run();` in `./index.php`
- visit all aplication routes where are different JS/CSS bundles 
  groups to generate `./Var/Tmp/` content for result app
- run build process

### 2. Build

#### Linux:
```shell
# go to project root dir
cd app-xmldocs
# run build process into single PHP file
sh make.sh
```

#### Windows:
```shell
# go to project root dir
cd app-xmldocs
# run build process into single PHP file
make.cmd
```

#### Browser:
```shell
# visit script `make-php.php` in your project root directory:
http://localhost/app-xmldocs/make-php.php
# now run your result in:
http://localhost/app-xmldocs/release/
```
