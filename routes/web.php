<?php

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

// Route::get('/', function () {
//     return view('panel/layout');
// });

//Auth

Route::get('/', 'LoginController@login')->name('login');
Route::post('checkLogin', 'LoginController@checkLogin')->name('checkLogin');
Route::get('logout', 'LoginController@logout')->name('logout');


Route::group(['middleware' => ['AuthCheck']], function () {

    //organization company
    Route::get('organization/companies', 'OrganizationController@companies')->name('organization.companies');
    Route::post('orgaization/companies/storecompany', 'OrganizationController@storecompany')->name('orgaization.StoreCompany');
    Route::post('orgaization/companies/updatecompany', 'OrganizationController@updatecompany')->name('orgaization.updatecompany');
    Route::get('orgaization/loadcompanies', 'OrganizationController@loadcompanies')->name('orgaization.loadcompanies');
    Route::get('organization/companies/edit/{id}', 'OrganizationController@edit')->name('orgaization.edit');
    Route::get('organization/companies/view/{id}', 'OrganizationController@view')->name('orgaization.view');
    Route::get('organization/companies/delete/{id}', 'OrganizationController@delete')->name('orgaization.delete');
    Route::get('organization/companies/bulkdelete/{arr}', 'OrganizationController@bulkdelete')->name('orgaization.bulkddelete');

    //location masters
    Route::get('company_masters/location', 'LocationController@location')->name('company_masters.location');
    Route::post('company_masters/location/storelocation', 'LocationController@storelocation')->name('company_masters.storelocation');
    Route::get('company_masters/location/edit/{id}', 'LocationController@edit')->name('company_masters.editlocation');
    Route::post('company_masters/location/update', 'LocationController@update')->name('company_masters.updatelocation');
    Route::get('company_masters/location/delete/{id}', 'LocationController@delete')->name('company_masters.deletelocation');


    //Project masters
    Route::get('company_masters/projects', 'ProjectController@projects')->name('company_masters.projects');
    Route::post('company_masters/projects/store', 'ProjectController@store')->name('company_masters.stroreproject');
    Route::get('company_masters/projects/edit/{id}', 'ProjectController@edit')->name('company_masters.editproject');
    Route::post('company_masters/projects/update', 'ProjectController@update')->name('company_masters.updateproject');
    Route::get('company_masters/projects/delete/{id}', 'ProjectController@delete')->name('company_masters.deleteproject');

    //department masters
    Route::get('masters/company_masters/department', 'DepartmentController@department')->name('company_masters.department');
    Route::post('company_masters/department/store', 'DepartmentController@store')->name('company_masters.stroredepartment');
    Route::get('company_masters/department/loadproject/{id}', 'DepartmentController@loadprojects')->name('company_masters.loadprojects');
    Route::get('company_masters/department/edit/{id}', 'DepartmentController@edit')->name('company_masters.editdepartment');
    Route::post('company_masters/department/update', 'DepartmentController@update')->name('company_masters.updatedepartment');
    Route::get('company_masters/department/delete/{id}', 'DepartmentController@delete')->name('company_masters.deletedepartment');

    //designation masters
    Route::get('masters/company_masters/designation', 'DesignationController@designation')->name('company_masters.designation');
    Route::post('company_masters/designation/store', 'DesignationController@store')->name('company_masters.stroredesignation');
    Route::get('company_masters/designation/edit/{id}', 'DesignationController@edit')->name('company_masters.editdesignation');
    Route::post('company_masters/designation/update', 'DesignationController@update')->name('company_masters.updatedesignation');
    Route::get('company_masters/designation/delete/{id}', 'DesignationController@delete')->name('company_masters.deletedesignation');

    //Grade master
    Route::get('masters/company_masters/grade', 'GradeController@grade')->name('company_masters.grade');
    Route::get('masters/company_masters/getDesignations/{company_id}', 'GradeController@getDesignations')->name('company_masters.getDesignations');
    Route::post('company_masters/grade/store', 'GradeController@store')->name('company_masters.storegrade');
    Route::get('company_masters/grade/edit/{id}', 'GradeController@edit')->name('company_masters.editgrade');
    Route::post('company_masters/grade/update', 'GradeController@update')->name('company_masters.updategrade');
    Route::get('company_masters/grade/delete/{id}', 'GradeController@delete')->name('company_masters.deletegrade');

    //employees masters
    Route::get('masters/hr_masters/employeelist', 'EmployeelistCotroller@employeelist')->name('hr_masters.employeelist');


    //officeshift master
    Route::get('masters/hr_masters/officeshift', 'OfficeshiftController@officeshift')->name('hr_masters.officeshift');
    Route::post('hr_masters/officeshift/storeofficeshift', 'OfficeshiftController@store')->name('hr_masters.storeofficeshift');
    Route::get('hr_masters/officeshift/edit/{id}', 'OfficeshiftController@edit')->name('hr_masters.editofficeshift');
    Route::post('hr_masters/officeshift/update', 'OfficeshiftController@update')->name('hr_masters.updateofficeshift');
    Route::get('hr_masters/officeshift/delete/{id}', 'OfficeshiftController@delete')->name('hr_masters.deleteofficeshift');


    Route::get('dashboard', 'DashboardController@dashboard')->name('dashboard');
    Route::get('profile', 'ProfileController@profile')->name('profile');

    //allowances
    Route::get('masters/salary_masters/allowances', 'SalaryMastersController@allowances')->name('salary_masters.allowances');
    Route::post('salary_masters/allowances/storeallowances', 'SalaryMastersController@storeallowances')->name('salary_masters.storeallowances');
    Route::get('salary_masters/allowaces/edit/{id}', 'SalaryMastersController@edit')->name('salary_masters.editallowances');
    Route::post('salary_masters/allowances/update', 'SalaryMastersController@update')->name('salary_masters.updateallowances');
    Route::get('salary_masters/allowaces/delete/{id}', 'SalaryMastersController@delete')->name('salary_masters.deleteallowances');

    //Deduction
    Route::get('masters/salary_masters/deduction', 'DeductionController@deduction')->name('salary_masters.deduction');
    Route::post('salary_masters/deduction/storededuction', 'DeductionController@store')->name('salary_masters.storededuction');
    Route::get('salary_masters/deduction/edit/{id}', 'DeductionController@edit')->name('salary_masters.editdeduction');
    Route::post('salary_masters/deduction/update', 'DeductionController@update')->name('salary_masters.updatededuction');
    Route::get('salary_masters/deduction/delete/{id}', 'DeductionController@delete')->name('salary_masters.deletededuction');


    //Employee
    Route::get('employee', 'EmployeeController@employee')->name('employee');
    Route::get('employee/loaddata/{company_id}', 'EmployeeController@fetchCompanyBasedData')->name('loaddata');
    Route::post('employee/store', 'EmployeeController@store')->name('employee.store');
    Route::get('employee/delete/{id}', 'EmployeeController@delete')->name('employee.delete');
    Route::get('employee/view/{id}', 'EmployeeController@view')->name('employee.view');

    //employee basic
    Route::get('employee/basicinfo/{id}', 'EmployeeController@basicinfo')->name('employee.basicinfo');
    Route::post('employee/updatebasicinfo', 'EmployeeController@updatebasicinfo')->name('employee.updatebasicinfo');

    //employee immigration
    Route::post('employee/addimmigration', 'EmployeeController@addimmigration')->name('employee.addimmigration');


    //employee profile pic
    Route::post('employee/addprofile', 'EmployeeProfileController@addprofile')->name('employee.addprofile');

    //Leave Master
    Route::get('LeaveType', 'LeaveController@LeaveType')->name('LeaveType');
    Route::post('storeLeaveType', 'LeaveController@storeLeaveType')->name('storeLeaveType');
    Route::get('deleteLeaveType/{id}', 'LeaveController@deleteLeaveType')->name('deleteLeaveType');
    Route::get('editLeaveType/{id}', 'LeaveController@editLeaveType')->name('editLeaveType');
    Route::post('updateLeaveType', 'LeaveController@updateLeaveType')->name('updateLeaveType');

    //Leave Master
    Route::get('Holiday', 'HolidayController@Holiday')->name('Holiday');
    Route::post('storeHoliday', 'HolidayController@storeHoliday')->name('storeHoliday');
    Route::get('deleteHoliday/{id}', 'HolidayController@deleteHoliday')->name('deleteHoliday');
    Route::get('editHoliday/{id}', 'HolidayController@editHoliday')->name('editHoliday');
    Route::post('updateHoliday', 'HolidayController@updateHoliday')->name('updateHoliday');


    //Attendance 
    Route::get('attendance', 'AttendanceController@attendance')->name('attendance');
    Route::get('getAllEmployees/{company_id}', 'AttendanceController@getAllEmployees')->name('getAllEmployees');
    Route::get('saveMonthlyAttendance', 'AttendanceController@saveMonthlyAttendance')->name('saveMonthlyAttendance');

    //Employee Status
    Route::get('employee-status', 'EmployeeStatus@employee_status')->name('employee-status');

    //master/hr-document
    Route::namespace("admin\master\hr_document")->name('hr_document.')->prefix('masters/document')->group(function () {
        Route::get('/offer-letter', 'OfferLetter@offer_letter')->name('offer-letter');
        Route::post('/store-offer-letter', 'OfferLetter@store_offer_letter')->name('store-offer-letter');
        Route::get('/delete-offer-letter', 'OfferLetter@delete_offer_letter')->name('delete-offer-letter');
        Route::get('/get_offer_letter_record', 'OfferLetter@get_offer_letter_record')->name('get_offer_letter_record');        
       
        Route::get('/appointment-letter', 'AppointmentLetter@appointment_letter')->name('appointment-letter');
        Route::post('/store-appointment-letter', 'AppointmentLetter@store_appointment_letter')->name('store-appointment-letter');
        Route::get('/delete-appointment-letter', 'AppointmentLetter@delete_appointment_letter')->name('delete-appointment-letter');
        Route::get('/get_appointment_letter_record', 'AppointmentLetter@get_appointment_letter_record')->name('get_appointment_letter_record');
       
        Route::get('/complaint', 'Complaint@complaint')->name('complaint');
        Route::post('/store-complaint', 'Complaint@store_complaint')->name('store-complaint');
        Route::get('/delete-complaint', 'Complaint@delete_complaint')->name('delete-complaint');
        Route::get('/get_complaint_record', 'Complaint@get_complaint_record')->name('get_complaint_record');
     
       
        Route::get('/confirmation-letter', 'ConfirmationLetter@confirmation_letter')->name('confirmation-letter');
        Route::post('/store-confirmation-letter', 'ConfirmationLetter@store_confirmation_letter')->name('store-confirmation-letter');
        Route::get('/delete-confirmation-letter', 'ConfirmationLetter@delete_confirmation_letter')->name('delete-confirmation-letter');
        Route::get('/get_confirmation_letter_record', 'ConfirmationLetter@get_confirmation_letter_record')->name('get_confirmation_letter_record');
       
  
        Route::get('/award', 'Award@award')->name('award');
    });

    //master/admin-master
    Route::namespace("admin\master\admin_master")->name('admin_master.')->prefix('masters/admin-master')->group(function () {
        Route::get('/expenses-category', 'ExpenseCategory@expenses_category')->name('expenses-category');
    });

    //master/assets_masters
    Route::namespace("admin\master\asset_master")->name('assets_masters.')->prefix('masters/assets-masters')->group(function () {
        Route::get('/assets-category', 'AssetsCategory@assets_category')->name('assets-category');
        Route::get('/assets', 'Assets@assets')->name('assets');
        Route::get('/category', 'Category@category')->name('category');
        Route::get('/company-assets', 'CompanyAssets@company_assets')->name('company-assets');
    });

//master/employee-master
    Route::namespace('admin\master\employee_master')->name('employees_masters.')->prefix('masters/employee-masters')->group(function () {
        Route::get('/employee-master', 'EmployeeMaster@employee_master')->name('employee-master');
        Route::get('/official-details', 'OfficialDetails@official_details')->name('official-details');
        Route::get('/other-master', 'OtherMaster@other_master')->name('other-master');
    });


    //master/bank master
    Route::namespace('admin\master\bank_master')->name('banks_masters.')->prefix('masters/bank-masters')->group(function () {
        Route::get('/employer-bank', 'EmployerBank@employer_bank')->name('employer-bank');
        Route::get('/salary-bank', 'SalaryBank@salary_bank')->name('salary-bank');
    });

    //master/statutory_master
    Route::namespace('admin\master\statutory_master')->name('statutory_masters.')->prefix('masters/statutory-masters')->group(function () {
        Route::get('/employee-pf-master', 'EmployeePF@employee_pf_master')->name('employee-pf-master');
        Route::get('/ESIC-master', 'ESICMaster@esic_master')->name('ESIC-master');
        Route::get('/gratuity', 'Gratuity@gratuity')->name('gratuity');
        Route::get('/income-tax-master', 'IncomeTaxMaster@income_tax_master')->name('income-tax-master');
        Route::get('/profession-tax-master', 'ProfessionTaxMaster@profession_tax_master')->name('profession-tax-master');
    });

   //Statutory Reports/Event-Meeting
   Route::namespace('admin\statutory_reports\event_and_meetings')->name('event_and_meetings.')->prefix('statutory-reports/event-and-meetings')->group(function () {
    Route::get('/event', 'Events@events')->name('event');
    Route::get('/meeting', 'Meetings@meeting')->name('meeting');
});

   //Statutory Reports/Training
   Route::namespace('admin\statutory_reports\training')->name('training.')->prefix('statutory-reports/training')->group(function () {
    Route::get('/trainer', 'Trainer@trainer')->name('trainer');
    Route::get('/training-list', 'TrainingList@training_list')->name('training-list');
});

//Admin Reports
Route::namespace('admin\admin_reports')->name('admin-reports.')->prefix('admin-reports/')->group(function () {
    Route::get('/expence-report', 'ExpenceReport@expence_report')->name('expence-report');
    Route::get('/job-post', 'JobPost@job_post')->name('job-post');
});

      //admin\general_master
      Route::namespace('admin\general_master')->name('general-master.')->prefix('general-master')->group(function () {
        Route::get('/award', 'Award@award')->name('award');
        Route::post('/store-award', 'Award@store_award')->name('store-award');
        Route::get('/delete-award-record', 'Award@delete_award_record')->name('delete-award-record');
        Route::get('/get-award-record', 'Award@get_award_record')->name('get-award-record');
        
    });

     //UserManagement
     Route::namespace('admin\user_management')->name('user_management.')->prefix('user-management')->group(function () {
        Route::get('/user-management', 'UserManagement@user_management')->name('user-management');
    });
    
    //ajax call to get data
    Route::get('/get_department_by_company', 'DepartmentController@get_department_by_company')->name('get_department_by_company');
    Route::get('/get_location_by_company', 'LocationController@get_location_by_company')->name('get_location_by_company');
    Route::get('/get_employee_by_company', 'EmployeeController@get_employee_by_company')->name('get_employee_by_company');





});
