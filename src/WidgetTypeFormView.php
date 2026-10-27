<?php

namespace CodeHqDk\MyDashboard\Widget\Type;

interface WidgetTypeFormView
{
    public function getLayoutSlotUuid(): ?string;

    public function setLayoutSlotUuid(?string $layout_slot_uuid): void;

    public function getWidgetTypeId(): string;
}