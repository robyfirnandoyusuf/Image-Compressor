# PHP ImageCompressor
[![Issues](https://img.shields.io/github/issues/robyfirnandoyusuf/Image-Compressor)](https://github.com/robyfirnandoyusuf/Image-Compressor/releases)
[![Starts](https://img.shields.io/github/stars/robyfirnandoyusuf/Image-Compressor)](https://github.com/robyfirnandoyusuf/Image-Compressor/releases)
[![Total Downloads](https://img.shields.io/packagist/dt/robyfirnandoyusuf/Image-Compressor.svg)](https://packagist.org/packages/robyfirnandoyusuf/image-compressor)
[![LICENSE](https://img.shields.io/github/license/robyfirnandoyusuf/Image-Compressor)](LICENSE)

A PHP Package to Compress Image.

## Requirements
PHP cURL Module Enable

## Installation

You can install the package via composer:

```bash
composer require robyfirnandoyusuf/image-compressor
```
## Usage
```php
use ImageCompressor\ImageCompressor;
ImageCompressor::compress('x.jpg','good','/path/output');
``` 

**parameter 1** : filename.jpg / .png

**parameter 2** : quality (normal,good,high,extreme)

**parameter 3** : output directory

###### Compression details at different levels.

<table>
    <thead>
        <tr>
            <th rowspan=2>Compression Mode</th>
            <th>jpg</th>
            <th>png</th>
        </tr>
        <tr>
          <th>mozjpeg</th>
          <th>pngquant</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>normal (Less compression, better image quality)</td>
            <td>quality 85</td>
            <td>speed 3</td>
        </tr>
        <tr>
            <td>good **Recommended** (Balanced compression & image quality)</td>
            <td>quality 80</td>
            <td>speed 1</td>
        </tr>
        <tr>
            <td>high (More compression & less image quality)</td>
            <td>quality 70</td>
            <td>speed 1</td>
        </tr>
        <tr>
            <td>extreme **Not Recommended**(Most compression & lowest image quality)</td>
            <td>quality 60</td>
            <td>speed 1</td>
        </tr>
    </tbody>
</table>

## Tested On

OS          : Ubuntu 16.04 LTS

PHP Version : PHP 7.3.3

Web Server  : Apache2

## Security

If you discover any security related issues, please email nothingtocoding@gmail.com instead of using the issue tracker.

## Version

**Current version is 1.0.0** and still development.

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

## Contact
If you meet any problem when using ImageCompressor, file a issue or contact me directly.
[Roby Firnando Yusuf](https://facebook.com/exploreourbrain)
