<?php

namespace Adeelq\CoreCronScheduleViewer\Controller\Adminhtml;

use Magento\Backend\App\Action;

abstract class Cron extends Action
{
    /**
     * @inheritDoc
     */
    const ADMIN_RESOURCE = 'Adeelq_CoreCronScheduleViewer::CoreCronScheduleViewer';
}
