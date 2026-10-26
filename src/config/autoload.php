<?php

/**
 * Auto-loader
 *
 * This file specifies which components should be automatically loaded
 * with every request.
 *
 * @package     CiSkeleton\Plugins\Config
 * @subpackage  OAuth
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     Apache-2.0 — Apache License 2.0
 * @link        https://www.apache.org/licenses/LICENSE-2.0
 *
 * SPDX-License-Identifier: Apache-2.0
 */

// Load our driver fro frontend only.
$autoload['drivers'] = ['oauth' => !CI_DASHBOARD];
