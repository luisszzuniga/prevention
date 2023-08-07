<?php

namespace Tests\Unit\Repositories;

use App\Models\Center;
use App\Repositories\CenterRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Mockery;
use Tests\TestCase;

class CenterRepositoryTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test the getCenters method of CenterRepository.
     *
     * @return void
     */
    public function testGetCenters()
    {
        $centerMock = Mockery::mock(Center::class);
        $centerMock->shouldReceive('all')->once()->andReturn(new Collection);

        $centerRepository = new CenterRepository($centerMock);

        $result = $centerRepository->getCenters();

        $this->assertInstanceOf(Collection::class, $result);
    }

}

