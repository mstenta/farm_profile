<?php

namespace Drupal\farm_profile;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;

/**
 * Defines the access control handler for the profile entity type.
 */
class ProfileAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {

    switch ($operation) {
      case 'view':
        return AccessResult::allowedIfHasPermission($account, 'view profile');

      case 'update':
        return AccessResult::allowedIfHasPermissions($account, ['edit profile', 'administer profile'], 'OR');

      case 'delete':
        return AccessResult::allowedIfHasPermissions($account, ['delete profile', 'administer profile'], 'OR');

      default:
        // No opinion.
        return AccessResult::neutral();
    }

  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermissions($account, ['create profile', 'administer profile'], 'OR');
  }

}
