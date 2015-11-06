<?php
/**
 * Class file of the status command
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
 * Class of status command
 *
 * @category   Bytepark
 * @package    Migration
 * @subpackage Cli
 * @author     bytepark GmbH <code@bytepark.de>
 * @license    http://www.bytepark.de proprietary
 * @link       http://www.bytepark.de
 */
class Status extends Command
{
    private static $targets = ['source', 'history'];

    /**
     * @inheritdoc
     *
     * @throws \InvalidArgumentException
     */
    protected function configure()
    {
        $this
            ->setName('status')
            ->setDescription('Shows the status of the given target. Valid targets are <info>source</info> and <info>history</info>.')
            ->addArgument(
                'target',
                InputArgument::REQUIRED,
                'Status of the target <info><target>[source, history]</info>.'
            );
    }

    /**
     * @inheritdoc
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $target = $input->getArgument('target');

        if (!in_array($target, self::$targets, true)) {
            throw new \InvalidArgumentException(sprintf('Target "%s" not available. Choose one of %s', $target, implode(', ', self::$targets)));
        }

        $output->writeln(sprintf('Status for target "%s"', $target));
    }
}
