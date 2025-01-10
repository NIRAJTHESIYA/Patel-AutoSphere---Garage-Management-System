<?php

use Illuminate\Support\Facades\Route;




// -*-*-*-  Customer view  -*-*-*-



use App\Http\Controllers\HomeController;
Route::get('/Home', [HomeController::class, 'index'])->name('Home');
Route::get('/services/{id}', [HomeController::class, 'show'])->name('services.show');
Route::get('/random-services', [HomeController::class, 'randomServices'])->name('services.random');


use App\Http\Controllers\AboutController;
Route::get('About-us', [AboutController::class, 'index'])->name('About');


use App\Http\Controllers\ServiceController;
Route::get('/S  ervices', [ServiceController::class, 'index'])->name('Services');
Route::get('/service/{id}', [ServiceController::class, 'findservices'])->name('service.show');
Route::get('/services/random', [ServiceController::class, 'fetchRandomService']);
Route::get('/services/random_two', [ServiceController::class, 'fetchRandomService_two']);
Route::get('/services', [ServiceController::class, 'showservice'])->name('services.index');


use App\Http\Controllers\BlogController;
Route::get('Blog', [BlogController::class, 'index'])->name('Blog');


use App\Http\Controllers\GalleryController;
Route::get('Gallery', [GalleryController::class, 'index'])->name('Gallery');


use App\Http\Controllers\TestimonialController;
Route::get('Testimonial', [TestimonialController::class, 'index'])->name('Testimonials');


use App\Http\Controllers\ShopController;
Route::get('Shop', [ShopController::class, 'index'])->name('Shop');
Route::get('cart', [ShopController::class, 'cart'])->name('cart');
Route::get('/product/{product_id}', [ShopController::class, 'showProductDetails'])->name('product_details');
Route::get('/cart', [ShopController::class, 'cart'])->name('shop.cart');
Route::post('/add-to-cart', [ShopController::class, 'addToCart'])->name('shop.add_to_cart');
Route::get('/cart/{cart_id}/{product_id}', [ShopController::class, 'viewProductDetails'])->name('cart.product.details');
Route::get('/cart/{cart_id}/{product_id}/product-details', [ShopController::class, 'viewCartProductDetails'])->name('cart.product_all_details');
Route::get('/cart/remove/{cart_id}', [ShopController::class, 'removeFromCart'])->name('cart.remove');
// Route::post('/cart/order', [ShopController::class, 'cart_order'])->name('cart.order');
// Route::get('/cart/payment', [ShopController::class, 'showpaymentpage'])->name('showpaymentpage');
Route::post('/cart/order', [ShopController::class, 'cart_order'])->name('cart.order');
Route::get('/payment', [ShopController::class, 'showPaymentPage'])->name('payment.page');


use App\Http\Controllers\ContactController;
Route::get('Contact', [ContactController::class, 'index'])->name('Contact');


use App\Http\Controllers\LoginController;
Route::get('Login', [LoginController::class, 'index'])->name('Login');
Route::post('Login', [LoginController::class, 'login'])->name('login.post');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


use App\Http\Controllers\RegistrationController;
Route::get('/Registration', [RegistrationController::class, 'index'])->name('Registration');
Route::post('/Registration', [RegistrationController::class, 'store'])->name('register');
Route::get('/verify-otp', [RegistrationController::class, 'showOtpForm'])->name('otp.verify');
Route::post('/verify-otp', [RegistrationController::class, 'verifyOtp'])->name('otp.verify.post');


use App\Http\Controllers\ForgotpasswordController;
Route::get('/ForgotPassword', [ForgotPasswordController::class, 'index'])->name('ForgotPassword');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLink'])->name('sendResetLink');
Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('resetPassword');
Route::post('/reset-password', [ForgotPasswordController::class, 'resetPassword'])->name('processResetPassword');


use App\Http\Controllers\AccountController;
Route::get('/account', [AccountController::class, 'show'])->name('account');
Route::post('/account/update/{id}', [AccountController::class, 'update'])->name('account.update');
Route::post('/account/delete/{id}', [AccountController::class, 'deleteAccount'])->name('account.delete');
Route::get('appointment_history', [AccountController::class, 'appointment_history'])->name('appointment_history');
Route::get('order_history', [AccountController::class, 'order_history'])->name('order_history');


use App\Http\Controllers\Service_typeController;
Route::get('/service_type', [Service_typeController::class, 'index'])->name('services_type.index');
Route::get('/service_type/show/{id}', [Service_typeController::class, 'show'])->name('services_type.show');


use App\Http\Controllers\AppointmentController;
Route::get('/appointment', [AppointmentController::class, 'show'])->name('appointment');
Route::post('/book-appointment', [AppointmentController::class, 'bookAppointment'])->name('appointment.submit');
Route::post('/fetch-book-slots', [AppointmentController::class, 'fetchBookSlots'])->name('fetchBookSlots');




