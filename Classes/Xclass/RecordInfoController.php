<?php
namespace Dkd\TcBeuser\Xclass;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 Ivan Kartolo (ivan.kartolo@dkd.de)
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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

use Dkd\TcBeuser\Utility\TcBeuserUtility;
use TYPO3\CMS\Backend\Controller\ContentElement\ElementInformationController;

class RecordInfoController extends ElementInformationController
{
    /**
     * Overwrite the init method of the parent object
     * We set the current user as fake admin, so that
     * he get the permission to show the info.
     *
     * @return void
     */
    public function init()
    {
        // fake admin
        if ($this->getBackendUser()->user['admin'] != 1) {
            //make fake Admin
            TcBeuserUtility::fakeAdmin();
        }
        parent::init();
    }
}
