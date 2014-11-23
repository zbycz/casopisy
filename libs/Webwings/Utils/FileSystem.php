<?php

/**
 * Library with file sytem related helpers.
 *
 * @copyright Copyright (c) 2013 Webwings s.r.o.
 */

namespace Webwings\Utils;

class FileSystem {

    /**
     * Recursively removes directory with all content.
     *
     * @param string $dirPath
     */
    public static function recursiveRemoveDir($dirPath) {
        $dirPath = static::makeNicePath($dirPath);
        if (file_exists($dirPath)) {
            $recursion = null;
            $recursion = function ($innerDirPath) use (&$recursion) {
                //$dirPath = static::makeNicePath($innerDirPath);
                $dirPath = FileSystem::makeNicePath($innerDirPath);
                foreach (glob($innerDirPath . '/*') as $file) {
                    if (is_dir($file)) {
                        $recursion($file);
                    } else {
                        unlink($file);
                    }
                }
                rmdir($innerDirPath);
            };
            $recursion($dirPath);
        }
    }

    /**
     * Replaces all "/.." in path by calling dirname() resulting in path
     * shortest path possible.
     *
     * Example: /mnt/aaa/bbb/../../ccc to /mnt/ccc (prevents error when either "aaa" or "bbb" folders are absent)
     *
     * @param string $path
     * @return string
     */
    public static function makeNicePath($path) {
        $result = "";
        $parts = explode('/..', $path);
        $partCount = count($parts);

        if ($partCount > 1) {
            foreach ($parts as $index => $part) {
                if ($index) { // not first?
                    $result = dirname($result);
                }

                $result .= $part;
            }
        } else {
            $result = $path;
        }


        return $result;
    }

    /**
     * Vrací výpis všech souborů obsařených ve složce. Složky nejsou zahrnuty
     * @param string $path
     * @param array $extension seznam hledaných koncovek souborů
     * @return array
     * @throws \InvalidArgumentException
     */
    public static function getDirFilesName($path, $extension = array()) {
        $files = array();
        if (file_exists($path)) {
            if ($handle = opendir($path)) {
                /* This is the correct way to loop over the directory. */
                while (false !== ($entry = readdir($handle))) {
                    if ($entry == ".") {
                        continue;
                    }
                    if ($entry == "..") {
                        continue;
                    }

                    if (is_dir($path . $entry)) {
                        continue;
                    }

                    if (empty($extension)) {
                        $files[] = $entry;
                    } else {
                        if (in_array(pathinfo($entry, PATHINFO_EXTENSION), $extension)) {
                            $files[] = $entry;
                        }
                    }
                }
                closedir($handle);
            } else {
                throw new \InvalidArgumentException("Path $path cannot be open");
            }
            return $files;
        } else {
            throw new \InvalidArgumentException("Path $path doesn't exist");
        }
    }

    /**
     * Return md5 hash from all file name
     * @param string $path
     * @return string
     */
    public static function getDirHash($path) {
        $files = static::getDirFilesName($path);
        return md5(implode('', $files));
    }

    /**
     * Nalezne soubor ve slozce podle nazvu nehlede na jeho koncovku
     * @param string $path
     * @param string $filename
     * @return mixed
     */
    public static function findFileByName($path, $filename) {
        $files = self::getDirFilesName($path);

        $outputFiles = array();

        foreach ($files as $file) {
            if (pathinfo($file, PATHINFO_FILENAME) == $filename) {
                $outputFiles[] = $file;
            }
        }

        switch (count($outputFiles)) {
            case 0:return false;
            case 1:return $outputFiles[0];
            default : return $outputFiles;
        }
    }
    
    public static function createPathFromId($id) {
        $strId = (string) $id;
        $idLen = strlen($strId);

        $out = '';
        for ($i = 0; $i < $idLen; $i++) {
            $out.= $strId[$i] . '/';
        }
        return $out;
    }    

}
