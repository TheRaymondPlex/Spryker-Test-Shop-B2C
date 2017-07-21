<?php

/**
 * This file is part of the Spryker Demoshop.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Importer\Business\Installer\CmsBlock;

use Pyz\Zed\Importer\Business\Installer\AbstractInstaller;

class CmsBlockCategoryConnectorInstaller extends AbstractInstaller
{

    /**
     * @return \Spryker\Service\UtilDataReader\Model\BatchIterator\CountableIteratorInterface
     */
    protected function buildBatchIterator()
    {
        return $this->utilDataReaderService->getCsvBatchIterator($this->getCsvDataFilename());
    }

    /**
     * @return string
     */
    protected function getCsvDataFilename()
    {
        return $this->dataDirectory . 'cms_block_category_connector.csv';
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return 'CMS Blocks Category Connector';
    }

}
