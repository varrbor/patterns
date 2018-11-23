<?php
interface Reader
{

    public function readFile($filepath);
}

class XlsReader implements Reader
{

    public function readFile($filepath)
    {
        /* Подключаем библиотеку
         * https://github.com/nuovo/spreadsheet-reader (например)
         * читаем документацию, вызываем нужные методы, приводим данные
         * к нужному формату, возвращаем результат */
    }

}

class DocReader implements Reader
{

    public function readFile($filepath)
    {
        // Аналогично
    }

}

class CsvReader implements Reader
{

    public function readFile($filepath)
    {
        // Аналогично
    }

}

class FileReader
{
    private $reader;

    public function setReader(Reader $reader)
    {
        $this->reader = $reader;
    }

    public function getContent($filepath)
    {
        return $this->reader->readFile($filepath);
    }
}

$file1 = 'path/to/file.xls';
$file2 = 'path/to/file.doc';

$reader = new FileReader();

// для Xls файла
$reader->setReader(new XlsReader());
$data = $reader->getContent($file1);

// для Xls файла
$reader->setReader(new DocReader());
$data = $reader->getContent($file2);