<?php
namespace Report;

include_once 'monthlyreport.php';

class TotalReport extends MonthlyReport {

}

$figures = new TotalReport();
echo $figures->totalDeactivations();