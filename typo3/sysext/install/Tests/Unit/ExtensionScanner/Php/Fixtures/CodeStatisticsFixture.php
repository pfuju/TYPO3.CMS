<?php
declare(strict_types = 1);
namespace TYPO3\CMS\Install\Tests\Unit\ExtensionScanner\Php\Fixtures;

use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * @extensionScannerIgnoreFile
 */
class CodeStatisticsFixture
{
    /**
     * Some comment
     */
    public function aMethod()
    {
        // @extensionScannerIgnoreLine
        $some = 'ignored line';

        // @extensionScannerIgnoreLine
        $some = 'other ignored line';
    }
}
