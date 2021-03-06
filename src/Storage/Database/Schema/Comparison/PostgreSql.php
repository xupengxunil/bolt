<?php

namespace Bolt\Storage\Database\Schema\Comparison;

use Doctrine\DBAL\Schema\TableDiff;

/**
 * Comparison handling for PostgreSQL platforms.
 *
 * @author Gawain Lynch <gawain.lynch@gmail.com>
 */
class PostgreSql extends BaseComparator
{
    /** @var string */
    protected $platform = 'postgresql';

    /**
     * {@inheritdoc}
     */
    protected function setIgnoredChanges()
    {
        $this->ignoredChanges[] = new IgnoredChange('changedColumns', 'type', 'string', 'json');
        $this->ignoredChanges[] = new IgnoredChange('changedColumns', 'type', 'text', 'json');
        $this->ignoredChanges[] = new IgnoredChange('changedColumns', 'type', 'json_array', 'json');
    }

    /**
     * {@inheritdoc}
     */
    protected function removeIgnoredChanges(TableDiff $diff)
    {
    }
}
