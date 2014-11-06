<?php
namespace PAGEmachine\Hairu\Domain\Repository;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Mathias Brodala <mbrodala@pagemachine.de>, PAGEmachine AG
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

class FrontendUserRepository extends \TYPO3\CMS\Extbase\Domain\Repository\FrontendUserRepository {

  /**
   * Returns a query for objects of this repository
   *
   * @return \TYPO3\CMS\Extbase\Persistence\QueryInterface
   * @api
   */
  public function createQuery() {

    $query = parent::createQuery();
    $query->getQuerySettings()->setRespectStoragePage(FALSE);

    return $query;
  }

  /**
   * Replaces an existing object with the same identifier by the given object
   *
   * @param object $modifiedObject The modified object
   * @return void
   */
  public function update($modifiedObject) {

    $this->persistenceManager->update($modifiedObject);
  }
}
