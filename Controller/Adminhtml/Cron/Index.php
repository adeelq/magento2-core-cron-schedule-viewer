<?php

namespace Adeelq\CoreCronScheduleViewer\Controller\Adminhtml\Cron;

use Adeelq\CoreCronScheduleViewer\Controller\Adminhtml\Cron;
use Adeelq\CoreModule\Controller\Adminhtml\AbstractIndex;

class Index extends AbstractIndex
{
    /**
     * @inheritDoc
     */
    const ADMIN_RESOURCE = Cron::ADMIN_RESOURCE;

    /**
     * @inheritDoc
     */
    protected function getLabelTitle(): string
    {
        return 'Cron Schedule';
    }
}
