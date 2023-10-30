<?php

namespace Drupal\farm_profile\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for the profile entity edit forms.
 */
class ProfileForm extends ContentEntityForm {

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {

    $entity = $this->getEntity();
    $status = $entity->save();
    $link = $entity->toLink($this->t('View'))->toRenderable();

    $message_arguments = ['%label' => $this->entity->label()];
    $logger_arguments = $message_arguments + ['link' => render($link)];

    if ($status == SAVED_NEW) {
      $this->messenger()->addStatus($this->t('New profile %label has been created.', $message_arguments));
      $this->logger('farm_profile')->notice('Created new profile %label', $logger_arguments);
    }
    else {
      $this->messenger()->addStatus($this->t('The profile %label has been updated.', $message_arguments));
      $this->logger('farm_profile')->notice('Updated new profile %label.', $logger_arguments);
    }

    $form_state->setRedirect('entity.profile.canonical', ['profile' => $entity->id()]);

    return $status;
  }

}
