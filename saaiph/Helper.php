<?php
namespace Saaiph;

class Helper
{
    //Verify file
    public static function hFileVerify($filename)
    {
        if (file_exists($filename)) {
            return true;
        } else {
            return false;
        }
    }

    //Create file
    public static function hCreateFile($filename, $source = '')
    {
        if (!Helper::hFileVerify($filename)) {
            return file_put_contents($filename, $source);
        }
    }

    public static function hReplace($filename, $replace = [])
    {
        if (Helper::hFileVerify($filename)) {
            $resources = file($filename);
            
            foreach ($replace as $key => $value) {
                $resources = str_replace($key, $value, $resources);
            }
            return $resources;
        }
    }

    public static function hReadFile($filename)
    {
        if (Helper::hFileVerify($filename)) {
            return file_get_contents($filename);
        }
    }
}
