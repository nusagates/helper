<?php

namespace Nusagates\Helper;

class Permission
{
  public function can($user, $permission)
  {
    return (bool)$user->can($permission);
  }

  public function is($user, $role)
  {
    return (bool)$user->is($role);
  }
}