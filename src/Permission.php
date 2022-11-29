<?php

namespace Nusagates\Helper;

class Permission
{
  public static function can($user, $permission)
  {
    return (bool)$user->can($permission);
  }

  public static function is($user, $role)
  {
    return (bool)$user->is($role);
  }
}