// -*-*-*-  Admin view  -*-*-*-




use App\Http\Controllers\Admin\Admin_LoginController;
Route::get('/', [Admin_LoginController::class, 'show'])->name('Admin');
Route::post('/admin/store', [Admin_LoginController::class, 'store'])->name('admin.store');
Route::get('/admin/logout', [Admin_LoginController::class, 'logout'])->name('admin.logout');


use App\Http\Controllers\Admin\AdminController;
Route::get('/admin.dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/users', [AdminController::class, 'users'])->name('users');
Route::delete('/admin/users/{id}', [AdminController::class, 'delete'])->name('users.delete');
Route::get('/admin/users/view/{id}', [AdminController::class, 'view'])->name('admin.users.view');
Route::get('admin/report/daily', [AdminController::class, 'generateDailyReport'])->name('report.daily');
Route::get('admin/report/weekly', [AdminController::class, 'generateWeeklyReport'])->name('report.weekly');
Route::get('admin/report/monthly', [AdminController::class, 'generateMonthlyReport'])->name('report.monthly');
Route::get('admin/report/yearly', [AdminController::class, 'generateYearlyReport'])->name('report.yearly');
Route::get('admin/report/all', [AdminController::class, 'generateAllReports'])->name('report.all');
Route::get('/admin/customReport', [AdminController::class, 'customReport'])->name('admin.customReport');
Route::post('/admin/report/generate', [AdminController::class, 'generateReport'])->name('report.generate');
Route::get('/appointments', [AdminController::class, 'showAppointments']);


use App\Http\Controllers\Admin\ServicesController;
Route::get('admin/services', [ServicesController::class, 'index'])->name('admin.services');
Route::delete('/admin/services/{id}', [ServicesController::class, 'destroy'])->name('services.delete');
Route::get('/admin/services/edit/{id}', [ServicesController::class, 'edit'])->name('services.edit');
Route::put('/admin/services/update/{id}', [ServicesController::class, 'update'])->name('services.update');
Route::get('/admin/services/create', [ServicesController::class, 'create'])->name('services.create');
Route::post('/admin/services', [ServicesController::class, 'store'])->name('services.store');


use App\Http\Controllers\Admin\CategoryController;
Route::get('/admin/categories', [CategoryController::class, 'index'])->name('admin.categories');
Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/admin/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/admin/categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/admin/categories/update/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/admin/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.delete');


use App\Http\Controllers\Admin\ProductController;
Route::get('/admin/products', [ProductController::class, 'index'])->name('admin.products');
Route::get('/admin/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/admin/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/admin/products/update/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/admin/products/{id}', [ProductController::class, 'destroy'])->name('products.delete');
Route::get('/admin/product/{id}', [ProductController::class, 'view'])->name('admin.product.view');


use App\Http\Controllers\Admin\AdminAppointmentController;
Route::get('/admin/appointments', [AdminAppointmentController::class, 'index'])->name('admin.appointments');
Route::get('/admin/appointments/view/{appointment}', [AdminAppointmentController::class, 'view'])->name('admin.appointments.view');
Route::delete('/admin/appointments/delete/{appointment}', [AdminAppointmentController::class, 'delete'])->name('appointments.delete');
Route::post('/admin/appointments/{id}/accept', [AdminAppointmentController::class, 'success'])->name('appointment.success');
Route::post('/appointments/{appointment_id}/update-status', [AdminAppointmentController::class, 'updateStatus'])->name('admin.appointments.updateStatus');
Route::get('/appointments/{id}/bill', [AdminAppointmentController::class, 'viewBill'])->name('appointments.bill.view');


use App\Http\Controllers\Admin\Appointment_BillController;
Route::get('/bill/create/{appointment_id}', [Appointment_BillController::class, 'createBill'])->name('admin.bill.create');
Route::post('/generate-bill', [Appointment_BillController::class, 'generateBill'])->name('generate-bill');


use App\Http\Controllers\Admin\TimeslotController;
Route::get('/admin/timeslot', [TimeslotController::class, 'index'])->name('admin.timeslot');
Route::post('/fetch-booked-slots', [TimeslotController::class, 'fetchBookedSlotsForAdmin'])->name('fetchBookedSlots');


use App\Http\Controllers\Admin\CartController;
Route::get('/admin/cart', [CartController::class, 'index'])->name('admin.cart');
Route::delete('/admin/cart/{id}', [CartController::class, 'destroy'])->name('admin.cart.remove');


use App\Http\Controllers\Admin\OrderContorller;
Route::get('/admin/orders', [OrderContorller::class, 'index'])->name('admin.order');


