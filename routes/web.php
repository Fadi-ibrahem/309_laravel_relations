<?php

use App\Models\Car;
use App\Models\Category;
use App\Models\Course;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function() {

    /**
     * One to one relationship test
     */
    // how to get customer number 1 car
    // $customer = Customer::find(3);
    // dd($customer->car->name);
    // $car = Car::find(1);
    // dd($car->customer->name);
    /**
     * One to one relationship test
     */



    /**
     * One to many relationship test
     */
    // $product = Product::find(1);
    // dd($product->category->category_name);

    // $category = Category::find(1);
    // $allProducts = $category->products;

    // foreach($allProducts as $product) {
    //     echo $product->product_name . "<br>";
    // }
    /**
     * One to many relationship test
     */


    /**
     * Many to many relationship test
     */
    // $course = Course::find(1);

    // foreach($course->students as $student) {
    //     echo $student->student_name . "<br>";
    // }

    // $student = Student::find(1);
    
    // foreach($student->courses as $course) {
    //     echo $course->course_name . "<br>";
    // }
    // $student = Student::find(3);
    // $coursesIDsArr = [1, 2, 3];

    // $student->courses()->attach($coursesIDsArr);
    /**
     * Many to many relationship test
     */

});
