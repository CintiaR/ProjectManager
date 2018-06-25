<?php
/**
 * Created by PhpStorm.
 * User: cintia
 * Date: 25/06/2018
 * Time: 12:06
 */

namespace APP\Controller;

use APP\Models\User;


class UserController
{

    public function show($params)
    {
        $user = new User($params['container']);
        $data = $user->get($params['parms'][1]);
        return 'Meu nome é ' .$data['name'];
    }
}