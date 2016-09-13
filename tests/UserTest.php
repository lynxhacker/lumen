<?php 
use App\Models\User; 
use App\Models\Booking; 
use Laravel\Lumen\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
	/*protected $user, $booking; 

	public function __construct(User $user, Booking $booking)
	{
		$this->user = $user; 
		$this->booking = $booking; 
	}
	
	public function testUserWithBooking1AndId1 ()
	{
		$this->json('POST', '/user/1/booking/1', [])
			 ->seeJson([
			 	'user_id' => 1, 
			 	'booking_id' => 1
			]);

		return $this->assertEquals(200, $this->response->status()); 
	}*/

	public function testUserConnect ()
	{
		$this->json('GET', '/'); 

		return $this->assertEquals(200, $this->response->status()); 
	}
}