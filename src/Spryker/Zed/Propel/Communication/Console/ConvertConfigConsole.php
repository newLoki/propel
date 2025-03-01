<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Propel\Communication\Console;

use Spryker\Zed\Kernel\Communication\Console\Console;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * @deprecated Will be removed without replacement.
 *
 * @method \Spryker\Zed\Propel\Business\PropelFacadeInterface getFacade()
 * @method \Spryker\Zed\Propel\Communication\PropelCommunicationFactory getFactory()
 */
class ConvertConfigConsole extends Console
{
    /**
     * @var string
     */
    public const COMMAND_NAME = 'propel:config:convert';

    /**
     * @return void
     */
    protected function configure()
    {
        $this->setName(static::COMMAND_NAME);
        $this->setDescription('Write Propel2 configuration');

        parent::configure();
    }

    /**
     * @param \Symfony\Component\Console\Input\InputInterface $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->info('Write propel config');
        $this->getFacade()->convertConfig();

        return static::CODE_SUCCESS;
    }
}
