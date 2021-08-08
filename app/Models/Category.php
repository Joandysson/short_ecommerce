<?php

namespace App\Models;

use App\Config\Model\BaseModel;

/**
 * class Category
 * @package App\Models
 */
class Category extends BaseModel
{
    /**
     * @var string
     */
    private static $table = 'category';

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

    /**
     * @param array $data
     * @return mixed
     */
    public static function create(array $data): mixed
    {
        $query = parent::prepareQueryCreate($data, self::$table);
        $result = parent::save($query, $data);

        $product = self::byId($result);

        return $product;
    }

    /**
     * @param array $data
     * @param int $id
     * @return int|bool
     */
    public static function update(array $data, int $id): int|bool
    {
        $query = parent::prepareQueryUpdate($data, $id, self::$table);

        return  parent::save($query, $data);
    }


    /**
     * @param int $id
     * @return void
     */
    public static function delete(int $id): void
    {
        parent::deleteById(self::$table, $id);
    }
}
