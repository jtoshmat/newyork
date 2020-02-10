<?php

use Importer\Importer;
use Importer\Report;

include __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$filename = __DIR__ . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'report.csv';
$mapping  = [
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

// TODO: feel free to modify the constructor and pass any dependencies you need (parser, repository, connection, ...)
$importer = new Importer();
$result   = $importer->process($filename, $mapping);

echo sprintf(
    'Imported %d merchants, %d batches, and %d transactions' . PHP_EOL,
    $result->getMerchantCount(),
    $result->getBatchCount(),
    $result->getTransactionCount()
);
