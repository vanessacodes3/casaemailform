<?php

namespace Drupal\casaemailform\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Email Form' Block.
 *
 * @Block(
 *   id = "casa_email_form",
 *   admin_label = @Translation("Email Form"),
 *   category = @Translation("Custom CASA Blocks"),
 * )
 */
class EmailBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => $this->t('Hello, World!'),
    ];
  }

}
