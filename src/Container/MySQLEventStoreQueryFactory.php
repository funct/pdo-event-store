<?php
/**
 * This file is part of the prooph/pdo-event-store.
 * (c) 2016-2016 prooph software GmbH <contact@prooph.de>
 * (c) 2016-2016 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Prooph\EventStore\PDO\Container;

use Prooph\EventStore\PDO\Projection\MySQLEventStoreQuery;

final class MySQLEventStoreQueryFactory extends AbstractPDOEventStoreQueryFactory
{
    protected function getInstanceClassName(): string
    {
        return MySQLEventStoreQuery::class;
    }

    protected function getEventStoreFactoryClassName(): string
    {
        return MySQLEventStoreFactory::class;
    }
}