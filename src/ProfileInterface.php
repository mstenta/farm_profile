<?php

namespace Drupal\farm_profile;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\user\EntityOwnerInterface;
use Drupal\Core\Entity\EntityChangedInterface;

/**
 * Provides an interface defining a profile entity type.
 */
interface ProfileInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

  /**
   * Gets the profile title.
   *
   * @return string
   *   Title of the profile.
   */
  public function getTitle();

  /**
   * Sets the profile title.
   *
   * @param string $title
   *   The profile title.
   *
   * @return \Drupal\farm_profile\ProfileInterface
   *   The called profile entity.
   */
  public function setTitle($title);

  /**
   * Gets the profile creation timestamp.
   *
   * @return int
   *   Creation timestamp of the profile.
   */
  public function getCreatedTime();

  /**
   * Sets the profile creation timestamp.
   *
   * @param int $timestamp
   *   The profile creation timestamp.
   *
   * @return \Drupal\farm_profile\ProfileInterface
   *   The called profile entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the profile status.
   *
   * @return bool
   *   TRUE if the profile is enabled, FALSE otherwise.
   */
  public function isEnabled();

  /**
   * Sets the profile status.
   *
   * @param bool $status
   *   TRUE to enable this profile, FALSE to disable.
   *
   * @return \Drupal\farm_profile\ProfileInterface
   *   The called profile entity.
   */
  public function setStatus($status);

}
