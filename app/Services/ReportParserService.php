<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
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
            // В реальном приложении здесь должно быть логирование ошибки
            return [];
        }
    }

    /**
     * Получает данные по сертификатам, отфильтрованные для 2D.
     * @return array
     */
    public function getCertificates(): array
    {
        return Cache::remember('report.certificates', $this->cacheDuration, function () {
            $map = [
                'Описание' => 'description',
                'Тип' => 'type',
                'Срок окончания' => 'endDate',
                'Размер файла' => 'fileSize',
                'Тип файла' => 'fileType',
                'Скачать' => 'downloadUrl',
                'Подгруппа' => 'subgroup',
            ];
            $allItems = $this->parseXls('otch/certificates.xls', $map);

            return array_filter($allItems, function($item) {
                return isset($item->subgroup) && str_contains($item->subgroup, '2D:');
            });
        });
    }

    /**
     * Получает данные по видео, отфильтрованные для 2D.
     * @return array
     */
    public function getVideos(): array
    {
        return Cache::remember('report.videos', $this->cacheDuration, function () {
            $map = [
                'Описание' => 'title',
                'Тип видео' => 'type',
                'Смотреть' => 'watchUrl',
                'Скачать' => 'downloadUrl',
                'Категория' => 'category',
            ];
            $allItems = $this->parseXls('otch/videos.xls', $map);

            return array_filter($allItems, function($item) {
                return isset($item->category) && str_contains($item->category, '2D:');
            });
        });
    }

    /**
     * Получает данные по рекомендациям по уходу, отфильтрованные для 2D.
     * @return array
     */
    public function getCareRecommendations(): array
    {
        return Cache::remember('report.care', $this->cacheDuration, function () {
            $map = [
                'Дата' => 'date',
                'Тип' => 'type',
                'Описание' => 'description',
                'Тип файла' => 'fileType',
                'Размер файла' => 'fileSize',
                'Скачать' => 'downloadUrl',
                'Категория' => 'category',
            ];
            $allItems = $this->parseXls('otch/care.xls', $map);

            return array_filter($allItems, function($item) {
                return isset($item->category) && str_contains($item->category, '2D:');
            });
        });
    }

    /**
     * Получает данные по видео-рекомендациям по уходу.
     * @return array
     */
    public function getVideoCareRecommendations(): array
    {
        return Cache::remember('report.videocare', $this->cacheDuration, function () {
            $map = [
                'Описание' => 'title',
                'Смотреть' => 'watchUrl',
                'Скачать' => 'downloadUrl',
            ];
            return $this->parseXls('otch/videocare.xls', $map);
        });
    }

    /**
     * Получает данные по рекламным материалам, отфильтрованные для 2D.
     * @return array
     */
    public function getPromotionalMaterials(): array
    {
        return Cache::remember('report.promotional', $this->cacheDuration, function () {
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
            $allItems = $this->parseXls('otch/promotional.xls', $map);

            return array_filter($allItems, function($item) {
                return isset($item->category) && str_contains($item->category, '2D:');
            });
        });
    }

    /**
     * Получает данные по трейд-маркетингу, отфильтрованные для 2D.
     * @return array
     */
    public function getTradeMarketingMaterials(): array
    {
        return Cache::remember('report.trade', $this->cacheDuration, function () {
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
            $allItems = $this->parseXls('otch/trade.xls', $map);

            return array_filter($allItems, function($item) {
                return isset($item->category) && str_contains($item->category, '2D:');
            });
        });
    }

    /**
     * Получает данные по спецификациям, отфильтрованные для 2D.
     * @return array
     */
    public function getSpecifications(): array
    {
        return Cache::remember('report.specifications', $this->cacheDuration, function () {
            $map = [
                'Дата' => 'date',
                'Описание' => 'description',
                'Тип файла' => 'fileType',
                'Размер файла' => 'fileSize',
                'Скачать' => 'downloadUrl',
                'Категория' => 'category',
            ];
            $allItems = $this->parseXls('otch/specifications.xls', $map);

            return array_filter($allItems, function($item) {
                return isset($item->category) && str_contains($item->category, '2D:');
            });
        });
    }
}
