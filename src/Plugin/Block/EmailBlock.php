<?php

namespace Drupal\casaemailform\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Form\FormBuilderInterface;

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
   * @var $formbuilder \Drupal\Core\Form\FormBuilderInterface
   */
  protected $formbuilder;

  /**
   * Constructs a new Email Form Block.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin ID for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \Drupal\Core\Form\FormBuilderInterface $form_builder
   *   The form builder.
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, FormBuilderInterface $form_builder) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->formBuilder = $form_builder;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('form_builder')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
  $build['form'] = $this->formBuilder()->getForm('Drupal\casaemailform\Form\CASAForm'); 
  return $build;
  }

}
