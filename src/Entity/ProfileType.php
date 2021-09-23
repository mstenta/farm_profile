<?php

namespace Drupal\farm_profile\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;

/**
 * Defines the Profile type configuration entity.
 *
 * @ConfigEntityType(
 *   id = "profile_type",
 *   label = @Translation("Profile type"),
 *   handlers = {
 *     "form" = {
 *       "add" = "Drupal\farm_profile\Form\ProfileTypeForm",
 *       "edit" = "Drupal\farm_profile\Form\ProfileTypeForm",
 *       "delete" = "Drupal\Core\Entity\EntityDeleteForm",
 *     },
 *     "list_builder" = "Drupal\farm_profile\ProfileTypeListBuilder",
 *     "route_provider" = {
 *       "html" = "Drupal\Core\Entity\Routing\AdminHtmlRouteProvider",
 *     }
 *   },
 *   admin_permission = "administer profile types",
 *   bundle_of = "profile",
 *   config_prefix = "profile_type",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "add-form" = "/admin/structure/profile_types/add",
 *     "edit-form" = "/admin/structure/profile_types/manage/{profile_type}",
 *     "delete-form" = "/admin/structure/profile_types/manage/{profile_type}/delete",
 *     "collection" = "/admin/structure/profile_types"
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "uuid",
 *   }
 * )
 */
class ProfileType extends ConfigEntityBundleBase {

  /**
   * The machine name of this profile type.
   *
   * @var string
   */
  protected $id;

  /**
   * The human-readable name of the profile type.
   *
   * @var string
   */
  protected $label;

}
