<?php
/**
 * Created by PhpStorm.
 * User: Jason Steele
 * Date: 3/26/2016
 * Time: 10:20 PM
 */

namespace Steampunkeds;


class UsersController {

    public function __construct(Site $site, User $user, array $post) {
        $root = $site->getRoot();

    }

    /**
     * @return mixed
     */
    public function getRedirect() {
        return $this->redirect;
    }

    private $redirect;	///< Page we will redirect the user to.
}