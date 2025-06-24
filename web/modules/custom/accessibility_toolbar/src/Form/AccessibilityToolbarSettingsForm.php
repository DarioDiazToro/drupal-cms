<?php

namespace Drupal\accessibility_toolbar\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure Accessibility Toolbar settings.
 */
class AccessibilityToolbarSettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'accessibility_toolbar_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['accessibility_toolbar.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('accessibility_toolbar.settings');

    $form['settings_wrapper'] = [
      '#type' => 'container',
      '#attributes' => ['class' => ['settings-flex-container']],
    ];

    $form['settings_wrapper']['features_section'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Features'),
      '#attributes' => ['class' => ['features-section']],
    ];

    $form['settings_wrapper']['features_section']['enabled'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Enable Accessibility Toolbar'),
      '#description' => $this->t('Show the accessibility toolbar for anonymous users.'),
      '#default_value' => $config->get('enabled') ?? FALSE,
    ];

    $form['settings_wrapper']['features_section']['features'] = [
      '#type' => 'checkboxes',
      '#title' => $this->t('Enabled Features'),
      '#description' => $this->t('Select which accessibility features should be available in the toolbar.'),
      '#options' => [
        'font_size' => $this->t('Font Size Controls'),
        'high_contrast' => $this->t('High Contrast Mode'),
        'grayscale' => $this->t('Grayscale Mode'),
      ],
      '#default_value' => $config->get('features') ?? [],
    ];

    $form['settings_wrapper']['appearance_section'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Appearance Settings'),
      '#attributes' => ['class' => ['appearance-section']],
    ];

    $form['settings_wrapper']['appearance_section']['colors_wrapper'] = [
      '#type' => 'container',
      '#attributes' => ['class' => ['colors-flex-container']],
    ];

    $form['settings_wrapper']['appearance_section']['colors_wrapper']['toolbar_color'] = [
      '#type' => 'color',
      '#title' => $this->t('Toolbar Background Color'),
      '#default_value' => $config->get('toolbar_color') ?? '#000000',
      '#description' => $this->t('Select the background color for the toolbar and toggle button.'),
      '#prefix' => '<div class="color-item">',
      '#suffix' => '</div>',
    ];

    $form['settings_wrapper']['appearance_section']['colors_wrapper']['text_color'] = [
      '#type' => 'color',
      '#title' => $this->t('Text Color'),
      '#default_value' => $config->get('text_color') ?? '#ffffff',
      '#description' => $this->t('Select the color for the text in the toolbar.'),
      '#prefix' => '<div class="color-item">',
      '#suffix' => '</div>',
    ];

    $form['settings_wrapper']['appearance_section']['colors_wrapper']['icon_color'] = [
      '#type' => 'color',
      '#title' => $this->t('Icon Color'),
      '#default_value' => $config->get('icon_color') ?? '#ffffff',
      '#description' => $this->t('Select the color for the SVG icons in the toolbar.'),
      '#prefix' => '<div class="color-item">',
      '#suffix' => '</div>',
    ];

    $form['settings_wrapper']['appearance_section']['colors_wrapper']['button_color'] = [
      '#type' => 'color',
      '#title' => $this->t('Button Background Color'),
      '#default_value' => $config->get('button_color') ?? '#4A4848',
      '#description' => $this->t('Select the background color for the buttons in the toolbar.'),
      '#prefix' => '<div class="color-item">',
      '#suffix' => '</div>',
    ];

    // Agregamos los estilos del formulario
    $form['#attached']['library'][] = 'accessibility_toolbar/admin';

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $config = $this->config('accessibility_toolbar.settings');
    
    // Guardar configuración general
    $config->set('enabled', $form_state->getValue('enabled'));
    $config->set('features', array_filter($form_state->getValue('features')));
    
    // Guardar colores
    $appearance = $form_state->getValue('appearance');
    if (!empty($appearance['toolbar_color'])) {
      $config->set('appearance.toolbar_color', $appearance['toolbar_color']);
    }
    if (!empty($appearance['text_color'])) {
      $config->set('appearance.text_color', $appearance['text_color']);
    }
    if (!empty($appearance['icon_color'])) {
      $config->set('appearance.icon_color', $appearance['icon_color']);
    }
    if (!empty($appearance['button_color'])) {
      $config->set('appearance.button_color', $appearance['button_color']);
    }
    
    $config->save();

    // Limpiar todas las cachés
    drupal_flush_all_caches();
    
    parent::submitForm($form, $form_state);
  }
}
