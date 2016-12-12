<?php namespace Websemantics\Composer;

use Anomaly\StreamsComposerPlugin\Installer\AddonInstaller;

/**
 * Class SkinsInstaller
 *
 * @link      http://websemantics.ca
 * @author    WebSemantics, Inc. <info@websemantics.ca>
 * @author    Adnan M.Sagar, Phd. <adnan@websemantics.ca>
 * @copyright 2012-2016 Web Semantics, Inc.
 * @package   Websemantics\Composer
 */

class SkinsInstaller extends AddonInstaller
{
  /**
   * Get types
   *
   * @return string
   */
  public function getTypes()
  {
    return parent::getTypes() . '|skin';
  }

  /**
   * @param string $type
   *
   * @return bool
   */
  public function supports($type)
  {
    return 'pyrocms-theme-skin' === $type;
  }
}
