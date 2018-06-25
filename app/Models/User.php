<?php
/**
 * Created by PhpStorm.
 * User: cintia
 * Date: 23/06/2018
 * Time: 15:55
 */

namespace APP\Models;

use Pimple\Container;

class User
{
    private $con;

    public function __construct(Container $container)
    {
        $this->con = $container['db'];
    }

    public function get($id)
    {
        $stmt = $this->con->prepare('SELECT * FROM user WHERE id = ?');
        $stmt->execute([$id]);

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

}