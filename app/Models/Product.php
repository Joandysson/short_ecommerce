<?php

namespace App\Models;

use App\Config\Model\BaseModel;

/**
 * class Product
 * @package App\Models
 */
class Product extends BaseModel
{
    /**
     * @var string $table
     */
    private static $table = 'product';

    /**
     * @return array
     */
    public function all(): array
    {
        return parent::queryRaw(
            "SELECT * FROM " . self::$table
        );
    }

    /**
     * @param integer $id
     * @return mixed
     */
    public static function byId(int $id): mixed
    {
        $result = parent::queryRaw(
            "SELECT * FROM " . self::$table . " WHERE id = $id"
        );

        return current($result);
    }

    public static function create($data): mixed
    {
        $query = parent::prepareQueryCreate($data, self::$table);

        $result = parent::save($query, $data);

        $product = self::byId($result);

        return $product;
    }

    /**
     * @param array $data
     * @param int $id
     * @return void
     */
    public static function update(array $data, int $id): int|bool
    {
        $query = parent::prepareQueryUpdate($data, $id, self::$table);

        $result = parent::save($query, $data);

        return $result;
    }

    /**
     * @param int $id
     * @return void
     */
    public static function delete(int $id): void
    {
        self::deleteById(self::$table, $id);
    }
}
