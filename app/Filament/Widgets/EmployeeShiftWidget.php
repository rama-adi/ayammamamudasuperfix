<?php

namespace App\Filament\Widgets;

use App\Models\EmployeeShift;
use Filament\Actions\Action;
use Saade\FilamentFullCalendar\Actions;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;

class EmployeeShiftWidget extends FullCalendarWidget
{
    public function fetchEvents(array $info): array
    {
        return EmployeeShift::query()
            ->where('start_at', '>=', $info['start'])
            ->where('end_at', '<=', $info['end'])
            ->get()
            ->map(fn(EmployeeShift $employeeShift) => [
                'title' => $employeeShift->name . ' Shift',
                'start' => $employeeShift->start_at,
                'end' => $employeeShift->end_at,
                'url' => $this->showShiftAlert($employeeShift)
            ])
            ->all();
    }

    public function showShiftAlert(EmployeeShift $employeeShift): string
    {
        $lines = [
            "SHIFT INFO:",
            "Employee: " . $employeeShift->name,
            "Start shift: " . $employeeShift->start_at,
            "Until: " . $employeeShift->end_at
        ];

        return "javascript:alert('" . implode("\\n", $lines) . "');";
    }
}
