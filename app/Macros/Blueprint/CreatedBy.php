<?php

namespace App\Macros\Blueprint;

use Illuminate\Database\Schema\Blueprint;

final class CreatedBy
{
    /**
     * Add the `created_by` column to the table.
     */
    public function __invoke(): void
    {
        Blueprint::macro('createdBy', function (string $authorTable = 'users', string $authorColumn = 'user_id') {
            $this->unsignedBigInteger('created_by')->nullable();

            $this->foreign('created_by')
                ->references($authorColumn)
                ->on($authorTable);
        });
    }
}
