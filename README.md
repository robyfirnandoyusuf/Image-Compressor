# PHP ImageCompressor
[![Issues](https://img.shields.io/github/issues/robyfirnandoyusuf/Image-Compressor)](https://github.com/robyfirnandoyusuf/Image-Compressor/releases)
[![Starts](https://img.shields.io/github/stars/robyfirnandoyusuf/Image-Compressor)](https://github.com/robyfirnandoyusuf/Image-Compressor/releases)
[![Total Downloads](https://img.shields.io/packagist/dt/robyfirnandoyusuf/Image-Compressor.svg)](https://packagist.org/packages/robyfirnandoyusuf/image-compressor)
[![LICENSE](https://img.shields.io/github/license/robyfirnandoyusuf/Image-Compressor)](LICENSE)

A PHP Package to Compress Image.
## Installation

You can install the package via composer:

```bash
composer require robyfirnandoyusuf/image-compressor
```
## Usage
```php
use ImageCompressor\ImageCompressor;
ImageCompressor::compress('x.jpg','normal','/path/output');
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
            <td>normal</td>
            <td>quality 85</td>
            <td>speed 3</td>
        </tr>
        <tr>
            <td>good</td>
            <td>quality 80</td>
            <td>speed 1</td>
        </tr>
        <tr>
            <td>high</td>
            <td>quality 70</td>
            <td>speed 1</td>
        </tr>
        <tr>
            <td>extreme</td>
            <td>quality 60</td>
            <td>speed 1</td>
        </tr>
    </tbody>
</table>

## Security

If you discover any security related issues, please email nothingtocoding@gmail.com instead of using the issue tracker.

## Version

**Current version is 1.0.0** and still development.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.