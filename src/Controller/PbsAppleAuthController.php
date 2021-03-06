<?php

namespace Drupal\social_auth_pbs\Controller;

/**
 * Returns responses for Social Auth PBS Apple variant routes.
 */
class PbsAppleAuthController extends PbsAuthControllerBase {

  /**
   * {@inheritdoc}
   */
  public static function getProviderId(): string {
    return 'social_auth_pbs_apple';
  }

}
