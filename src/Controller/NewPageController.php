<?php

namespace Drupal\new_page\Controller;

use Drupal\Core\Controller\ControllerBase;

class NewPageController extends ControllerBase
{
  public function newpage()
  {
    return [
      '#title' => 'New page',
      '#markup' => 'Ovo je moj solo pokušaj kreiranja nove stranice'
    ];
  }
}
