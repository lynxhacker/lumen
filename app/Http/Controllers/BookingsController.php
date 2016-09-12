<?php
	namespace App\Http\Controllers; 

	use App\Models\Category; 
	use App\Models\Booking; 
	use Carbon\Carbon; 
	use App\Http\Controllers\Controller; 
	use Illuminate\Http\Request; 

	class BookingsController extends Controller
	{
		//get all the bookings
		public function all()
		{
			$bookings = Booking::all(); 

			return response()->json($bookings); 
		}

		//get all categories
		public function categories()
		{
			$categories = Category::all(); 

			return response()->json($categories); 
		}

		//show a specific category
		public function showCategory(Request $request, $category_id)
		{
			$category = Category::with('bookings')->find($category_id);
			
			return response()->json($category); 
		}

		//store category
		public function storeCategory(Request $request)
		{
			$category = Category::create($request->all()); 

			return response()->json($category); 
		}

		//store booking
		public function storeBooking(Request $request, $category_id)
		{
			$category = Category::find($category_id); 

			if(!$category)
				dd("Category doesn't exist"); 

			$booking = new Booking; 
			$booking->appointment_name			= $request->get('appointment_name'); 
			$booking->appointment_description	= $request->get('appointment_description'); 
			$booking->time_booked				= Carbon::now(); 
			$booking->category_id				= $category->id; 

			$booking->save(); 

			return response()->json($booking); 
		}

	}