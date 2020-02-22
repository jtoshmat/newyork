<?php

namespace Importer;

/**
 * Class Report
 * @package Importer
 */
class Report
{
    const MERCHANT_ID = 'mid'; // digits only, up to 18 digits
    const MERCHANT_NAME = 'dba'; // string, max length - 100
    const BATCH_DATE = 'batch_date'; // YYYY-MM-DD
    const BATCH_REF_NUM = 'batch_ref_num'; // digits only, up to 24 digits
    const TRANSACTION_DATE = 'trans_date'; // YYYY-MM-DD
    const TRANSACTION_TYPE = 'trans_type'; // string, max length - 20
    const TRANSACTION_CARD_TYPE = 'trans_card_type'; // string, max length - 2, possible values - VI/MC/AX and so on
    const TRANSACTION_CARD_NUMBER = 'trans_card_num'; // string, max length - 20
    const TRANSACTOIN_AMOUNT = 'trans_amount'; // amount, negative values are possible
}
