<?php
namespace slugging;


class Sluggo {

    /**
     * The glue to be used between characters
     * @var string
     */
    private static $_glue = '-';


    /**
     * Characters to be replaced
     * @var array
     */
    private static $_toBeReplaced = ['À','Á','Â','Ã','Ä','Å','à','á','â','ã','ä','å','Ò','Ó','Ô','Õ','Ö','Ø','ò','ó','ô','õ','ö','ø','È','É','Ê','Ë','è','é','ê','ë','Ç','ç','Ì','Í','Î','Ï','ì','í','î','ï','Ù','Ú','Û','Ü','ù','ú','û','ü','ÿ','Ñ','ñ'];


    /**
     * @var array
     */
    private static $_replace_by = ['a','a','a','a','a','a','a','a','a','a','a','a','o','o','o','o','o','o','o','o','o','o','o','o','e','e','e','e','e','e','e','e','c','c','i','i','i','i','i','i','i','i','u','u','u','u','u','u','u','u','y','n','n'];


    /**
     * Generate slugged string
     * @param $string
     * @param null $glue
     * @return mixed
     */
    public static function toSlug($string, $glue = null ) {

        $glue = is_null($glue) ? self::$_glue : $glue;

        $cleaned_str = self::cleanString( $string );
        $slugged_string = preg_replace('#-{2,}#', $glue, $cleaned_str);
        $slugged_string = preg_replace('#([^a-z0-9]+)#i',  $glue, $slugged_string);

        return $slugged_string;
    }


    /**
     * @param $string
     * @return mixed|string
     */
    private static function cleanString( $string ){
        $newString = trim($string);
        $newString = str_replace(self::$_toBeReplaced, self::$_replace_by, $newString);
        $newString = preg_replace('#-$#','', $newString);
        $newString = preg_replace('#^-#','', $newString);
        return $newString;
    }

}