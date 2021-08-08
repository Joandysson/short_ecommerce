<?php

namespace App\Models;

use App\Config\Model\BaseModel;

/**
 * class ProductCategory
 */
class ProductCategory extends BaseModel
{
    /**
     * @var string $table
     */
    private static $table = 'product_category';

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
     * @param int $id
     * @return array
     */
    public static function byProductId(int $id): array
    {
        $query = "SELECT c.id, c.name FROM " . self::$table . " AS pc
                JOiN category AS c ON pc.category_id = c.id
                WHERE pc.product_id = $id";

        $result = parent::queryRaw($query);

        return is_array($result) ? $result : [];
    }

    /**
     * @param array $data
     * @return void
     */
    public static function create(array $data)
    {
        $query = parent::prepareQueryCreate($data, self::$table);
        parent::save($query, $data);
    }

    /**
     * @param array $categories
     * @param int $id
     * @return void
     */
    public static function createCategoriesByProduct(array $categories, int $id): void
    {
        foreach ($categories as $categoryId) {
            self::create([
                "product_id" => $id,
                "category_id" => $categoryId
            ]);
        }
    }

    /**
     * @param int $id
     * @return void
     */
    public static function deleteByProduct(int $id): void
    {
        $sql = "DELETE FROM " . self::$table . " WHERE product_id = :product_id";
        parent::save($sql, [':product_id' => $id]);
    }
}
