<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class ReportParserService
{
    /**
     * Общий метод для парсинга CSV файлов.
     * Принимает имя файла и массив для сопоставления столбцов CSV с полями объекта.
     * @param string $filename Путь к файлу внутри 'storage/app/'.
     * @param array $columnMap Карта [ 'CSV Заголовок' => 'имя_свойства_объекта' ].
     * @return array Массив объектов stdClass.
     */
    private function parseCsv(string $filename, array $columnMap): array
    {
        if (!Storage::exists($filename)) {
            return [];
        }

        $contents = Storage::get($filename);
        $lines = explode(PHP_EOL, trim($contents));
        $header = str_getcsv(array_shift($lines));
        $data = [];

        foreach ($lines as $line) {
            if (empty(trim($line))) {
                continue;
            }
            $row = array_combine($header, str_getcsv($line));
            $item = new \stdClass();
            foreach ($columnMap as $csvHeader => $objectProperty) {
                $item->{$objectProperty} = $row[$csvHeader] ?? null;
            }
            $data[] = $item;
        }

        return $data;
    }

    /**
     * Получает данные по сертификатам, отфильтрованные для 2D.
     * @return array
     */
    public function getCertificates(): array
    {
        $map = [
            'Описание' => 'description',
            'Тип' => 'type',
            'Срок окончания' => 'endDate',
            'Размер файла' => 'fileSize',
            'Тип файла' => 'fileType',
            'Скачать' => 'downloadUrl',
            'Подгруппа' => 'subgroup',
        ];
        $allItems = $this->parseCsv('reports/certificates.csv', $map);

        return array_filter($allItems, function($item) {
            return isset($item->subgroup) && str_contains($item->subgroup, '2D:');
        });
    }

    /**
     * Получает данные по видео, отфильтрованные для 2D.
     * @return array
     */
    public function getVideos(): array
    {
        $map = [
            'Описание' => 'title',
            'Тип видео' => 'type',
            'Смотреть' => 'watchUrl', // Предполагаем, что в CSV есть такие колонки
            'Скачать' => 'downloadUrl',
            'Категория' => 'category',
        ];
        $allItems = $this->parseCsv('reports/videos.csv', $map);

        return array_filter($allItems, function($item) {
            return isset($item->category) && str_contains($item->category, '2D:');
        });
    }

    /**
     * Получает данные по рекомендациям по уходу, отфильтрованные для 2D.
     * @return array
     */
    public function getCareRecommendations(): array
    {
        $map = [
            'Дата' => 'date',
            'Тип' => 'type',
            'Описание' => 'description',
            'Тип файла' => 'fileType',
            'Размер файла' => 'fileSize',
            'Скачать' => 'downloadUrl',
            'Категория' => 'category',
        ];
        $allItems = $this->parseCsv('reports/care.csv', $map);

        return array_filter($allItems, function($item) {
            return isset($item->category) && str_contains($item->category, '2D:');
        });
    }

    /**
     * Получает данные по видео-рекомендациям по уходу.
     * @return array
     */
    public function getVideoCareRecommendations(): array
    {
        $map = [
            'Описание' => 'title',
            'Смотреть' => 'watchUrl',
            'Скачать' => 'downloadUrl',
        ];
        // Эта страница не имела фильтра по 2D/3D, поэтому возвращаем все.
        return $this->parseCsv('reports/videocare.csv', $map);
    }

    /**
     * Получает данные по рекламным материалам, отфильтрованные для 2D.
     * @return array
     */
    public function getPromotionalMaterials(): array
    {
        $map = [
            'Дата' => 'date',
            'Бренд' => 'brand',
            'Тип' => 'type',
            'Описание' => 'description',
            'Тип файла' => 'fileType',
            'Размер файла' => 'fileSize',
            'Скачать' => 'downloadUrl',
            'Категория' => 'category',
        ];
        $allItems = $this->parseCsv('reports/promotional.csv', $map);

        return array_filter($allItems, function($item) {
            return isset($item->category) && str_contains($item->category, '2D:');
        });
    }

    /**
     * Получает данные по трейд-маркетингу, отфильтрованные для 2D.
     * @return array
     */
    public function getTradeMarketingMaterials(): array
    {
        $map = [
            'Дата' => 'date',
            'Бренд' => 'brand',
            'Тип' => 'type',
            'Описание' => 'description',
            'Тип файла' => 'fileType',
            'Размер файла' => 'fileSize',
            'Скачать' => 'downloadUrl',
            'Категория' => 'category',
        ];
        $allItems = $this->parseCsv('reports/trade.csv', $map);

        return array_filter($allItems, function($item) {
            return isset($item->category) && str_contains($item->category, '2D:');
        });
    }

    /**
     * Получает данные по спецификациям, отфильтрованные для 2D.
     * @return array
     */
    public function getSpecifications(): array
    {
        $map = [
            'Дата' => 'date',
            'Описание' => 'description',
            'Тип файла' => 'fileType',
            'Размер файла' => 'fileSize',
            'Скачать' => 'downloadUrl',
            'Категория' => 'category',
        ];
        $allItems = $this->parseCsv('reports/specifications.csv', $map);

        return array_filter($allItems, function($item) {
            return isset($item->category) && str_contains($item->category, '2D:');
        });
    }
}
