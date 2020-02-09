#Test exercise

## Installation
Run `composer install` to install phpunit and generate `vendor/autoload.php`.

## Schema
Modify `schema.sql` and write SQL queries to create a db for storing a result.

## Importer
Implement `Importer`. Feel free to make any changes you need.

Your implementation need to use `$mapping` in order to find a proper position of a value.
It means you cannot hard code names/positions of the report columns.

Please note, that you should be able to import a huge report that won't fit into the memory completely.

It would be good to have it implemented in pure PHP (+PDO) and "green" tests.

Things to note:
 - Merchant unique key is `Report::MERCHANT_ID`
 - Batch unique key is a combination of `Report::MERCHANT_ID` and `Report::BATCH_DATE` and `Report::BATCH_REF_NUM`
 - Transaction does not have any unique key
 - significant optimizations are welcome (consume less memory, make fewer db queries)
 
## Queries
Modify `queries.sql` and write SQL queries (how to get a proper result from your DB)
