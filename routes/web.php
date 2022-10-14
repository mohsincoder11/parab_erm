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
    Route::get('/get-allowance-by-company', 'SalaryMastersController@get_allowance_by_company')->name('get-allowance-by-company');

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

    Route::get('get-employee-status', 'EmployeeStatus@get_employee_status')->name('get-employee-status');
    Route::post('store-employee-status', 'EmployeeStatus@store_employee_status')->name('store-employee-status');
    Route::get('delete-employee-status', 'EmployeeStatus@delete_employee_status')->name('delete-employee-status');
    Route::get('edit-employee-status', 'EmployeeStatus@edit_employee_status')->name('edit-employee-status');
    Route::post('update-employee-status', 'EmployeeStatus@update_employee_status')->name('update-employee-status');


    //master/hr-document
    Route::namespace("admin\master\hr_document")->name('hr_document.')->prefix('masters/document')->group(function () {
        Route::get('/offer-letter', 'OfferLetter@offer_letter')->name('offer-letter');
        Route::post('/store-offer-letter', 'OfferLetter@store_offer_letter')->name('store-offer-letter');
        Route::get('/delete-offer-letter', 'OfferLetter@delete_offer_letter')->name('delete-offer-letter');
        Route::get('/edit-offer-letter', 'OfferLetter@edit_offer_letter')->name('edit-offer-letter');
        Route::post('/update-offer-letter', 'OfferLetter@update_offer_letter')->name('update-offer-letter');
        Route::get('/get_offer_letter_record', 'OfferLetter@get_offer_letter_record')->name('get_offer_letter_record');

        Route::get('/appointment-letter', 'AppointmentLetter@appointment_letter')->name('appointment-letter');
        Route::post('/store-appointment-letter', 'AppointmentLetter@store_appointment_letter')->name('store-appointment-letter');
        Route::get('/delete-appointment-letter', 'AppointmentLetter@delete_appointment_letter')->name('delete-appointment-letter');
        Route::get('/edit-appointment-letter', 'AppointmentLetter@edit_appointment_letter')->name('edit-appointment-letter');
        Route::post('/update-appointment-letter', 'AppointmentLetter@update_appointment_letter')->name('update-appointment-letter');
        Route::get('/get_appointment_letter_record', 'AppointmentLetter@get_appointment_letter_record')->name('get_appointment_letter_record');

        Route::get('/complaint', 'Complaint@complaint')->name('complaint');
        Route::post('/store-complaint', 'Complaint@store_complaint')->name('store-complaint');
        Route::get('/delete-complaint', 'Complaint@delete_complaint')->name('delete-complaint');
        Route::get('/edit-complaint', 'Complaint@edit_complaint')->name('edit-complaint');
        Route::post('/update-complaint', 'Complaint@update_complaint')->name('update-complaint');
        Route::get('/get_complaint_record', 'Complaint@get_complaint_record')->name('get_complaint_record');


        Route::get('/confirmation-letter', 'ConfirmationLetter@confirmation_letter')->name('confirmation-letter');
        Route::post('/store-confirmation-letter', 'ConfirmationLetter@store_confirmation_letter')->name('store-confirmation-letter');
        Route::get('/delete-confirmation-letter', 'ConfirmationLetter@delete_confirmation_letter')->name('delete-confirmation-letter');
        Route::get('/edit-confirmation-letter', 'ConfirmationLetter@edit_confirmation_letter')->name('edit-confirmation-letter');
        Route::post('/update-confirmation-letter', 'ConfirmationLetter@update_confirmation_letter')->name('update-confirmation-letter');
        Route::get('/get_confirmation_letter_record', 'ConfirmationLetter@get_confirmation_letter_record')->name('get_confirmation_letter_record');


        Route::get('/award', 'Award@award')->name('award');
    });

    //master/admin-master
    Route::namespace("admin\master\admin_master")->name('admin_master.')->prefix('masters/admin-master')->group(function () {
        Route::get('/expenses-category', 'ExpenseCategory@expenses_category')->name('expenses-category');
        Route::post('/store-expenses-category', 'ExpenseCategory@store_expenses_category')->name('store-expenses-category');
        Route::post('/update-expenses-category', 'ExpenseCategory@update_expenses_category')->name('update-expenses-category');
        Route::get('/edit-expenses-category', 'ExpenseCategory@edit_expenses_category')->name('edit-expenses-category');
        Route::get('/delete-expenses-category', 'ExpenseCategory@delete_expenses_category')->name('delete-expenses-category');
        Route::get('/get-expenses-category-record', 'ExpenseCategory@get_expenses_category_record')->name('get-expenses-category-record');

        Route::get('/vendor-category', 'VendorCategory@vendor_category')->name('vendor-category');
        Route::post('/store-vendor-category', 'VendorCategory@store_vendor_category')->name('store-vendor-category');
        Route::post('/update-vendor-category', 'VendorCategory@update_vendor_category')->name('update-vendor-category');
        Route::get('/edit-vendor-category', 'VendorCategory@edit_vendor_category')->name('edit-vendor-category');
        Route::get('/delete-vendor-category', 'VendorCategory@delete_vendor_category')->name('delete-vendor-category');
        Route::get('/get-vendor-category-record', 'VendorCategory@get_vendor_category_record')->name('get-vendor-category-record');

        Route::get('/vendor-details', 'VendorDetails@vendor_details')->name('vendor-details');
        Route::post('/store-vendor-details', 'VendorDetails@store_vendor_details')->name('store-vendor-details');
        Route::post('/update-vendor-details', 'VendorDetails@update_vendor_details')->name('update-vendor-details');
        Route::get('/edit-vendor-details', 'VendorDetails@edit_vendor_details')->name('edit-vendor-details');
        Route::get('/delete-vendor-details', 'VendorDetails@delete_vendor_details')->name('delete-vendor-details');
        Route::get('/get-vendor-details-record', 'VendorDetails@get_vendor_details_record')->name('get-vendor-details-record');

        Route::get('/admin-documents', 'AdminDocuments@admin_documents')->name('admin-documents');
        Route::post('/store-admin-documents', 'AdminDocuments@store_admin_documents')->name('store-admin-documents');
        Route::post('/update-admin-documents', 'AdminDocuments@update_admin_documents')->name('update-admin-documents');
        Route::get('/edit-admin-documents', 'AdminDocuments@edit_admin_documents')->name('edit-admin-documents');
        Route::get('/delete-admin-documents', 'AdminDocuments@delete_admin_documents')->name('delete-admin-documents');
        Route::get('/get-admin-documents-record', 'AdminDocuments@get_admin_documents_record')->name('get-admin-documents-record');
    });

    //master/assets_masters
    Route::namespace("admin\master\asset_master")->name('assets_masters.')->prefix('masters/assets-masters')->group(function () {
        Route::get('/assets', 'Assets@assets')->name('assets');
        Route::post('/store-assets', 'Assets@store_assets')->name('store-assets');
        Route::post('/update-assets', 'Assets@update_assets')->name('update-assets');
        Route::get('/edit-assets', 'Assets@edit_assets')->name('edit-assets');
        Route::get('/delete-assets', 'Assets@delete_assets')->name('delete-assets');
        Route::get('/get-assets', 'Assets@get_assets')->name('get-assets');

    

        Route::get('/category', 'Category@category')->name('category');
        Route::post('/store-category', 'Category@store_category')->name('store-category');
        Route::post('/update-category', 'Category@update_category')->name('update-category');
        Route::get('/edit-category', 'Category@edit_category')->name('edit-category');
        Route::get('/delete-category', 'Category@delete_category')->name('delete-category');

        Route::get('/company-assets', 'CompanyAssets@company_assets')->name('company-assets');
        Route::post('/store-company-assets', 'CompanyAssets@store_company_assets')->name('store-company-assets');
        Route::post('/update-company-assets', 'CompanyAssets@update_company_assets')->name('update-company-assets');
        Route::get('/edit-company-assets', 'CompanyAssets@edit_company_assets')->name('edit-company-assets');
        Route::get('/delete-company-assets', 'CompanyAssets@delete_company_assets')->name('delete-company-assets');
        Route::get('/get-company-assets', 'CompanyAssets@get_company_assets')->name('get-company-assets');
    });

    //master/employee-master
    Route::namespace('admin\master\employee_master')->name('employees_masters.')->prefix('masters/employee-masters')->group(function () {
        Route::get('/official-details', 'OfficialDetails@official_details')->name('official-details');
        Route::post('/store-official-details', 'OfficialDetails@store_official_details')->name('store-official-details');
        Route::get('/edit-official-details', 'OfficialDetails@edit_official_details')->name('edit-official-details');
        Route::post('/update-official-details', 'OfficialDetails@update_official_details')->name('update-official-details');
        Route::get('/delete-official-details', 'OfficialDetails@delete_official_details')->name('delete-official-details');
        Route::get('/get-official-details', 'OfficialDetails@get_official_details')->name('get-official-details');

        Route::get('/personal-details', 'PersonalDetail@personal_details')->name('personal-details');
        Route::post('/store-personal-details', 'PersonalDetail@store_personal_details')->name('store-personal-details');
        Route::get('/edit-personal-details', 'PersonalDetail@edit_personal_details')->name('edit-personal-details');
        Route::post('/update-personal-details', 'PersonalDetail@update_personal_details')->name('update-personal-details');
        Route::get('/delete-personal-details', 'PersonalDetail@delete_personal_details')->name('delete-personal-details');
        Route::get('/get-personal-details', 'PersonalDetail@get_personal_details')->name('get-personal-details');

        Route::get('/qualification-details', 'QualificationDetail@qualification_details')->name('qualification-details');
        Route::post('/store-qualification-details', 'QualificationDetail@store_qualification_details')->name('store-qualification-details');
        Route::get('/edit-qualification-details', 'QualificationDetail@edit_qualification_details')->name('edit-qualification-details');
        Route::post('/update-qualification-details', 'QualificationDetail@update_qualification_details')->name('update-qualification-details');
        Route::get('/delete-qualification-details', 'QualificationDetail@delete_qualification_details')->name('delete-qualification-details');
        Route::get('/get-qualification-details', 'QualificationDetail@get_qualification_details')->name('get-qualification-details');


        Route::get('/salary-details', 'SalaryDetail@salary_details')->name('salary-details');
        Route::post('/store-salary-details', 'SalaryDetail@store_salary_details')->name('store-salary-details');
        Route::get('/edit-salary-details', 'SalaryDetail@edit_salary_details')->name('edit-salary-details');
        Route::post('/update-salary-details', 'SalaryDetail@update_salary_details')->name('update-salary-details');
        Route::get('/delete-salary-details', 'SalaryDetail@delete_salary_details')->name('delete-salary-details');
        Route::get('/get-salary-details', 'SalaryDetail@get_salary_details')->name('get-salary-details');


        Route::get('/statutory-details', 'StatutoryDetail@statutory_details')->name('statutory-details');
        Route::post('/store-statutory-details', 'StatutoryDetail@store_statutory_details')->name('store-statutory-details');
        Route::get('/edit-statutory-details', 'StatutoryDetail@edit_statutory_details')->name('edit-statutory-details');
        Route::post('/update-statutory-details', 'StatutoryDetail@update_statutory_details')->name('update-statutory-details');
        Route::get('/delete-statutory-details', 'StatutoryDetail@delete_statutory_details')->name('delete-statutory-details');
        Route::get('/get-statutory-details', 'StatutoryDetail@get_statutory_details')->name('get-statutory-details');


        Route::get('/assetperk-details', 'AssetPerkDetail@assetperk_details')->name('assetperk-details');
        Route::post('/store-assetperk-details', 'AssetPerkDetail@store_assetperk_details')->name('store-assetperk-details');
        Route::get('/edit-assetperk-details', 'AssetPerkDetail@edit_assetperk_details')->name('edit-assetperk-details');
        Route::post('/update-assetperk-details', 'AssetPerkDetail@update_assetperk_details')->name('update-assetperk-details');
        Route::get('/delete-assetperk-details', 'AssetPerkDetail@delete_assetperk_details')->name('delete-assetperk-details');
        Route::get('/get-assetperk-details', 'AssetPerkDetail@get_assetperk_details')->name('get-assetperk-details');


        Route::get('/master', 'Master@master')->name('master');

        //Leave Type Master
        Route::post('/store-leave-type', 'Master@store_leave_type')->name('store-leave-type');
        Route::post('/update-leave-type', 'Master@update_leave_type')->name('update-leave-type');
        Route::get('/delete-leave-type', 'Master@delete_leave_type')->name('delete-leave-type');
        Route::get('/edit-leave-type', 'Master@edit_leave_type')->name('edit-leave-type');

        //Award Type Master
        Route::post('/store-award-type', 'Master@store_award_type')->name('store-award-type');
        Route::post('/update-award-type', 'Master@update_award_type')->name('update-award-type');
        Route::get('/delete-award-type', 'Master@delete_award_type')->name('delete-award-type');
        Route::get('/edit-award-type', 'Master@edit_award_type')->name('edit-award-type');

        //Warning Type Master
        Route::post('/store-warning-type', 'Master@store_warning_type')->name('store-warning-type');
        Route::post('/update-warning-type', 'Master@update_warning_type')->name('update-warning-type');
        Route::get('/delete-warning-type', 'Master@delete_warning_type')->name('delete-warning-type');
        Route::get('/edit-warning-type', 'Master@edit_warning_type')->name('edit-warning-type');

        //Termination Type Master
        Route::post('/store-termination-type', 'Master@store_termination_type')->name('store-termination-type');
        Route::post('/update-termination-type', 'Master@update_termination_type')->name('update-termination-type');
        Route::get('/delete-termination-type', 'Master@delete_termination_type')->name('delete-termination-type');
        Route::get('/edit-termination-type', 'Master@edit_termination_type')->name('edit-termination-type');

        //Expense Type Master
        Route::post('/store-expense-type', 'Master@store_expense_type')->name('store-expense-type');
        Route::post('/update-expense-type', 'Master@update_expense_type')->name('update-expense-type');
        Route::get('/delete-expense-type', 'Master@delete_expense_type')->name('delete-expense-type');
        Route::get('/edit-expense-type', 'Master@edit_expense_type')->name('edit-expense-type');


        //employee_status Type Master
        Route::post('/store-employee_status-type', 'Master@store_employee_status_type')->name('store-employee_status-type');
        Route::post('/update-employee_status-type', 'Master@update_employee_status_type')->name('update-employee_status-type');
        Route::get('/delete-employee_status-type', 'Master@delete_employee_status_type')->name('delete-employee_status-type');
        Route::get('/edit-employee_status-type', 'Master@edit_employee_status_type')->name('edit-employee_status-type');


        //document Type Master
        Route::post('/store-document-type', 'Master@store_document_type')->name('store-document-type');
        Route::post('/update-document-type', 'Master@update_document_type')->name('update-document-type');
        Route::get('/delete-document-type', 'Master@delete_document_type')->name('delete-document-type');
        Route::get('/edit-document-type', 'Master@edit_document_type')->name('edit-document-type');



        Route::get('/other-master', 'OtherMaster@other_master')->name('other-master');

        //Arrangement Methods
        Route::post('/store-arrangement_method-type', 'OtherMaster@store_arrangement_method_type')->name('store-arrangement_method-type');
        Route::post('/update-arrangement_method-type', 'OtherMaster@update_arrangement_method_type')->name('update-arrangement_method-type');
        Route::get('/delete-arrangement_method-type', 'OtherMaster@delete_arrangement_method_type')->name('delete-arrangement_method-type');
        Route::get('/edit-arrangement_method-type', 'OtherMaster@edit_arrangement_method_type')->name('edit-arrangement_method-type');

        //Payment Type
        Route::post('/store-payment-type', 'OtherMaster@store_payment_type')->name('store-payment-type');
        Route::post('/update-payment-type', 'OtherMaster@update_payment_type')->name('update-payment-type');
        Route::get('/delete-payment-type', 'OtherMaster@delete_payment_type')->name('delete-payment-type');
        Route::get('/edit-payment-type', 'OtherMaster@edit_payment_type')->name('edit-payment-type');


        //job category
        Route::post('/store-job_category', 'OtherMaster@store_job_category')->name('store-job-category');
        Route::post('/update-job_category', 'OtherMaster@update_job_category')->name('update-job-category');
        Route::get('/delete-job_category', 'OtherMaster@delete_job_category')->name('delete-job-category');
        Route::get('/edit-job_category', 'OtherMaster@edit_job_category')->name('edit-job-category');

        //Education Level
        Route::post('/store-education_level', 'OtherMaster@store_education_level')->name('store-education-level');
        Route::post('/update-education_level', 'OtherMaster@update_education_level')->name('update-education-level');
        Route::get('/delete-education_level', 'OtherMaster@delete_education_level')->name('delete-education-level');
        Route::get('/edit-education_level', 'OtherMaster@edit_education_level')->name('edit-education-level');


        //Language skill
        Route::post('/store-language_skill', 'OtherMaster@store_language_skill')->name('store-language-skill');
        Route::post('/update-language_skill', 'OtherMaster@update_language_skill')->name('update-language-skill');
        Route::get('/delete-language_skill', 'OtherMaster@delete_language_skill')->name('delete-language-skill');
        Route::get('/edit-language_skill', 'OtherMaster@edit_language_skill')->name('edit-language-skill');

        //skill
        Route::post('/store-skills', 'OtherMaster@store_skills')->name('store-skills');
        Route::post('/update-skills', 'OtherMaster@update_skills')->name('update-skills');
        Route::get('/delete-skills', 'OtherMaster@delete_skills')->name('delete-skills');
        Route::get('/edit-skills', 'OtherMaster@edit_skills')->name('edit-skills');
    });


    //master/bank master
    Route::namespace('admin\master\bank_master')->name('banks_masters.')->prefix('masters/bank-masters')->group(function () {
        Route::get('/employer-bank', 'EmployerBank@employer_bank')->name('employer-bank');
        Route::post('/store-employer-bank', 'EmployerBank@store_employer_bank')->name('store-employer_bank');
        Route::post('/update-employer-bank', 'EmployerBank@update_employer_bank')->name('update-employer_bank');
        Route::get('/delete-employer-bank', 'EmployerBank@delete_employer_bank')->name('delete-employer_bank');
        Route::get('/edit-employer-bank', 'EmployerBank@edit_employer_bank')->name('edit-employer_bank');
        Route::get('/get-employer-bank', 'EmployerBank@get_employer_bank')->name('get-employer_bank');

        Route::get('/salary-bank', 'SalaryBank@salary_bank')->name('salary_bank');
        Route::post('/store-salary-bank', 'SalaryBank@store_salary_bank')->name('store-salary_bank');
        Route::post('/update-salary-bank', 'SalaryBank@update_salary_bank')->name('update-salary_bank');
        Route::get('/delete-salary-bank', 'SalaryBank@delete_salary_bank')->name('delete-salary_bank');
        Route::get('/edit-salary-bank', 'SalaryBank@edit_salary_bank')->name('edit-salary_bank');
        Route::get('/get-salary-bank', 'SalaryBank@get_salary_bank')->name('get-salary_bank');

    });

    //master/statutory_master
    Route::namespace('admin\master\statutory_master')->name('statutory_masters.')->prefix('masters/statutory-masters')->group(function () {
        Route::get('/employee-pf', 'EmployeePF@employee_pf')->name('employee-pf');
        Route::post('/store-employee-pf', 'EmployeePF@store_employee_pf')->name('store-employee-pf');
        Route::post('/update-employee-pf', 'EmployeePF@update_employee_pf')->name('update-employee-pf');
        Route::get('/delete-employee-pf', 'EmployeePF@delete_employee_pf')->name('delete-employee-pf');
        Route::get('/edit-employee-pf', 'EmployeePF@edit_employee_pf')->name('edit-employee-pf');
        Route::get('/get-employee-pf', 'EmployeePF@get_employee_pf')->name('get-employee-pf');


        Route::get('/esic', 'ESICMaster@esic')->name('esic');
        Route::post('/store-employee-esic', 'ESICMaster@store_employee_esic')->name('store-employee-esic');
        Route::post('/update-employee-esic', 'ESICMaster@update_employee_esic')->name('update-employee-esic');
        Route::get('/delete-employee-esic', 'ESICMaster@delete_employee_esic')->name('delete-employee-esic');
        Route::get('/edit-employee-esic', 'ESICMaster@edit_employee_esic')->name('edit-employee-esic');
        Route::get('/get-employee-esic', 'ESICMaster@get_employee_esic')->name('get-employee-esic');



        Route::get('/gratuity', 'Gratuity@gratuity')->name('gratuity');
        Route::post('/store-gratuity', 'Gratuity@store_gratuity')->name('store-gratuity');
        Route::post('/update-gratuity', 'Gratuity@update_gratuity')->name('update-gratuity');
        Route::get('/delete-gratuity', 'Gratuity@delete_gratuity')->name('delete-gratuity');
        Route::get('/edit-gratuity', 'Gratuity@edit_gratuity')->name('edit-gratuity');
        Route::get('/get-gratuity', 'Gratuity@get_gratuity')->name('get-gratuity');

        Route::get('/income-tax', 'IncomeTaxMaster@income_tax')->name('income-tax');
        Route::post('/store-income-tax', 'IncomeTaxMaster@store_income_tax')->name('store-income-tax');
        Route::post('/update-income-tax', 'IncomeTaxMaster@update_income_tax')->name('update-income-tax');
        Route::get('/delete-income-tax', 'IncomeTaxMaster@delete_income_tax')->name('delete-income-tax');
        Route::get('/edit-income-tax', 'IncomeTaxMaster@edit_income_tax')->name('edit-income-tax');
        Route::get('/get-income-tax', 'IncomeTaxMaster@get_income_tax')->name('get-income-tax');

        Route::get('/profession-tax', 'ProfessionTaxMaster@profession_tax')->name('profession-tax');
        Route::post('/store-profession-tax', 'ProfessionTaxMaster@store_profession_tax')->name('store-profession-tax');
        Route::post('/update-profession-tax', 'ProfessionTaxMaster@update_profession_tax')->name('update-profession-tax');
        Route::get('/delete-profession-tax', 'ProfessionTaxMaster@delete_profession_tax')->name('delete-profession-tax');
        Route::get('/edit-profession-tax', 'ProfessionTaxMaster@edit_profession_tax')->name('edit-profession-tax');
        Route::get('/get-profession-tax', 'ProfessionTaxMaster@get_profession_tax')->name('get-profession-tax');

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
        Route::post('/update-award', 'Award@update_award')->name('update-award');
        Route::get('/edit-award', 'Award@edit_award')->name('edit-award');
        Route::get('/delete-award-record', 'Award@delete_award_record')->name('delete-award-record');
        Route::get('/get-award-record', 'Award@get_award_record')->name('get-award-record');
    });

    //UserManagement
    Route::namespace('admin\user_management')->name('user_management.')->prefix('user-management')->group(function () {
        Route::get('/user-management', 'UserManagement@user_management')->name('user-management');
    });

    //ajax call to get data
    Route::get('/get_department_by_company', 'DepartmentController@get_department_by_company')->name('get_department_by_company');
    Route::post('/get_employee_id', 'admin\master\employee_master\PersonalDetail@get_employee_id')->name('get_employee_id');
    Route::post('/search_employee', 'admin\master\employee_master\PersonalDetail@search_employee')->name('search_employee');
    
    Route::get('/get_location_by_company', 'LocationController@get_location_by_company')->name('get_location_by_company');
    Route::get('/get_employee_by_company', 'EmployeeController@get_employee_by_company')->name('get_employee_by_company');
    Route::get('/get_department_location_by_company', 'admin\master\admin_master\ExpenseCategory@get_department_location_by_company')->name('get_department_location_by_company');
    

});


Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return redirect()->back();
    //return "All cache cleared!";
});
