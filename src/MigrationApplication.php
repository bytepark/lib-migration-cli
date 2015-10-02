<?php
/**
 * Class file of bytepark database migration Toolkit CLI application
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

namespace Bytepark\Component\Migration\Cli;

use Bytepark\Component\Migration\Cli\Command\Migrate;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputInterface;

/**
 * Class of bytepark database migration Toolkit CLI application
 *
 * @category   Bytepark
 * @package    Migration
 * @subpackage Cli
 * @author     bytepark GmbH <code@bytepark.de>
 * @license    http://www.bytepark.de proprietary
 * @link       http://www.bytepark.de
 */
class MigrationApplication extends Application
{
    /**
     * Gets the default commands that should always be available.
     *
     * @return array An array of default Command instances
     */
    protected function getDefaultCommands()
    {
        // Keep the core default commands to have the HelpCommand
        // which is used when using the --help option
        $defaultCommands = parent::getDefaultCommands();

        $defaultCommands[] = new Migrate();

        return $defaultCommands;
    }
}
