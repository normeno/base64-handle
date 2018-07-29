<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */
/**
 * This file is part of the Base64 Handler library.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * PHP Version 7
 *
 * LICENSE: This source file is subject to the MIT license that is available
 * through the world-wide-web at the following URI:
 * http://opensource.org/licenses/mit-license.php
 *
 * @category Src
 * @package  Normeno\Base64Hanlder
 * @author   Nicolas Ormeno <ni.ormeno@gmail.com>
 * @license  http://opensource.org/licenses/mit-license.php MIT License
 * @link     https://github.com/normeno/base64_handler
 */
namespace Normeno\Base64Handler;

/**
 * Base64Handler Class
 *
 * @category src
 * @package  Normeno\Base64Handler
 * @author   Nicolas Ormeno <ni.ormeno@gmail.com>
 * @license  http://opensource.org/licenses/mit-license.php MIT License
 * @link     https://github.com/normeno/base64_handler
 */
class Base64Handler {

    /**
     * Convert file to base64
     *
     * @param string $path file path
     *
     *
     * @return bool|string
     */
    public function toBase64(string $path)
    {
        try {
            if (!Utils::isValidPath($path)) {
                throw new \Exception('Invalid Path', 404);
            }

            return base64_encode(file_get_contents($path));
        } catch (\Exception $e) {
            return "{$e->getMessage()} ({$e->getCode()})";
        }
    }
}