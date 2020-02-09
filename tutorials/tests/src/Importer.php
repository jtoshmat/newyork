<?php

namespace Importer;

/**
 * Class Importer
 */
class Importer
{
    /**
     * Importer constructor.
     */
    public function __construct()
    {
        // TODO: if needed change the constructor signature and initialize any properties/dependencies here
    }

    /**
     * Imports a given report
     *
     * @param string   $filename Full path to the report
     * @param string[] $mapping  Report mapping
     *
     * @return Result Result of the import process
     */
    public function process(string $filename, array $mapping): Result
    {
        // TODO: implement me

        return new Result();
    }
}
