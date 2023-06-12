<?php


use App\Models\Offer;
use App\Repositories\OfferRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Tests\TestCase;

class OfferRepositoryTest extends TestCase
{

    use RefreshDatabase;

    public function testGetAllOffers()
    {
        $offerMock = Mockery::mock(Offer::class);
        $offerMock->shouldReceive('all')->once()->andReturn(new Collection);

        $offerRepository = new OfferRepository($offerMock);

        $result = $offerRepository->getAllOffers();

        $this->assertInstanceOf(Collection::class, $result);
    }
}
