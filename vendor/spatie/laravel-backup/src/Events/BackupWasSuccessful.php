<?php

namespace Spatie\Backup\Events;

use Spatie\Backup\BackupDestination\BackupDestination;

class BackupWasSuccessful
{
    /**
     * @var \Spatie\Backup\BackupDestination\BackupDestination
     */
    public $backupDestination;

    /**
     * @param \Spatie\Backup\BackupDestination\BackupDestination $backupDestination
     */
    public function __construct(BackupDestination $backupDestination)
    {
        $this->backupDestination = $backupDestination;
    }
}
