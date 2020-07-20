<?php

namespace Tests\Unit;

use Tests\TestCase;

class ListStaffTest extends TestCase
{
    /**
     * test the listing of staff
     *
     * @return void
     */
    public function testStaffList()
    {
	$this->artisan('staff:list')
            ->expectsOutput('Listing all staff')
            ->assertExitCode(0);
    }

    /**
     * test the export of the staff into a csv file 
     *
     * @return void
     */
    public function testStaffExport()
    {
	$this->artisan('staff:export')
            ->expectsOutput('Exporting all staff and salaries')
            ->assertExitCode(0);

	$this->assertTrue(Filesystem::exists('staff-export.csv'));
    }

    /**
     * test the ability to find staff 
     *
     * @return void
     */
    public function testStaffFind()
    {
	$this->artisan('staff:find Julie')
            ->expectsOutput('Julie Walter')
            ->assertExitCode(0);
    }
}
