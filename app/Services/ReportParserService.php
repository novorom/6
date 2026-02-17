<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use PhpOffice\PhpSpreadsheet\IOFactory;

class ReportParserService
{
    /**
     * @var int Длительность кэширования в секундах (24 часа).
     */
    private int $cacheDuration = 86400;

    /**
     * Общий метод для парсинга XLS/XLSX файлов.
     * @param string $filename Путь к файлу от корня проекта.
     * @param array $columnMap Карта [ 'Заголовок в файле' => 'имя_свойства_объекта' ].
     * @return array Массив объектов stdClass.
     */
    private function parseXls(string $filename, array $columnMap): array
    {
        $fullPath = base_path($filename);
        if (!file_exists($fullPath)) {
            Log::warning("Report file not found: {$fullPath}");
            return [];
        }

        try {
            $spreadsheet = IOFactory::load($fullPath);
            $sheet = $spreadsheet->getActiveSheet();
            $rows = $sheet->toArray();

            if (count($rows) < 2) {
                return []; // Нет данных или только заголовок
            }

            $header = array_shift($rows);
            $headerIndexMap = array_flip($header); // 'Имя колонки' => индекс

            $data = [];
            foreach ($rows as $row) {
                if (empty(array_filter($row))) { // Пропускать пустые строки
                    continue;
                }
                $item = new \stdClass();
                foreach ($columnMap as $fileHeader => $objectProperty) {
                    if (isset($headerIndexMap[$fileHeader])) {
                        $columnIndex = $headerIndexMap[$fileHeader];
                        $item->{$objectProperty} = $row[$columnIndex] ?? null;
                    } else {
                        $item->{$objectProperty} = null;
                    }
                }
                $data[] = $item;
            }

            return $data;
        } catch (\Exception $e) {
            Log::error("Failed to parse XLS file '{$filename}'. Error: " . $e->getMessage());
            return [];
        }
    }

    /**
     * Обобщенный метод для получения, кэширования и фильтрации данных отчета.
     *
     * @param string $cacheKey Ключ для кэширования.
     * @param string $filename Имя файла отчета.
     * @param array $columnMap Карта колонок.
     * @param callable|null $filter Функция для фильтрации результатов.
     * @return array
     */
    private function getReportData(string $cacheKey, string $filename, array $columnMap, ?callable $filter = null): array
    {
        return Cache::remember($cacheKey, $this->cacheDuration, function () use ($filename, $columnMap, $filter) {
            $allItems = $this->parseXls($filename, $columnMap);

            if ($filter) {
                $filteredItems = array_filter($allItems, $filter);
                return array_values($filteredItems); // Re-index array keys
            }

            return $allItems;
        });
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

        $filter = function($item) {
            return isset($item->subgroup) && str_contains($item->subgroup, '2D:');
        };

        return $this->getReportData('report.certificates', 'otch/certificates.xls', $map, $filter);
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
            'Смотреть' => 'watchUrl',
            'Скачать' => 'downloadUrl',
            'Категория' => 'category',
        ];

        $filter = function($item) {
            return isset($item->category) && str_contains($item->category, '2D:');
        };

        return $this->getReportData('report.videos', 'otch/videos.xls', $map, $filter);
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

        $filter = function($item) {
            return isset($item->category) && str_contains($item->category, '2D:');
        };

        return $this->getReportData('report.care', 'otch/care.xls', $map, $filter);
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
        return $this->getReportData('report.videocare', 'otch/videocare.xls', $map);
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

        $filter = function($item) {
            return isset($item->category) && str_contains($item->category, '2D:');
        };

        return $this->getReportData('report.promotional', 'otch/promotional.xls', $map, $filter);
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

        $filter = function($item) {
            return isset($item->category) && str_contains($item->category, '2D:');
        };

        return $this->getReportData('report.trade', 'otch/trade.xls', $map, $filter);
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

        $filter = function($item) {
            return isset($item->category) && str_contains($item->category, '2D:');
        };

        return $this->getReportData('report.specifications', 'otch/specifications.xls', $map, $filter);
    }

    /**
     * Получает данные по всем продуктам из основной выгрузки.
     * @return array
     */
    public function getProducts(): array
    {
        // Карта колонок для основной выгрузки продуктов.
        // Пожалуйста, предоставьте правильные названия заголовков для полей, отмеченных как "Ожидает подтверждения".
        $map = [
            'код bsu' => 'sku', // Обновлено
            'Наименование' => 'name', // Ожидает подтверждения
            'Коллекция' => 'collection', // Ожидает подтверждения
            'Бренд' => 'brand', // Ожидает подтверждения
            'Цена' => 'price', // Ожидает подтверждения
            'Остаток' => 'stock', // Ожидает подтверждения
            'Ед.Изм.' => 'unit', // Ожидает подтверждения
            'Описание' => 'description', // Ожидает подтверждения
            'URL изображения' => 'image_url', // Ожидает подтверждения
        ];

        // Предполагается, что основной файл выгрузки будет называться 'products_full.xlsx'
        return $this->getReportData('report.products', 'otch/products_full.xlsx', $map);
    }
}
