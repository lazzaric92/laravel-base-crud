<?php
namespace App\Functions;
class Helpers {
    public static function getCsvInfo($filePath){
        // > apro il file
        $csvData = [];
        $fileData = fopen($filePath, 'r');

        // > se non trovi il file, dimmelo
        if($fileData === false){
            throw new InvalidArgumentException('File not found, check the file path');
        }

        // > se lo trovi, leggi riga per riga
        while(($csvRow = fgetcsv($fileData)) !== false){
            $csvData[] = $csvRow;
        }

        // > chiudo il file
        fclose($fileData);

        return $csvData;
    }
}
