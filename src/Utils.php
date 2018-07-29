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
 * Utils Class
 *
 * @category src
 * @package  Normeno\Base64Handler
 * @author   Nicolas Ormeno <ni.ormeno@gmail.com>
 * @license  http://opensource.org/licenses/mit-license.php MIT License
 * @link     https://github.com/normeno/base64_handler
 */
class Utils
{
    /**
     * Clear string
     *
     * @param string $str base64 string
     *
     * @return bool|string
     */
    public static function clearString(string $str)
    {
        try {
            $explode = explode('base64,', $str);
            return array_key_exists(1, $explode) ? $explode[1] : $explode[0];
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * @param string $path
     *
     * @return bool
     */
    public static function isValidPath(string $path)
    {
        try {
            return file_exists($path) ? true : false;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Get base64's extension
     *
     * @param string $base64 Base64 string
     *
     * @return bool|array
     */
    public static function getExtFromBase64(string $base64)
    {
        try {
            $pos  = strpos($base64, ';');
            $ext[0] = explode(':', substr($base64, 0, $pos))[1];
            $ext[1] = explode('/', $ext[0])[1];

            return $ext;
        } catch (\Exception $e) {
            return false;
        }
    }
}