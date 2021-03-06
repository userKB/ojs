<?php

/**
 * @file classes/file/LibraryFileManager.inc.php
 *
 * Copyright (c) 2014-2017 Simon Fraser University
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class LibraryFileManager
 * @ingroup file
 *
 * @brief Wrapper class for uploading files to a site/context' library directory.
 */

import('lib.pkp.classes.file.PKPLibraryFileManager');

class LibraryFileManager extends PKPLibraryFileManager {

	/**
	 * Constructor
	 * @param $contextId int
	 */
	function __construct($contextId) {
		parent::__construct($contextId);
	}
}

?>
