<?php

/**
 * @file
 * Contains \Drupal\xmas\Plugin\CKEditorPlugin\Xmas.
 */

namespace Drupal\xmas\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginBase;
use Drupal\ckeditor\CKEditorPluginConfigurableInterface;

use Drupal\editor\Entity\Editor;

use Drupal\ckeditor\Annotation\CKEditorPlugin;
// Do not remove the line below because of:
// [Semantical Error] The annotation "@Translation" in class
use Drupal\Core\Annotation\Translation;

/**
 * Defines the "Xmas" plugin.
 * @see MetaContextual
 * @see MetaButton
 * @see MetaContextualAndButton
 *
 * @CKEditorPlugin(
 *   id = "xmas",
 *   label = @Translation("Xmas")
 * )
 */
class Xmas extends CKEditorPluginBase implements  CKEditorPluginConfigurableInterface {

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getDependencies().
   */
  public function getDependencies(Editor $editor) {
    return [];
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getLibraries().
   */
  public function getLibraries(Editor $editor) {
    return [];
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::isInternal().
   */
  public function isInternal() {
    return FALSE;
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getFile().
   */
  public function getFile() {
    return drupal_get_path('module', 'xmas') . '/js/plugins/xmas/plugin.js';
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getConfig().
   */
  public function getConfig(Editor $editor) {
    $config = [
      'xmas_wishes' => '<p class="big">Ho! Ho! Ho!</p>',
      'xmas_signature' => 'Santa Claus',
      'xmas_link' => 'en.wikipedia.org/wiki/Santa_Claus'
    ];

    $settings = $editor->getSettings();
    if (isset($settings['plugins']['xmas'])) {
      $config = $settings['plugins']['xmas'];
    }

    return $config;
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginButtonsInterface::getButtons().
   */
  public function getButtons() {
    return [
      'xmas' => [
        'label' => t('Xmas'),
        'image' => drupal_get_path('module', 'xmas') . '/js/plugins/xmas/icons/xmas.png',
      ]
    ];
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginConfigurableInterface::settingsForm().
   */
  public function settingsForm(array $form, array &$form_state, Editor $editor) {
    // Defaults
    $config = [
      'xmas_wishes' => '<p class="big">Ho! Ho! Ho!</p>',
      'xmas_signature' => 'Santa Claus',
      'xmas_link' => 'en.wikipedia.org/wiki/Santa_Claus'
    ];
    $settings = $editor->getSettings();
    if (isset($settings['plugins']['xmas'])) {
      $config = $settings['plugins']['xmas'];
    }

    $form['xmas_wishes'] = [
      '#title' => t('Wishes'),
      '#description' => t('Xmas wishes html content'),
      '#type' => 'textfield',
      '#default_value' => $config['xmas_wishes'],
    ];

    $form['xmas_signature'] = [
      '#title' => t('Signature'),
      '#description' => t('Signature of whos this wishes is from'),
      '#type' => 'textfield',
      '#default_value' => $config['xmas_signature'],
    ];

    $form['xmas_link'] = [
      '#title' => t('Link'),
      '#description' => t('Redirect link'),
      '#type' => 'textfield',
      '#default_value' => $config['xmas_link'],
    ];

    return $form;
  }

}
