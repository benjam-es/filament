<?php

namespace Filament\Tables\Columns;

use Closure;

class TextColumn extends Column
{
    use Concerns\CanFormatState;

    protected string $view = 'tables::columns.text-column';

    protected bool | Closure $canWrap = false;

    public function wrap(bool | Closure $condition = true): static
    {
        $this->canWrap = $condition;

        return $this;
    }

    public function canWrap(): bool
    {
        return $this->evaluate($this->canWrap);
    }
}
