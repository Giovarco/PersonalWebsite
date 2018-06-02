<?php

    class BundleLoader {

        private static $bundles;
        private static $bundleDir;

        // This function initializes this class
        public static function init() {

            //Configuration
            self::$bundleDir = "bundle/page_content/";

            // Let $bundles be a empty array
            self::$bundles = array();

            // Get file names from bundle dir excluding . and ..
            $fileNames = array_diff( scandir(self::$bundleDir), array('..', '.') );
            
            // Cache all bundles under the bundle directoy
            foreach ($fileNames as $fileName) {

                // Get content from file
                $fileContent = parse_ini_file(self::$bundleDir.$fileName);

                // Get file name without extension
                $bundleNameWithoutExtension = substr($fileName, 0, strpos($fileName, "."));

                // Cache bundle  ( E.G.: "index_EN" => array( [...content...]) )
                self::$bundles[$bundleNameWithoutExtension] = $fileContent;

            }

        }

        // Get a value from a bundle
        public static function getValue($bundleName, $keyName) {

            // Get language (e.g.: "EN")
            $language = self::getLanguage();

            // Get bundle content by name and language
            $bundleContent = self::getBundleContent($bundleName, $language);

            // Return a key value
            return self::getKeyValueFromBundle($bundleContent, $keyName);

        }

        // This function gets the LANG parameter from URL
        private static function getLanguage() {

            // Get language from URL. If it does not exist, default value is "EN"
            $language = isset( $_GET['lang'] ) ? $_GET['lang'] : "EN";

            // Check if the language is supported
            if(self::isSupportedLanguage($language)) {
                // The language in URL is valid
                return $language;
            } else {
                // The language in URL is invalid. Default value is "EN"
                return "EN"; 
            }

        }

        // This function checks if a given language is supported by the platform
        private static function isSupportedLanguage($language) {

            $supportedLanguages = parse_ini_file("bundle/configuration.ini")["SUPPORTED_LANGUAGES"];

            // Check if the given language is supported
            if (strpos($supportedLanguages, $language) !== false) {
                return true;
            } else {
                return false;
            }

        }

        // This functions return a bundle object depending on bundle name and language
        private static function getBundleContent($bundleName, $language) {
            return self::$bundles[$bundleName."_".$language];
        }

        // This function returns a key value from a given bundle
        private static function getKeyValueFromBundle($bundleContent, $keyName) {
            if (isset($bundleContent[$keyName])) {
                return $bundleContent[$keyName];
            } else {
                return "???".$keyName."???";
            }
        }

    }

?>