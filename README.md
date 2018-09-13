# Markdown to Site

Version: 20180913
Author: Rytia
Github: [zzfly256/markdown-to-site](https://github.com/zzfly256/markdown-to-site)


## Description
A tool to build up website by instantly loading the remote or local markdown files instantly.

You can use it to build up some useful sites that synchronizes content from your github such as:

- Simple blog 
- Developing documents
- Wiki


## Install

### Requirement

- PHP (7.0+ is better)
- composer

### Download and install

After installing your composer, you can do the follows in your console:

```shell
git clone https://github.com/zzfly256/markdown-to-site.git
cd mark-to-site
composer install
```

or, you can install it via composer directly:

```shell
composer create-project zzfly256/markdown-to-site
```

### Config

Just change the line 12 in `index.php` to your markdown file path. Here are demo:

```php
// load the remote file
$file = file("https://raw.githubusercontent.com/php-quickorm/documents/master/README.md");

// load the local file
$file = file("/home/Rytia/readme.md");

// load file frome GET method
$file = file($_GET['md']);
```

## Usage

Set your root directory to the `markdown-to-site` and access it via `http://your_ip/`.