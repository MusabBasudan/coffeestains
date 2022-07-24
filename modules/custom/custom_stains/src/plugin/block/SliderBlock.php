<?php

namespace Drupal\custom_stains\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'SliderBlock' block.
 *
 * @Block(
 *  id = "slider_block",
 *  admin_label = @Translation("Slider block"),
 * )
 */
class SliderBlock extends BlockBase {

 /**
   * {@inheritdoc}
   */
 public function getSlideshowBuild(){

 	$default_langcode = \Drupal::languageManager()->getCurrentLanguage()->getId();

 	$node_ids = \Drupal::entityQuery('node')
 	->condition('type', 'slideshow')
 	->condition('langcode',$default_langcode,'=')
  ->condition('status', 1)
  ->condition('promote', 1)
  ->sort('created' , 'DESC')
  ->range(0, 1)
  ->execute();

  $node =  \Drupal\node\Entity\Node::load(reset($node_ids));
  if(empty($node))
    return '';
  $node = $node->getTranslation($default_langcode);
  $data = array(
    "id" => $node->id(),
    "title" => $node->get('title')->value,
    "body" => strip_tags($node->get('body')->value), 			
    "image" => $node->get('field_slideshow_image')->entity->uri->value,
  );




  return $data;


}

public function build() {
  return array(
   '#theme' => 'slider_block',
   '#items' => $this->getSlideshowBuild(),
   '#cache' => [
    'tags' => ['node_list'],
  ],

);
}

}
