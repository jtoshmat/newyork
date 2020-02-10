<?php

namespace Tests;

use Importer\Importer;
use Importer\Report;
use PHPUnit\Framework\TestCase;

/**
 * Class ImporterTest
 * @package Tests
 */
class ImporterTest extends TestCase
{
    /**
     * Tests Importer::process
     */
    public function testProcess()
    {
        /** @var Importer $importer */
        $importer = $this->createImporter();
        $result   = $importer->process($this->getFile(), $this->getMapping());

        // 2 merchants
        $this->assertEquals(2, $result->getMerchantCount());

        // with 3 batches
        $this->assertEquals(3, $result->getBatchCount());

        // with 5 transactions
        $this->assertEquals(5, $result->getBatchCount());
    }

    /**
     * Creates an importer instance for testing purposes
     */
    private function createImporter()
    {
        // TODO: implement me

        return new Importer();
    }

    /**
     * Gets a sample report
     *
     * @return string Full path to a sample report
     */
    private function getFile(): string
    {
        return __DIR__ . DIRECTORY_SEPARATOR . 'samples' . DIRECTORY_SEPARATOR . 'small.csv';
    }

    /**
     * Gets a sample mapping
     *
     * @return string[] Sample mapping
     */
    private function getMapping(): array
    {
        return [
            Report::TRANSACTION_DATE => 'Transaction Date',
            Report::TRANSACTION_TYPE => 'Transaction Type',
            Report::TRANSACTION_CARD_TYPE => 'Transaction Card Type',
            Report::TRANSACTION_CARD_NUMBER => 'Transaction Card Number',
            Report::TRANSACTOIN_AMOUNT => 'Transaction Amount',
            Report::BATCH_DATE => 'Batch Date',
            Report::BATCH_REF_NUM => 'Batch Reference Number',
            Report::MERCHANT_ID => 'Merchant ID',
            Report::MERCHANT_NAME => 'Merchant Name',
        ];
    }
}
