<?php

namespace Drupal\custom_stains\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\user\Entity\User;
use Drupal\Core\Access\AccessResult;
use Drupal\Core\Session\AccountInterface;
use Drupal\user\UserInterface;

/**
 * Class UserEditProfileController.
 */
class UserEditProfileController extends ControllerBase
{

  /**
   * Checks access for a specific request.
   *
   * @param \Drupal\Core\Session\AccountInterface $account
   *   Run access checks for this account.
   *
   * @return \Drupal\Core\Access\AccessResultInterface
   *   The access result.
   */
  public function access(AccountInterface $account, UserInterface $user)
  {
    $logged_user = User::load(\Drupal::currentUser()->id());
    if ($logged_user->id() == $user->id()) {
      return AccessResult::allowed();
    } else {
      return AccessResult::forbidden();
    }
  }

  /**
   * Checks access for a specific request.
   *
   * @param \Drupal\Core\Session\AccountInterface $account
   *   Run access checks for this account.
   *
   * @return \Drupal\Core\Access\AccessResultInterface
   *   The access result.
   */
  public function accessEdit(AccountInterface $account, UserInterface $user)
  {
    $logged_user = User::load(\Drupal::currentUser()->id());
    if ($logged_user->id() == $user->id()) {
      return AccessResult::allowed();
    } else {
      return AccessResult::forbidden();
    }
  }

  public function getUserTitle()
  {
    $user = \Drupal::routeMatch()->getParameter('user');
    $lang = \Drupal::languageManager()->getCurrentLanguage()->getId();
    $full_name = t('User Edit');
    if ($user)
      $full_name = $lang == 'ar' ? $user->get('field_arabic_name')->value : $user->get('field_english_name')->value;
    return array(
      '#type' => 'markup',
      '#markup' => $full_name,
    );
  }
}
