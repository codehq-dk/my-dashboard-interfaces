<?php

namespace CodeHqDk\MyDashboard\Widget\Type;

use CodeHqDk\MyDashboard\Layout\Slot\LayoutSlotModel;
use CodeHqDk\MyDashboard\Widget\Settings\WidgetTypeSettings;

interface WidgetTypeView
{
    public function setLayoutSlot(LayoutSlotModel $layout_slot): void;

    public function getSettings(): ?WidgetTypeSettings;
}