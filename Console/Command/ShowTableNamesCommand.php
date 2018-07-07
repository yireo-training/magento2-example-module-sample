<?php
/**
 * ExampleModuleSample plugin for Magento
 *
 * @package     Yireo_ExampleModuleSample
 * @author      Yireo (https://www.yireo.com/)
 * @copyright   Copyright 2017 Yireo (https://www.yireo.com/)
 * @license     Open Source License (OSL v3)
 */
declare(strict_types=1);

namespace Yireo\ExampleModuleSample\Console\Command;

use Magento\Setup\Module\Setup;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface as Input;
use Symfony\Component\Console\Output\OutputInterface as Output;

/**
 * Class ShowTableNamesCommand
 *
 * @package Yireo\ExampleModuleSample\Console\Command
 */
class ShowTableNamesCommand extends Command
{
    /**
     * @var Setup
     */
    protected $setup;

    public function __construct(
        Setup $setup,
        $name = null
    ) {
        $this->setup = $setup;

        return parent::__construct($name);
    }

    /**
     * Configure this command
     */
    protected function configure()
    {
        $this->setName('yireo:show-table-names')->setDescription('Show table names');
    }

    /**
     * @param Input $input
     * @param Output $output
     * @return void
     */
    protected function execute(Input $input, Output $output)
    {
        $installer = $this->setup;
        $connection = $installer->getConnection();
        $tableNames = $connection->getTables();

        foreach ($tableNames as $tableName) {
            $output->writeln($tableName);
        }
    }
}
