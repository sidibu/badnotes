<?php
// cli-config.php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

require_once __DIR__ . '/bootstrap.php';

return ConsoleRunner::createHelperSet(getEntityManager()); // Todo: Ensure that there is at most one entityManager