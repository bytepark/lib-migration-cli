<?php
/**
 * Class file of the migrate command
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * PHP version 5.3
 *
 * @category   Bytepark
 * @package    Migration
 * @subpackage Cli
 * @author     bytepark GmbH <code@bytepark.de>
 * @copyright  2015 - bytepark GmbH
 * @license    http://www.bytepark.de proprietary
 * @link       http://www.bytepark.de
 */

namespace Bytepark\Component\Migration\Cli\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class of migrate command
 *
 * @category   Bytepark
 * @package    Migration
 * @subpackage Cli
 * @author     bytepark GmbH <code@bytepark.de>
 * @license    http://www.bytepark.de proprietary
 * @link       http://www.bytepark.de
 */
class Migrate extends Command
{
    protected function configure()
    {
        $this
            ->setName('dispatch')
            ->setDescription('Migrates the workload, if present');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Migrating');
    }
}
